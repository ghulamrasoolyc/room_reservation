<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use App\Model\Payment;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Http\sendingEmail;
use App\Rules\Captcha;
class UserController extends Controller
{

	public function home(){
	   
		$select=DB::table('location')->join('car', 'car.id', 'location.car_id')
		->select('car.id as Car_id', 'location.*', 'location.loc_from as loc_froms','car.name as car_name', 'location.id')
		->where('location.status', 0)
		->get();

		  $selectTo =DB::table('location')->join('car', 'car.id', 'location.car_id')
		->select('car.id as Car_id', 'location.*' ,'car.name as car_name', 'location.id')
		->where('location.status', 0)
		->get();

		$car_models=DB::table('car_models')->where('status', 0)->OrderBy('id', 'DESC')
		->select('car_models.*')->get();

		$limisuoine=DB::table('car_models')->where('status', 0)
         ->where('car_models.model', 'Limousine')
		->OrderBy('id', 'DESC')
		->select('car_models.*')->get();


			$modals=DB::table('car_models')->where('status', 0)

		->OrderBy('id', 'DESC')
		->select('car_models.id', 'car_models.model')->get();


$specificData=DB::table('car_models')->where('status', 0)

		 ->OrderBy('id', 'DESC')
		 ->select('car_models.*')->limit(6)->get();
		 
		return view('Car.carModule')->with(['select'=>$select,
		 'selectTo'=>$selectTo,
		 'car_models'=>$car_models, 'limisuoine'=>$limisuoine,  'modals'=>$modals, 'specificData'=>$specificData]);
	}

	public function Search_location(Request $request){
		$From=$request->from;
		$To=$request->to;
		$searchLocation=DB::table('location')
		->join('car', 'car.id', 'location.car_id')
		->where('loc_from' ,$request->from)
		->where('loc_to'   ,$request->to)
		->where('car.status', 0)
		->select('location.price' , 'location.id as location_id', 'car.name as car_name' , 'location.loc_from', 'location.loc_to')
		->get();



		return view('User.Car.CarListing')->with(['searchLocation'=>$searchLocation,
			'From'=>$From,
			 'To'=>$To]);
	}
    public function Book_cars($id){

		$searchLocations=DB::table('location')
		->join('car', 'car.id', 'location.car_id')
	    ->where('location.id', $id)
		->where('car.status', 0)
		->select('location.price' , 'location.id as location_id', 'car.name as car_name' , 'location.loc_from', 'location.loc_to')
		->get();

		return view('User.Car.Book')->with('searchLocation',$searchLocations);

    }

	public function Limousines(){
		$dbData=DB::table('car_models')
		                ->where('status', 0)
		                ->select('car_models.*')
		                ->get();
		return view('User.Car.Limousinescar')->with('dbData',$dbData);
	}
		public function taxiServices(){
		return view('User.Car.taxiServices');
	}
		public function About_us(){
		return view('User.Car.About_us');
	}
		public function Contact_us(){
		return view('User.Car.taxiServices');
	}
	
	public function contacted(){
		return view('User.Car.Contact_us');
	}
	
	
	public function regiteredHotel(){
	    $hotelValue=DB::table('hotel')->get();
	   return view('User.hotel.registeredHotel')->with('reg_hotel', $hotelValue);
	}
	
		public function Fleet(){
		return view('User.Car.Fleet');
	}
	public function car_reserveds($id){

		$limisuoine=DB::table('car_models')->where('status', 0)
         ->where('car_models.model', 'Limousine')
         ->where('car_models.id', $id)
		->select('car_models.*')->get();

	   return view('User.Car.CarReserved')->with('limisuoine',$limisuoine);

}
public function USer_booking_details(Request $request){
	$all=$request->all();
	print_r($all);
	exit();
}

public function addItem(Request $request) {
	// $all=$request->all();
	// print_r($all);
	// exit();
    // $rules = array (
    //         'name' => 'required',
    //         'email' => 'required',


    //           'phone' => 'required',
    //         'from' => 'required',
    //         'to' => 'required'

    // );
    // $validator = Validator::make ( Input::all (), $rules );

            $data = new Booking ();

            $data->name = $request->name;
             $data->email = $request->email;
              $data->phone = $request->phone;
               $data->from = $request->from;
                $data->to = $request->to;
                 // $data->model = $request->model;
                 //  $data->seat = $request->seat;
                 //   $data->door = $request->door;
                 //         $data->price = $request->price;
                 //          $data->car_id = $request->car_id;
                 //               $data->air_condition = $request->air_condition;


            $data->save ();


}


  public function stripePayment(Request $request){


     $filename = Str::random(10);



  	 try{
           $charge=Stripe::charges()->create([
              'amount' => 100,
             'currency' => 'USD',
       		 'description' => 'Your product info',
             'source' => $request->get('stripeToken'),
             'receipt_email' => 'rasool@gmail.com',
             'metadata' => [
               'order_id' => 2456,
          ]
           ]);
  	 }
  	 catch(Exception $e){

  	 }

       if($charge > 1){
       $payment = new Payment;
       $payment->name=$request->name;
       $payment->mail=$request->email;
       $payment->address=$request->address;
       $payment->city=$request->city;
       $payment->state=$request->state;
       $payment->country=$request->country;
       $payment->amount=$request->total;
       $payment->phone=$request->phone;
       $payment->invoice= $filename;
       $payment->save();
       if($charge){

           return view('User.payment.invoiced');

       }


       }

 }


    //     Stripe::setApiKey(env('STRIPE_SECRET'));
    //     Charge::create([
    //         'amount' => 1000,
    //         'currency' => 'idr',
    //         'description' => 'Your product info',
    //         'source' => $request->get('stripeToken'),
    //         'receipt_email' => 'rasool@gmail.com',
    //         'metadata' => [
    //             'order_id' => 2456,
    //         ]
    //     ]);

    //     save your customer order to database here
    //     return back()->with('success_message', 'Thank you! your payment has been accepted');
    // }

public function fetchajaxValue(Request $request){
   $car_services=$request->car_services;
	$fetch=DB::table('car_models')->where('car_models.model',$car_services)
	->select('car_models.*')
	->get();
	return view('frontcar', [
            'data'=>$fetch, 'catByUSer'=>'All car'
	]);
}



public function booking_cont(Request $request){
 

	   $payment = new Payment;

       $payment->fname=$request->fname1;
	   $payment->lanme=$request->lname1;
	    $payment->car_id=$request->car_select_id;

	   $payment->from_to=$request->origincity;
	      $payment->dest=$request->distinationcity;
       $payment->time=$request->timeinput;
       $payment->email=$request->email;
       $payment->date=$request->dateinput;
       $email=$request->email;
       $payment->phone=$request->tell;
       $payment->additionalinfod=$request->additionalinfod;
	   $payment->save();
	 

        // $data = array(
        //     'name' => $request->fname1,
        //      'origincity' => $request->origincity,
        //       'distinationcity' => $request->distinationcity,
        //     'message' => $request->tell
        // );

        // Mail::to('toursk2tech@gmail.com')->send(new sendingEmail($data));
        return back()->with('success', 'Thanks for contacting us!');
                      
                      
                      
                      
                      
	   
	   
	   
// return view('User.payment.paymentMethd');

}

     
public function passworderser(Request $request){

   $user = DB::table('users')->where('email', '=', $request->email)
    ->first();

if (count((array)$user) < 1) {
	             $request->session()->flash('message.level', 'danger');
                $request->session()->flash('message.content', 'Email is not registered yet.'); 
    return redirect()->back()->withErrors(['messages' =>'Email does not exist']);
}

else{
	$gteemail=DB::table('users')->where('users.email', $request->email)->select('users.*')->first();



     return view('vandor.password.setpasswords')->with('gteemail', $gteemail);

}

  }
  public function reset_password_vandors(Request $request){



  	// $this->validate($request,[
   //   'password'=>'required|min:6',
   //   'password_confirmation'=>'required|min:6'
   //  	]);


     if($request->password !==  $request->password_confirmation){


                	$gteemail=DB::table('users')->where('users.email', $request->email)->select('users.*')->first();
              return view('vandor.password.setpasswords')->with(['gteemail'=>$gteemail, 'success'=>'password confirmation is wrong.please try again']);

        }
        else{
        $pass = bcrypt($request->password);
        $changepassword=DB::table('users')->where('users.id', $request->id)->update(['password'=>$pass]);
        if($changepassword){
     	return view('auth.login');
       }
       }  


       }
       }
