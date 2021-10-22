<?php
namespace App\Http\Controllers\AdminPanel;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\add_city;
use App\Models\add_hotel;
use Session;
use App\Model\Car_model;


class CarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
public function add_Model_car(){
      return view('Admin.Car.AddCar');
} 
                        public function view_Model_cars(){
                  
        $cardetsx=DB::table('car_models')->select('car_models.*')->get();
        return view('Admin.Car.viewCar')->with('cardetsx',$cardetsx);


}
public function AddLimousines(Request $request){

       $this->validate(request(),[
            'model' => 'required',

             'door' => 'required|integer|min:1',
             'seat' =>   'required|integer',
             'transmition' => 'required',

             'air_condition' => 'required',
              'image' => 'required',
               'car_number' => 'required',
                'price' => 'required',
              

      
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

$image->move(public_path("Assets_car/img/car"), $new);


              $add_cities = new  Car_model;
              $add_cities->model=$request->model;
               $add_cities->seat=$request->seat;
               $add_cities->door=$request->door;
                $add_cities->air_condition=$request->air_condition;
                 $add_cities->transmition=$request->transmition;
                  $add_cities->image=$new; 
                   $add_cities->car_number=$request->car_number;
                 $add_cities->price=$request->price;
                 $add_cities->status=$status;
             
                       $add_cities->save();




         $request->session()->flash('message.level', 'success');
         $request->session()->flash('message.content', 'One Record Added Successfully!');

              return back();
        }
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

}
