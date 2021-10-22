@extends('User.site.layout')
 
 @section('content')

 @include('User.layout.header')


             <div class="reset-password">                 
                      <div class="container">

                        <div class="row">
                  
                   
                     
                         
                                    <div class="custom-forms">
    @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {!! session('message.content') !!}
</div>
    @endif
                
                
      <form name="registration" method="post" action="{{ route('resetpass') }}"   name="registerform" class="main-register-form" id="main-register-form2">
                                                    {{csrf_field()}}
                                                    
                      
                             
                        @if ($errors->first('email'))
                                    <span class="help-block">
                                        <strong class="color:red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                               
                  <input name="email" type="text" class="form-control"  name="email" placeholder="Email" >
                         
                            </div>
                            <div class="btnnn">
   <button type="submit"     class="log-submit-btn color-bg"  ><span>Send</span></button>
                                            </form>
                </div>

                            
                            </div>





                                             
                                    <!--     <div class="lost_password">
                                            <a href="{{ route('password.request') }}">Lost Your Password?</a>
                                        </div> -->
                                    </div>
                                </div>
                
          
<style type="text/css">
    .reset-password {
    margin: 149px;
}
.custom-forms {
    float: left;
    width: 100%;
    position: relative;
    padding: 69px;
    padding-left: 21%;
}

.btnnn {
    margin: auto;
    display: table;
}
button.log-submit-btn.color-bg {
    color: white;
    cursor: pointer;
    border-radius: 5px;
    text-decoration: none;
    /* padding: 27px; */
}



        @media(max-width:500px){
.custom-forms {

    padding: 0px; 
     padding-left: 0; 

    padding: 11px 20px 0 80px !important;
}
}
}

</style>

    @endsection

@section('footer')

@endsection


