<?php

namespace App\Http\Controllers\AdminPanel\booking;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\add_hotel;
use App\Models\room;

class AdminBookingController extends Controller
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
 
public function add_room(){
              
}
}