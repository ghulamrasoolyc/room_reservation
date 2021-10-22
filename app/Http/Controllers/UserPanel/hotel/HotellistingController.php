<?php

namespace App\Http\Controllers\UserPanel\hotel;
use Auth;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\add_hotel;
use App\Models\add_city;
use App\Http\Controllers\Controller;
class HotellistingController extends Controller
{

                        
     public function hotel_listing(Request $request){
       
           $this->validate($request, [
                               'hot_id' =>  'required',
                               'checkIn'  => 'required|date',
                               'checkOut'   => 'required|date',
                                     ]);

           $rhotel_id=$request->hot_id;
          
           $checkIn=$request->checkIn;
           $checkOut=$request->checkOut;
        //   $hotelSession=Session::put('rhotel_id');
        //   $checkIn=Session::put('checkIn', $checkIn);
        //   $checkOut=Session::put('checkOut', $checkOut);
        //   Session::put('rhotel', $rhotel_id);





           $count=DB::table('hotel')->join('city', 'city.id', '=', 'hotel.city_id')
                                    ->join('room', 'room.hotel_id', 'hotel.id')
                               ->select('city.city_name')
                                ->where('city.city_name',$rhotel_id)
                                
                                ->where('room.status', 0)
                         
                               ->get();
           $after_counted=count($count);
      
      if($after_counted > 0){
		             $city=DB::table('city')
                                ->select('id')
                                ->where('city.city_name',$rhotel_id)
                                ->get();
                $city_idd=$city[0]->id;
        
                  $findrecords=DB::table('hotel')
                    ->join('room', 'room.hotel_id', 'hotel.id')
                   ->join('city', 'city.id', '=', 'hotel.city_id')
                  ->select('hotel.id',
                   'hotel.Hotel_name', 'hotel.address',
                   'city.city_name', 'hotel.street',
                    'hotel.contact', 'hotel.image', 'room.status')
                   ->where('hotel.city_id',$city_idd)
                   ->where('room.status', 0)
                   ->get();


       return view('User.hotel.listing')
                  ->with(
                    ['after_counted'=>$after_counted, 
                     'singleHotel'=>$findrecords, 
                     'checkIn'=>$request->checkIn,
                     'hot_id'=>$rhotel_id,
                    'checkOut'=>$request->checkOut, 
                    'hot_id'=>$city_idd]);
                      }
       else
             {
          $request->session()->flash('message.level', 'danger');
          $request->session()->flash('message.content', 'Sorry..!No found hotel.please try again');
          return redirect()->back();
                        }
	                    }
                    
        public function hotel_listings($rhotel_id)
                     {
       
                   Session::put('rhotel', $rhotel_id);
                         $search=DB::table('hotel')
                   ->join('room', 'room.hotel_id', 'hotel.id')
                   ->join('city', 'city.id', '=', 'hotel.city_id')
                  ->select('hotel.id',
                   'hotel.Hotel_name', 'hotel.address', 'room.status',
                   'city.city_name', 'hotel.street',
                    'hotel.contact', 'hotel.image')
                  ->where('city.id',$rhotel_id)
                  ->where('hotel.status', 1)
                  ->where('room.status',0)
                  ->get();










                  $count=DB::table('hotel')->join('city', 'city.id', '=', 'hotel.city_id')
                  ->select('hotel.Hotel_name')
                  ->where('city.id',$rhotel_id)
                  ->get();
                   $after_counted=count($count);
    
                  if($after_counted >=1){
          return view('user.hotel.listing')
                  ->with(['after_counted'

                  =>$after_counted, 'singleHotel'=>$search, 'hot_id'=>$rhotel_id]);


                   }
                  else
                   {
                  $cities=DB::table('city')->get();
          
          return view('welcome')->with(
                   ['cites'=>$cities, 'msg'=> '<strong>Warning</stron>There are no hotel availible in our Site.Please try again with another City']);
                    }
                    }





   public function listing_single_hotel($id){

    
           $sessionID=Session::put('hotel_id',$id);


                     $db=DB::table('room_type')->select('id as typesid')->get();
                    
          $uniquedata=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })
                    ->join('gallery', 'gallery.room_id', 'room.id')

                    ->select( 'hotel.id as hotel_id', 
                    'room.*', 'room.room_no', 'room.room_type_id as room_type_iid', 'room.id as room_iid', 'room.room_type_id', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid', 'hotel.image', 'hotel.Hotel_name',
                     'gallery.galleries')
                    ->where('hotel.id', $id)
                    ->where('room.status', 0)
                    
                    ->paginate(10);
                 
                //   $data=$uniquedata[0]->galleries;
           
                //     $querygallery=DB::table('gallery')->where('gallery.hotel_id', $id)->select('gallery.galleries')->paginate();
                //     // $counted=count($querygallery);
            
                
               
                   
                      return view('User.hotel.hotel-detail')
                      ->with([
                      'generaic_room'=>$uniquedata,
                      'hot_idd'=>$id
                       ]);
               

                    }
              

                      
                   

                public function booking_room(Request $request){
                   

                      $checkin=Session::get('checkIn');
                      $checkOut=Session::get('checkOut');
                      $sumroom=$request->room_id1;
                      $hot_iid=$request->hot_iid;
                      $h_room_type=$request->h_room_type;
             if($sumroom < 1){
                    $sumPrice=$request->single_room_price;
                      }
             else
                     {
              $sumPrice=$request->aftersumprice;
                       }
                  $roomUpdate=DB::table('room')
                 ->where('room.hotel_id', $request->hot_iid)
                 ->where('room.room_type_id', $request->h_room_type)
                 ->update(['room.status'=>'1']);


                   $booking=DB::table('room')
                   ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                   ->join('hotel', function($join){
                    $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                    ->select( 'hotel.id as hotel_id', 
                    'room.*', 'room.room_no', 'room.id as room_iid', 'hotel.Hotel_name' ,'room.room_type_id', 'hotel.image', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid')
                     ->where('room.hotel_id',$request->hot_iid)
                     ->where('room.room_type_id', $request->h_room_type)
                      ->paginate($sumroom);

              return view('Booking.book')
                              ->with(['booking'=>$booking,'sumPrice'=>$sumPrice,
                                                'sumroom'=>$sumroom,'hot_iid'=>$hot_iid,
                                                'checkin'=>$checkin,'checkOut'=>$checkOut,
                                                'h_room_type'=>$h_room_type]);


                          }
                 public function hoteltest(){
                        return view('User.hotel.book');
                          }
            public function reservation_room($room_type_id){
                     $getspecificdata=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                    ->join('hotel', function($join){
                    $join->on('hotel.id', '=', 'room.hotel_id');
                     })
                   
                    ->select('room.room_type_randnum', 'hotel.id as hotel_id', 
                    'room.*', 'room.room_no', 'room.id', 
                    'room_type.room_types', 'room_type.id as room_type_iid', 'hotel.Hotel_name' , 'hotel.image')
                   
                    ->where('room.room_type_id', $room_type_id)->get();
                      return view('User.hotel.book')->with('get_by_room', $getspecificdata);
                        }
                public function getcities(Request $request)
                              {
              $request = Request::all();
              print_r($request);
              exit();
                     }


            public function room_booking(){
              return view('User.hotel.book');
                  }
    public function hotelSearch_ratings(Request $request){

           $rhotel_id=$request->city_id;
           $rating_ids=$request->rating_id;
      

                  $rating=DB::table('hotel')
                   ->join('room', 'room.hotel_id', 'hotel.id')
                   ->join('city', 'city.id', '=', 'hotel.city_id')
                  ->select('hotel.rating')
                  ->where('hotel.city_id',$rhotel_id)
                  ->where('hotel.status', 1)
          
                  ->where('hotel.rating', $rating_ids)
                  
                  ->where('room.status',0)
                  ->get();

           $room_rating=count($rating);

if($room_rating >=1){
                   $search=DB::table('hotel')
                   ->join('room', 'room.hotel_id', 'hotel.id')
                   ->join('city', 'city.id', '=', 'hotel.city_id')
                  ->select('hotel.id',
                   'hotel.Hotel_name', 'hotel.address', 'room.status', 'hotel.rating',
                   'city.city_name', 'hotel.street',
                    'hotel.contact', 'hotel.image')
                  ->where('hotel.city_id',$rhotel_id)
                  ->where('hotel.status', 1)
          
                  ->where('hotel.rating', $rating_ids)
                  
                  ->where('room.status',0)
                  ->get();
        $count=DB::table('hotel')->join('city', 'city.id', '=', 'hotel.city_id')
                                ->select('hotel.Hotel_name')
                                ->where('city.id',$rhotel_id)
                                ->where('hotel.status', 1)
                                ->get();

            $after_counted=count($count);
 
 

       return view('user.hotel.listing')
                  ->with(
                    ['after_counted'=>$after_counted, 
                     'singleHotel'=>$search, 
                     'checkIn'=>$request->checkIn,
                     'hot_id'=>$rhotel_id,
                     'room_ratings'=>$room_rating,
                    'checkOut'=>$request->checkOut]);
                      
                }

     else{
$search=DB::table('hotel')
                      ->join('room', 'room.hotel_id', 'hotel.id')
                   ->join('city', 'city.id', '=', 'hotel.city_id')
                  ->select('hotel.id',
                   'hotel.Hotel_name', 'hotel.address',
                   'city.city_name', 'hotel.street',
                    'hotel.contact', 'hotel.image')
                  ->where('hotel.city_id',$rhotel_id)
                  ->where('hotel.status', 1)
                   ->where('room.status', 0)
                    ->get();
      
             $count=DB::table('hotel')->join('city', 'city.id', '=', 'hotel.city_id')
                                ->select('hotel.Hotel_name')
                                ->where('city.id',$rhotel_id)
                                ->where('hotel.status', 1)
                                ->get();

            $after_counted=count($count);
     // $request->session()->flash('message.level', 'success');
     //    $request->session()->flash('message.content', 'Your Required rating Hotel is not found..!!');

 
       return view('user.hotel.listing')
                  ->with(
                    ['after_counted'=>$after_counted, 
                     'singleHotel'=>$search, 
                     'checkIn'=>$request->checkIn,
                     'hot_id'=>$rhotel_id,
                    'checkOut'=>$request->checkOut]);
                      }
     





                     }
                     }
