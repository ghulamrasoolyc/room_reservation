<?php

namespace App\Http\Controllers\vandor;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Authentications extends Controller
{

 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

	  public function vandor_login()
     {
     	return view('vandor.register.vandor_login');
     }
    public function vandor_regiister(){

    	
	return view('vandor.register.vandor_register');
    }

   
    }
