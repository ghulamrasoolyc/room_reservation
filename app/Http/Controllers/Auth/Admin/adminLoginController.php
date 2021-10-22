<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use validate;
use Auth;
USE validatePassword;

class adminLoginController extends Controller
{
   public function __construct(){
       $this->middleware('guest:admin', ['except'=>['logout']]); 

   }
    public function showLoginForm()
    {
      
        return view('auth/admin-login');
    }
    public function login(Request $request){
  
    
        $this->validate($request,[
            'email'  => 'required|email',
            'password' =>'required|min:6'
        ]);

if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
   return redirect()->intended(route('admin.dashboard'));

};
return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {

        Auth::guard('admin')->logout();

           return view('auth.admin-login');
    }




}
