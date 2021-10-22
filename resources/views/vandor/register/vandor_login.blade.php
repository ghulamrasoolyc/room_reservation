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
                                         <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                           {{csrf_field()}}
   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label>Username or Email Address <span>*</span> </label>
                                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                        </div>
                                       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label>Password <span>*</span></label>
                                                         <input id="password" type="password" class="form-control" name="password" required>
                                             @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                            <button type="submit"  class="log-submit-btn color-bg"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                        </div>
                                       </div>
                                   </div>
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
                         <div class="col-md-2">
                         </div>
                        </div>
                    </div>
                </div>



    @endsection

@section('footer')
@include('User.layout.footer')
@endsection
