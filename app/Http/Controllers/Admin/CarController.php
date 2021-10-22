<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Location;
use App\Model\Car_model;
use DB;
class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Add_car(){
    	$car=DB::table('car')->where('status',0)->select('name', 'id', 'status')->get();
    	return view('Admin.Car.Add_car')->with('car',$car);
    }

public function admin_add_car(Request $request){


       $this->validate(request(),[
            'car_id' => 'required',

             'from' => 'required|min:3',
             'to' =>   'required|min:3',
                 'price' => 'required|string',
        ]);



        $data=DB::table('location')
        ->where('location.loc_from', $request->from)
        ->where('location.loc_to', $request->to)
        ->where('location.car_id', $request->car_id)
        ->select('loc_from', 'loc_to' ,'car_id' )->get();

        $data1=count($data);


        if($data1 >= 1 ){
        $car=DB::table('car')->where('status',0)->select('name', 'id', 'status')->get();
        $request->session()->flash('message.level', 'danger');
        $request->session()->flash('message.content', 'Sorry..!This Location is Already set');
          // return view('Adminpanel.city.add_city')->with(['dataq'=>$dataq,
          //  'Messag'=>'Sorry..! Duplicate Entry is Not Allowed']);
        return back();

        }
        else
        {
              $add_cities = new  Location;
              $add_cities->car_id=$request->car_id;
               $add_cities->loc_from=$request->from;
               $add_cities->loc_to=$request->to;
                $add_cities->price=$request->price;

               $add_cities->save();


                  $dataq=DB::table('location')->get();
         $request->session()->flash('message.level', 'success');
         $request->session()->flash('message.content', 'One Record Added Successfully!');

              return back();
        }

        }
  public function viewCars(){
    $cardet=DB::table('location')
                 ->join('car', 'car.id', '=', 'location.car_id')
                 ->select('location.*', 'car.name')

                    ->get();
  	return view('Admin.Car.viewCar')->with('cardet', $cardet);
  }
  // public function admin_editelocation($id){
  //   $cardets=DB::table('location')
  //                ->join('car', 'car.id', '=', 'location.car_id')
  //                ->select('location.*', 'car.name')
  //                 ->where('location.id', $id)
  //                   ->get();
  //       return view('Admin.Car.editCar')->with('cardet', $cardets);
  // }



public function add_Model_car(){
      return view('Admin.Car_model.AddCar');
}





public function AddLimousines(Request $request){

          $this->validate(request(),[
              'model' => 'required|string|min:3',

              'door' => 'required|integer|min:1',
              'seat' =>   'required|integer',

              'image' => 'required',
               'car_number' => 'required',
                'price' => 'required|integer',
             ]);
 $status=0;


        $data=DB::table('car_models')
        ->where('car_models.car_number', $request->car_number)

        ->select('car_number')->get();

        $data1=count($data);


        if($data1 >= 1 ){
        // $car=DB::table('car')->where('status',0)->select('name', 'id', 'status')->get();
        $request->session()->flash('message.level', 'danger');
        $request->session()->flash('message.content', 'Sorry..!This Car is Already inserted');
          // return view('Adminpanel.city.add_city')->with(['dataq'=>$dataq,
          //  'Messag'=>'Sorry..! Duplicate Entry is Not Allowed']);
        return back();

        }
        else
        {
            $image= $request->file('image');

  $new=rand(). '.'. $image->getClientOriginalExtension();

$image->move(public_path("assets/img/car"), $new);


              $add_cities = new  Car_model;
              $add_cities->model=$request->model;
               $add_cities->seat=$request->seat;
               $add_cities->door=$request->door;
                // $add_cities->air_condition=$request->air_condition;
                //  $add_cities->transmition=$request->transmition;
                  $add_cities->image=$new;
                   $add_cities->car_number=$request->car_number;
                 $add_cities->price=$request->price;
                 $add_cities->status=$status;

                       $add_cities->save();




                  $dataq=DB::table('location')->get();
         $request->session()->flash('message.level', 'success');
         $request->session()->flash('message.content', 'One Record Added Successfully!');

              return back();
        }
}
public function view_Model_cars(){
        $cardetsx=DB::table('car_models')->select('car_models.*')->get();
        return view('Admin.Car.viewCar')->with('cardetsx',$cardetsx);


}
  public function admin_editcars($id){
        $cardetsx=DB::table('car_models')->where('id', $id )->select('car_models.*')->get();
        return view('Admin.Car.editCar')->with('cardetsx',$cardetsx);
  }
  public function admin_uopdatelocation(Request $request){

      $cardetsx=DB::table('car_models')

                  ->where('car_models.id', $request->id)
                    ->update(['model'=>$request->model,
                      'seat'=>$request->seat, 'door'=>$request->door, 'price'=>$request->price]);


            if($cardetsx){
               $cardetsx=DB::table('car_models')->select('car_models.*')->get();
        return view('Admin.Car.viewCar')->with('cardetsx',$cardetsx);
            }

}
public function deletecar($id){

     $cardetsxx=DB::table('car_models')

                  ->where('car_models.id', $id)
                    ->delete(['car_models.id'=>$id]);
           if($cardetsxx){
               $cardetsx=DB::table('car_models')->select('car_models.*')->get();
        return view('Admin.Car.viewCar')->with('cardetsx',$cardetsx);
            }
}
public function admin_view_payment(){

    $viewPaymen=DB::table('payment')
    ->join('car_models', 'car_models.id', '=', 'payment.car_id')
    ->select('car_models.model', 'car_models.price', 'payment.id as pay_id',  'car_models.id as car_model_id', 'payment.*',
    'payment.id as payment_id', 'car_models.status')
    ->get();
    return view('Admin.payment.viewpayment')->with('viewpayments', $viewPaymen);
}

public function bookingConfirmation($user_id){

     $confilrm=DB::table('payment')
      ->join('car_models', 'car_models.id', '=', 'payment.car_id')
        ->select('payment.id', 'car_models.id', 'car_models.status')
             ->where('payment.id', $user_id)
                    ->update(['car_models.status'=> 1]);

                    return back();

}

public function bookingConfirmationsrelase($user_id){

     $confilrm=DB::table('payment')
      ->join('car_models', 'car_models.id', '=', 'payment.car_id')
        ->select('payment.id', 'car_models.id', 'car_models.status')
             ->where('payment.id', $user_id)
                    ->update(['car_models.status'=> 0]);

                    return back();

}


public function deletepayment($pay_id){
    $confilrm=DB::table('payment')
             ->where('payment.id', $pay_id)
                    ->delete();

                    return back();

}





public function Mercedes(){
$limousinedata=DB::table('payment')
  ->join('car_models', 'car_models.id', '=', 'payment.car_id')
 ->select('payment.*', 'car_models.*', 'payment.id as pay_id')->get();

 return view('Admin.Car.viewalllimousine')->with(['limousinedataa'=>$limousinedata]);

}


public function viewlimousinebookinghistory($id){
    $viewlimosinehist=DB::table('payment')
    ->join('car_models', 'car_models.id', '=', 'payment.car_id')
    ->select('payment.*', 'car_models.*', 'payment.id as pay_id')
    ->where('payment.car_id', $id)
     ->get();

   return view('Admin.Car.viewlimosinehistory')->with(['viewlimosinehist'=>$viewlimosinehist]);
}

public function adminhistoryhirerdetailss($id){

  $MercedesData=DB::table('payment')
 ->join('car_models', 'car_models.id', '=', 'payment.car_id')
 ->where('payment.id', $id)
 ->select('payment.*', 'car_models.*', 'payment.id as pay_id')->first();
  return view('Admin.Car.viewDetail')->with('MercedesDataa',$MercedesData);
}
}


// public function Mercedes_S(){
//     $Mercedes_=DB::table('car_models')
//     ->select('car_models.*')->get();
//        foreach($Mercedes_ as $Mercedes){
//            $Merceded[]=$Mercedes->id;
//          }
// if($Merceded['1']){
//    $MercedesData=DB::table('payment')
//    ->join('car_models', 'car_models.id', '=', 'payment.car_id')
//    ->where('car_models.id',$Merceded['1'])
//   ->select('payment.*', 'car_models.*', 'payment.id as pay_id')->get();
//    $lmname=$MercedesData['0']->model;
//     return view('Admin.Car.Mercedes')->with(['MercedesData'=>$MercedesData]);
// }
// }



// public function Mercedes_v(){
//     $Mercedes_=DB::table('car_models')
//     ->select('car_models.*')->get();
//        foreach($Mercedes_ as $Mercedes){
//            $Merceded[]=$Mercedes->id;
//          }


// if($Merceded['2']){

//    $MercedesData=DB::table('payment')
//    ->join('car_models', 'car_models.id', '=', 'payment.car_id')
//    ->where('car_models.id',$Merceded['2'])
//   ->select('payment.*', 'car_models.*', 'payment.id as pay_id')->get();

//     return view('Admin.Car.Mercedes')->with(['MercedesData'=>$MercedesData]);
//    }

// }

// public function Toyota(){
//     $Mercedes_=DB::table('car_models')
//     ->select('car_models.*')->get();
//        foreach($Mercedes_ as $Mercedes){
//            $Merceded[]=$Mercedes->id;
//          }

// if($Merceded['3']){

//    $MercedesData=DB::table('payment')
//    ->join('car_models', 'car_models.id', '=', 'payment.car_id')
//    ->where('car_models.id',$Merceded['3'])
//   ->select('payment.*', 'car_models.*', 'payment.id as pay_id')->get();

//     return view('Admin.Car.Mercedes')->with(['MercedesData'=>$MercedesData]);
// }
// }

