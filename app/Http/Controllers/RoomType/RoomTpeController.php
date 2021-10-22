<?php

namespace App\Http\Controllers\RoomType;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Session;
use App\Models\add_hotel;
use App\Models\add_city;


class RoomTpeController extends Controller
{
    //   public function __construct()
    //  {
    //     $this->middleware('auth');
    // }

    public function roomType_seacrh(Request $req){
           $r_hotel_id=$req->r_hotel_type_id;
           $r_type_id=$req->room_type_search;

              $uniquedata=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                    ->select( 'hotel.id as hotel_id', 
                    'room.*', 'room.room_no', 'room.room_type_id as room_type_iid', 'room.id as room_iid', 'room.room_type_id', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid', 'hotel.image', 'hotel.Hotel_name')
                    ->where('room.hotel_id', $r_hotel_id)
                    ->where('room.room_type_id', $r_type_id)
                    ->where('room.status', 0)
                    ->get();
                 

            $specicRoom_types=DB::table('room')
                    ->join('room_type', 'room_type.id', 'room.room_type_id')
                    ->join('hotel', 'hotel.id', 'room.hotel_id')
                    ->where('room.hotel_id',$r_hotel_id)
                    ->where('room.status', 0)
                    ->select('room_type.room_types', 'room_type.id as room_type_id' , 'hotel.id as Hotel_id')
                    ->get();

                


             return view('User.hotel.hotel-detail')
                   ->with([
                    'specicRoom_types'=>$specicRoom_types,
                     'generaic_room'=>$uniquedata, 'hot_idd'=>$r_hotel_id]);
                 
                     }
                     }
