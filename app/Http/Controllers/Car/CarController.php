<?php 

namespace App\Http\Controllers\Car;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\create;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\validator;
use App\Models\payment;
use Mail;
 use Illuminate\Support\Facades\View;
use Session;

class CarController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
 

    public function carModule(){
      return view('car.carModule');


                   }
                   public function viewCar(Request $request){

                    $car=DB::table('car_models')->select('car_models.*')->get();
                    return view('car.displayCar')->with('car', $car);
                   }
       public function car_booking($id){
               $car=DB::table('car_models')->select('car_models.*')
              ->where('car_models.id', $id)
               ->get();
   return view('car.viewindCar')->with('car_sep', $car);

                   }
                   public function user_booking(Request $request){
                 

                 
                   }
                   } 