<?php

namespace App\Http\Controllers\UserPanel\hotel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class attractionsController extends Controller
{

    public function attractions_view(){
    	$attrations=DB::table('attractions')->select('attractions.*')->get();
        
    	return view('Attractions/attrations')->with('attrations', $attrations);
    }
    
}
