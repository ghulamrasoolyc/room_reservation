<?php

namespace App\Http\Controllers\UserPanel\hotel;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\Models\booking;
use App\Http\Controllers\Controller;
use Session;
class BookingController extends Controller
{
 
     public function bookingRoom($id)
    {
      
      

      $selectId=DB::table('room')
       // ->join('hotel','hotel.id', '=', 'room.hotel_id')
       ->where('id', $id)
       // ->select('room.id', 'hotel.id')
       ->get();


       return view('User.booking.room')->with('selectId', $selectId);
    }
public function final_details(Request $request){ 

                      $checkin=Session::get('checkIn');
                      $checkOut=Session::get('checkOut');
                      
                      $sumroom=$request->room_id1;

                      $hot_iid=$request->hot_iid;

                      $room_iid=$request->room_iid;

                      $h_room_type=$request->h_room_type;
                 if($sumroom < 2){
                    $sumPrice=$request->single_room_price;
                   }
                    else
                   {
                  $sumPrice=$request->aftersumprice;
                       }
                       

                       $customer=DB::table('hotel')
                                             ->join('city', 'city.id', '=', 'hotel.city_id')
                                             ->join('room', 'room.hotel_id', '=', 'hotel.id')
                                             ->join('room_type', function($join){
                                              $join->on('room_type.id', '=', 'room.room_type_id');
                                               })
                                             ->where('room.hotel_id', $request->hot_iid)
                                             ->where('hotel.id', $request->hot_iid)
                                             ->where('room.room_type_id', $request->h_room_type)
                                               ->select( 'hotel.id as hotel_id', 'city.city_name',
                                           'room.*', 'room.room_no', 'hotel.rating', 'hotel.contact', 'hotel.address','hotel.street', 
                                            'room.id as room_iid', 'room.room_type_id', 
                                            'room_type.room_types',  'hotel.Hotel_name', 
                                            'room_type.price','room_type.id as room_type_iid', 'hotel.image')
                                             ->paginate($sumroom);
                                      
         //   $customer=DB::table('room')
         //           ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

         //           ->join('hotel', function($join){
         //            $join->on('hotel.id', '=', 'room.hotel_id');
         //             })

         //            ->select( 'hotel.id as hotel_id', 
         //            'room.*', 'room.room_no', 'hotel.rating', 'hotel.address','hotel.street',  'room.id as room_iid', 'room.room_type_id', 
         //            'room_type.room_types',  'hotel.Hotel_name', 'room_type.price','room_type.id as room_type_iid', 'hotel.image')
                   

         //            ->where('room.hotel_id', $request->hot_iid)
         //            ->where('room.room_type_id', $request->h_room_type)
         //            ->paginate($sumroom);
             

  return view('Booking.final_detail')->with(['customer'=>$customer, 
                                       'hotel_id'=>$request->hot_iid,
                                       'h_room_type'=>$request->h_room_type,
                                       'sumroom'=>$sumroom,
                                       'sumPrice'=>$sumPrice,
                                       // 'title' =>$request->title,
                                       // 'fullname'=>$request->fullname,
                                       //  'email'=>$request->email,
                                        'checkin'=>$checkin,
                                        'checkOut'=>$checkOut,
                                        // 'phone'=>$request->phone
                                           ]);


                                           }
    
       

    public function invoice_booking(){
      return view('User.booking.invoice');
    }
    public function room_booking_details($id){
     
        $room_types=DB::table('room')
       ->join('room_type', 'room_type.id', 
        '=', 'room.room_type_id')
       ->join('hotel', 'hotel.id', '=', 'room.hotel_id')
       ->where('room.room_type_id', $id)
       ->select('room.*', 'room_type.room_types', 
        'room_type.id as room_types_id', 'hotel.Hotel_name', 'hotel.image')->get();
    
     return view('Booking.book')->with('room_types_detail', $room_types);
                        }






                       }
