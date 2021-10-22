@extends('User.site.layout')
 
 @section('content')

 @include('User.layout.header')


                 
   
<div class="container register-forms" style="height: 90%">
    <div class="inner-fomr-register">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
  
                              @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif
                

                <div class="panel-body">

           
                    <form class="form-horizontal form-reg" method="POST" id="basic-form"  action="{{ route('reset_password_vandor') }}">
                        <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control mt-4"  placeholder="Enter new Password" name="password" required>
                                     @if ($errors->first('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                             <input type="hidden" id="hidden" class="form-control mt-4" value="{{$gteemail->email}}"  placeholder="Enter new Password" name="email" required>



                                  <input type="hidden" id="hidden" class="form-control mt-4" value="{{$gteemail->id}}"  placeholder="Enter new Password" name="id" required>

                           
                            </div>
                        </div>

                        <div class="form-group">
                      

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control mt-4" placeholder="Enter Confirm password" name="password_confirmation" required>
                                     @if ($errors->first('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="button-base col-md-6 col-md-offset-4">
                                <button type="submit" class="buttons-register mt-4">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
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


<script>
    $(document).ready(function() {
  $("#basic-form").validate();
});
</script>