<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    
     public function index()
    {

            $cities=DB::table('city')

                           ->join('hotel', 'city.id', '=', 'hotel.city_id')
                                ->join('room',function($join){
                                    $join->on('hotel.id', 'room.hotel_id');
                                })
                                ->select('city.city_name',
                                 'city.id','room.status')
                                ->orderBy('city.id', 'DESC')
                                ->where('room.status', 0)

                                ->get();
                          
              // print_r($cities);
              // exit();
                   $hotels=DB::table('hotel')
                        
                                ->join('room', 'hotel.id', '=', 'room.hotel_id')
                                ->select('hotel.Hotel_name', 'hotel.id as hotel_id', 'hotel.image')
                                ->orderBy('hotel.id', 'DESC')      
                                // ->where('hotel.status', '=', 1)
                        
                                ->where('room.status', 0)
                                ->get();
                           
     return view('welcome')->with(['cites'=>$cities, 'hotels'=>$hotels]);
                        }
}
