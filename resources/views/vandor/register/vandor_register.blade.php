@extends('User.site.layout')
 
 @section('content')

 @include('User.layout.header')


                 
                      <div class="container">

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">

                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->
                        <div id="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content">
                                    <h3>Sign In <span>Easy<strong>Book</strong></span></h3>
                                    <div class="custom-form">
                                                      <form name="registration" method="post" action="{{ route('register') }}"   name="registerform" class="main-register-form" id="main-register-form2">
                                                    {{csrf_field()}}
                                                                          @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong class="color:red">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                                    
                                                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">  
                               
                                                <input name="name" type="text"  name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                             
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="color:red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div><div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                               
                                                <input name="email" type="text"  name="email" value="{{ old('email') }}" placeholder="Email" required>
                         
                            </div>
        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="color:red">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                      
                                                <input name="password" type="password"  placeholder="password" required >

                        
                            </div>
    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="color:red">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                                                <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirrm Password" required  >

                            
                            </div>





                                                <button type="submit"     class="log-submit-btn color-bg"  ><span>Register</span></button>
                                            </form>
                                    <!--     <div class="lost_password">
                                            <a href="{{ route('password.request') }}">Lost Your Password?</a>
                                        </div> -->
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                   
                                <!--tab end -->
                            </div>
                   
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
    
                 </div>

             </div>


    @endsection

@section('footer')

@endsection


