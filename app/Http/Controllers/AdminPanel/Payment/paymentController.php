<?php 

namespace App\Http\Controllers\AdminPanel\Payment;
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

class paymentController extends Controller{
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
 

    public function next_confirmations(Request $request){


      $reqsumroom=$request->sumroom;

      $roomcheck=DB::table('room')->select('room.id')
      ->where('room.room_type_id',$request->h_room_type)
      ->where('room.hotel_id', $request->hotel_id)
      ->where('room.status',0)
      ->paginate($reqsumroom);


         foreach ($roomcheck as $key => $value) {
             $update=DB::table('room')
            ->where('room.room_type_id',$request->h_room_type)
            ->where('room.hotel_id', $request->hotel_id) 
            ->where('room.id', $roomid[]=$value->id) 
            ->select('room.status')
            ->update(['room.status'=>1]);
               }
         
       
              $invliceNumber=str_random (5).'Booking.id';
              $bookingCheck=DB::table('booking')->select('booking.checkin')->get();
  
  // if($bookingCheck <= 1 ){
               if(DB::table('room')->where('room.status', 1)->select('room.status')->get()){
             	$user['links']=str_random(30);
              $booking_det= new payment;
              $booking_det->fname=$request->fullname;
              $booking_det->email=$request->email;
              $booking_det->phone=$request->phone;
              $booking_det->room_type_id=$request->h_room_type;
              $booking_det->sumPrice=$request->sumPrice;
              $booking_det->sumroom=$request->sumroom;
              $booking_det->hotel_id=$request->hotel_id;
              $booking_det->checkin=$request->checkIn;
              $booking_det->checkOut=$request->checkOut;
              $booking_det->invliceNumber=$invliceNumber;
              $booking_det->save();

      

          $email=$request['email'];
          $checkin=$request['checkIn'];
          $checkOut=$request['checkOut'];
          $name=$request['fullname'];
          $phone=$request['phone'];
          $hotel_id=$request['hotel_id'];
          $room_type_id=$request['h_room_type'];
          $sumroom=$request['sumroom'];
          $sumPrice=$request['sumPrice'];

          }
      $ourrecords=DB::table('room')->join('hotel', 'hotel.id', '=', 'room.hotel_id')
                                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                                    ->select('hotel.Hotel_name',  'room_type.room_types')
                                    ->where('room.hotel_id',$hotel_id)
                                    ->where('room.status', 1)
                                    ->where('room.room_type_id',$room_type_id)
                                    ->paginate($sumroom);
             

   return view('User.Confirmation.boking_confirmation')
                     ->with(['ourrecords'=>$ourrecords,
                       'sumroom'=>$sumroom, 
                       'sumPrice'=>$sumPrice,
                       'checkin'=>$checkin,
                       'checkOut'=>$checkOut,
                        'name'=>$name,
                        'email'=>$email, 
                        'phone'=>$phone,
                        'hotel_id'=>$hotel_id, 
                        'room_type_id'=>$room_type_id  ]);
                   
  
                    
}
            
 
     // return back()->with('Error', $validator->errors());
                     
    public function payents($token){
    	   $check=DB::table('booking')->where('token', $token)->first();
    	   if($is_null($check)){
    	   	return redirect()->to('welcome')->with('msg', 'hello');
    	   }
   
                     } 

public function print_slip(Request $request){


          $email=$request['email'];
          $name=$request['fullname'];
               $checkin=$request['checkin'];
          $checkOut=$request['checkOut'];
          $phone=$request['phone'];
          $hotel_id=$request['hotel_id'];
          $room_type_id=$request['h_room_type'];
          $sumroom=$request['sumroom'];
           $sumPrice=$request['sumPrice'];


      $ourrecords=DB::table('room')->join('hotel', 'hotel.id', '=', 'room.hotel_id')
                                ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                                ->select('hotel.Hotel_name',  'room_type.room_types')
                                ->where('room.hotel_id',$hotel_id)
                                ->where('room.room_type_id',$room_type_id)
                                ->paginate($sumroom);
                                
          return view('User.Confirmation.printed')
               ->with(['ourrecords'=>$ourrecords,
                       'sumroom'=>$sumroom, 
                       'sumPrice'=>$sumPrice,
                              'checkin'=>$checkin, 
                       'checkOut'=>$checkOut,
                       'name'=>$name, 'email'=>$email, 'phone'=>$phone,
                        'hotel_id'=>$hotel_id, 'room_type_id'=>$room_type_id  ]);
  
                    }
     public function transictions(){

                        $transictions=DB::table('booking')
                              ->join('hotel', 'hotel.id', 'booking.hotel_id')
                   
                               ->join('room_type', 'room_type.id', 'booking.room_type_id')
                               ->select('booking.*', 'room_type.room_types', 'hotel.Hotel_name')

                                ->get();
                           $sumtotal=DB::table('booking')
                            
                                  ->select('booking.sumPrice')

                                   ->get();
                                   $sump=count($sumtotal);

                           if($sump >=1){        
                               foreach ($sumtotal as $key => $value) {
                                 $sumdata[]=$value->sumPrice;
                               }
                              @$sumdsss=array_sum($sumdata);
                                } 

                             return view('Adminpanel.booking.transictions')->with(['transictions'=>$transictions, 'sumdsss'=>@$sumdsss]);
                       }
            public function hotel_wise(){
     
                     $hotel_wise=DB::table('booking')
                                  ->join('hotel', 'hotel.id', 'booking.hotel_id')
                                  ->Join('city', function ($join)
                                   {$join->on('city.id', '=', 'hotel.city_id'); })
                                  ->join('room_type', 'room_type.id', 'booking.room_type_id')
                            
                                  ->select('booking.*', 'booking.hotel_id as book_hotel_id', 'room_type.room_types', 'city.city_name', 'hotel.contact', 'hotel.Hotel_name')
                         
                                  ->get();

          
                       return view('Adminpanel.booking.hotel_wise')->with('hotel_wise', $hotel_wise);
                               
                       }
                  public function admin_seperate_hotel($booking_id){

                            $hotel_wise_pay=DB::table('booking')
                                  ->join('hotel', 'hotel.id', 'booking.hotel_id')
                                  ->join('room_type', 'room_type.id', 'booking.room_type_id')
         
                                  ->select('booking.*','booking.id as booking_id',
                                   'room_type.room_types','hotel.contact', 
                                   'hotel.Hotel_name', 'room_type.room_types')

                                  ->where('booking.hotel_id', $booking_id)
                                   ->get();
                               $sum=DB::table('booking')
                                  ->join('hotel', 'hotel.id', 'booking.hotel_id')
                                  ->join('room_type', 'room_type.id', 'booking.room_type_id')
         
                                  ->select('booking.sumPrice')

                                  ->where('booking.hotel_id', $booking_id)
                                   ->get();
                               foreach ($sum as $key => $value) {
                                   $sumdata[]=$value->sumPrice;
                                   }
                                   $sumd=array_sum($sumdata);
                   
                      return view('Adminpanel.booking.seperat_hotel')->with(['hotel_wise_pay'=>$hotel_wise_pay, 'sumd'=>$sumd]);
                          
                       }
                       } 