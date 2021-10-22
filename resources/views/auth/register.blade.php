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
            

                <div class="panel-body">
                    <form name="registration" class="form-horizontal form-reg" method="POST" id="basic-form"  action="{{ route('register') }}">
                        <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name"  placeholder="Enter Name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control mt-4" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control mt-4"  placeholder="Enter Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                      

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control mt-4" placeholder="Enter Confirm password" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="button-base col-md-6 col-md-offset-4">
                                <button type="submit" class="buttons-register mt-4">
                                    Register
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

<script>

// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({

    
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      lastname: "required",
      phone: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      phone: {
        required: true,
        minlength: 11
      },

          fullname: {
        required: true,
        minlength: 5

      }
    },
    // Specify validation error messages
    messages: {
      name: "Please enter your firstname",
      lastname: "Please enter your lastname",
      phone: {
        required: "Please provide a Phone",
        minlength: "Your Phone must be at least 11 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});


</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>