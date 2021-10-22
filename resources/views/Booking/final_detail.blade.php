@extends('User.site.header_layut')
@section('content')
@include('User.layout.header')
<div class="user-booking">
  <div class="container">
    <div class="user-final-booking">
      <div class="heading-row">
      <h3>Your Booking Detail</h3>
      </div>
      <div class=" inner-rowss">
       
      <div class="row">
        <div class="col-md-6 col-12 col-sm-12">
          <div class="image-booking-details">
            <img src="{{asset('images/city')}}/<?php echo $customer[0]->image; ?>">
          </div>
        </div>
        <div class="col-md-6 col-12 col-sm-12">
          <div class="image-booking-details-information">
            <h4>City: &nbsp; {{$customer[0]->city_name}}</h4>
             <p>Hotel Name: &nbsp; {{$customer[0]->Hotel_name}}</p>
               <p>Location: &nbsp; {{$customer[0]->address}}</p>
                    <p>Phone No: &nbsp; {{$customer[0]->contact}}</p>
                   <p>Room Type: &nbsp; {{$h_room_type}}</p>
                <p>Total Room &nbsp; {{$sumroom}}</p>
              <p>Total Price &nbsp; {{$sumPrice}}</p>
           </div>
        </div>
      </div>
      </div>

       <div class="enter-client-detail">
         <h5>Add Personal Information</h5>
        <div class="row">
        <div class="col-md-12 col-12 col-sm-12">
          @if(Session::has('serverError'))
   <div class="alert-danger">{{Session::get('serverError')}} </div>
 @endif   
          <div class="image-booking-details-information-form">
              <form action="{{ route ('next.confirmations') }}" method="post" name="registration">
                             <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                            {{ csrf_field() }}

                <div class="form-group">
                  <input type="text" name="fullname" id="name" class="form-control" placeholder="Enter Your Name" required>
         


                  @if($errors->first('fullname'))
                  <div class="alert-danger">{{$errors->first('fullname')}}</div>
                  @endif


                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        @if($errors->first('email'))
                  <div class="alert-danger">{{$errors->first('email')}}</div>
                  @endif
                </div>
                <div class="form-group">
                  <input type="text" name="phone" class="form-control" placeholder="Enter Phone No.">
                        @if($errors->first('phone'))
                  <div class="alert-danger">{{$errors->first('phone')}}</div>
                  @endif
                </div>
                <div class="input-group  form-group date"  data-target-input="nearest"> 
                   <input  type="text" id="datepicker"  name="checkIn" class="form-control datetimepicker-input" data-target="#reservationdate"
                 placeholder="Check in" required/>
                  </div>
                  <input type="hidden" name="h_room_type" value="<?php echo $h_room_type ;?>">
                  <input type="hidden" name="sumPrice"    value="<?php echo $sumPrice ;?>">
                  <input type="hidden" name="sumroom"    value="<?php echo $sumroom ;?>">
                  
                   <input type="hidden" name="hotel_id"    value="<?php echo $hotel_id ;?>">


                  <div class="input-group  form-group  date" id="reservationdates" data-target-input="nearest">
                    <input type="text"  id="datepicker2" name="checkOut" class="form-control datetimepicker-input"
                     data-target="#reservationdates" placeholder="Check out"/>
               </div>
               <div class="button-detail">
                 <button type="submit"  onclick="myFunction()" class="">Save</button>
               </div>
              </form>
          </div>
           </div>
        </div>
       </div>
      </div>
    </div>
  </div>


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
      fullname: "required|string",
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
      fullname: "Please enter your firstname",
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
    
@endsection
@section('footer')
@include('User.layout.footer')
@endsection


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type="text/javascript" src="{{asset('assets')}}/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyDhfnhdCooMuQU6x8_cmTlCzmBgkBt7YCk"></script>

<script type="text/javascript">
$(function(){
    $("#datepicker").datepicker({
        minDate: 0,
        maxDate: "+1M +5D"
    });
});
$(function(){
    $("#datepicker2").datepicker({
        minDate: 0,
        maxDate: "+1M +5D"
    });
});
  $(function() {
     $(".tabClicker").click(function() {
      var tab = $(this).attr("data-tab");
       $(".tabContent").hide();
       $("#" + tab).show();
    });    
});
function js1function1(){
      
       var dd=document.getElementById("room_iddss");
     var displaytaxt1=dd.options[dd.selectedIndex].text;
<?php
$variable='displaytaxt1';
echo "string";
?>
        }

 function myfuntionsdTo(){
var datepicker = document.querySelector('#datepicker').value;
document.querySelector('#fromlocate').innerHTML = datepicker;
        }       
 </script>

    

    

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function func(){
  alert('hi');
}
</script>



<script>
    $(document).ready(function(){
      var date_input=$('input[name="checkIn"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })

    $(document).ready(function(){
      var date_input=$('input[name="checkOut"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })


        $(function(){
            $('#checkIn').datepicker();
           
            $('#validateForm').validate({
                rules:{
                    startDate:{
                        required: true,
                        dpDate: true
                    }
                }
            });


        })


        $(function(){
            $('#checkOut').datepicker();
           
            $('#validateForm').validate({
                rules:{
                    startDate:{
                        required: true,
                        dpDate: true
                    }
                }
            });


        })
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<style type="text/css">
  
  @import url("https://fonts.googleapis.com/css?family=Open+Sans");

/* Styles */



form .error {
  color: #ff0000;
}

.article-reference {
  margin-top: 15px;
}
.article-reference a {
  color: #e67e22;
}
</style>