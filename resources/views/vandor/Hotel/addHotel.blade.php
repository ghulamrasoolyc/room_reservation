
        <!--=============== basic  ===============-->
        @extends('User.site.layout')
 
        @section('content')
       
        @include('User.layout.header')
        <link rel="stylesheet" href="{{asset('site/plugins')}}/select2/css/select2.min.css">
         <link rel="stylesheet" href="{{asset('site/plugins')}}/select2-bootstrap4-theme/select2-bootstrap4.min.css">
           <body>
           
         
                   <div id="wrapper">
                       <!-- content-->
                       <div class="content">
                           <!-- section-->
                           <div class="flat-header color-bg adm-header">
                               <div class="wave-bg wave-bg2"></div>
                               <div class="container">
                                   <div class="dasboard-wrap fl-wrap">
               
                                       <!--dasboard-sidebar-->
                                       <div class="dasboard-sidebar">
                                   <div style="display: none; width: 250px; height: 448px; float: left;"></div>
                                       </div>
                               
                                <div class="dasboard-menu">
                                           <div class="dasboard-menu-btn color3-bg">Dashboard Menu <i class="fal fa-bars"></i></div>
                                           <ul class="dasboard-menu-wrap vishidelem">
                                            
       
                                                
                                               </li>
     
                                    <li class="back-dashboard"><a href="{{route('vandor.dashboard')}}">
                                       Back</a></li>
                       
                       
                         
                                           </ul>
                                       </div>
                                       <div class="vandor-logout vandor-logout-style ">
                                         <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                   Logout
                                               </a>
       
                                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                                                {{ csrf_field() }}
                                               </form>
                                             </div>
                               
                                   </div>
                               </div>
                           </section>
                           <!-- section end-->
                           <!-- section  -->
       
           

               
                        
                        @guest
                            
                        @endguest
                                    <div class="limit-box fl-wrap"></div>
                       </div>
   <!--............................................................ Multi steps form..................................................... -->
<?php if ($countHotel > 0) {?>
    <div class="multuistep-form">
        <div class="container hotel-register-form">
            <div class="multip-steps-form-display">
              

    @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {!! session('message.content') !!}
</div>
    @endif
              
                <form id="regForm" action="{{ route('vandor.edits.hotel') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                    {{ csrf_field() }}
                    <div class="tab info-tab">
                        <div class="inner-overly">
                        <h4>Edit Hotel Detail</h4>
                        <div class="form-group  basic-information-stesp mt-4">
                          <input type="text" name="hotelName" value="{{$check->Hotel_name}}"  class="form-control">
                             @if($errors->first('hotelName'))
                          <div class="alert-danger">{{ $errors->first('hotelName')}}
                            @endif

                          <input type="hidden" name="iid" value="{{$check->id}}"  class="form-control">

                        


                      </div>
                      <div class="form-group  basic-information-step-1 mt-4">
                        <input type="text" name="address" value="{{$check->address}}"  class="form-control">
                               @if($errors->first('address'))
                          <div class="alert-danger">{{ $errors->first('address')}}
                            @endif
                    </div>
                    <div class="form-group  basic-information-step-1 mt-4">
                        <input type="text" name="contact" value="{{$check->contact}}" class="form-control">
                                @if($errors->first('contact'))
                          <div class="alert-danger">{{ $errors->first('contact')}}
                            @endif
                    </div>
                  
                    
                        </div>
                    </div>
    
    
    
    
    
                     <div class="submit-button pull-right">
                       <input type="submit"  id="prevBtn" onclick="nextPrev(-1)"></button>
                     </div>
                </form>
            </div>
        </div>
       </div>

       
   
<?php }  ?>
<?php  if ($countHotel < 1) {?>
  

     
    <div class="multuistep-form">
        <div class="container hotel-register-form">
            <div class="multip-steps-form-display">
              

    @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {!! session('message.content') !!}
</div>
    @endif
             
                <form name="registration" id="regForm" action="{{ route('vandor.add.hotel') }}" method="POST" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                    {{ csrf_field() }}
                    <div class="tab info-tab">
                        <div class="inner-overly">
                        <h4>Add Hotel Detail</h4>

                        <div class="form-group  basic-information-stesp mt-4">
                            <select name="city" class="form-control">
                                 @foreach ($city as $citys)
                                 <option value="{{$citys->id}}">{{$citys->city_name}}</option>
                                 @endforeach
                                
                            </select>
                        </div>


                        <div class="form-group  basic-information-stesp mt-4">
                          <input type="text" name="hotelName" placeholder="Enter Hotel or Resturant Name" class="form-control">
                          @if($errors->first('hotelName'))
                          <div class="alert-danger">{{ $errors->first('hotelName')}}
                            @endif
                      </div>
                      <div class="form-group  basic-information-step-1 mt-4">
                        <input type="text" name="address" placeholder="Enter Hotel or Resturant Address" class="form-control">
                           @if($errors->first('address'))
                          <div class="alert-danger">{{ $errors->first('address')}}
                            @endif
                    </div>
                    <div class="form-group  basic-information-step-1 mt-4">
                        <input type="text" name="contact" placeholder="Enter Hotel or Resturant Phone" class="form-control">
                           @if($errors->first('contact'))
                          <div class="alert-danger">{{ $errors->first('contact')}}
                            @endif
                    </div>
                    <div class="form-group  basic-information-step-1 mt-4">
                        <input type="file" name="image" class="upload" class="form-control">
                           @if($errors->first('image'))
                          <div class="alert-danger">{{ $errors->first('image')}}
                            @endif
                    </div>
                    
                        </div>
                    </div>
    
    
    
    
    
                     <div class="submit-button pull-right">
                       <input type="submit"  id="prevBtn" onclick="nextPrev(-1)"></button>
                     </div>
                </form>
            </div>
        </div>
       </div>
    


 <?php  } ?>


                
                   </div>
           
               </div>

       
       
          @endsection
       
       @section('footer')
       
       @endsection
       
         <script src="{{asset('site/plugins')}}/jquery/jquery.min.js"></script>
       
       <script src="{{asset('site/plugins')}}/select2/js/select2.full.min.js"></script>
       
       <script type="text/javascript">
       
       $(document).ready(function() {
           var max_fields      = 10; //maximum input boxes allowed
           var wrapper         = $(".input_fields_wrap"); //Fields wrapper
           var add_button      = $(".add_field_button"); //Add button ID
           
           var x = 1; //initlal text box count
           $(add_button).click(function(e){ //on add input button click
               e.preventDefault();
               if(x < max_fields){ //max input box allowed
                   x++; //text box increment
                   $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
               }
           });
           
           $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
               e.preventDefault(); $(this).parent('div').remove(); x--;
           })
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
      hotelName: "required|string",
      address: "required",
      contact: "required",
      image: "required",
      city: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      contact: {
        required: true,
        minlength: 11
      },

          hotelName: {
        required: true,
        minlength: 5

      }
    },
    // Specify validation error messages
    messages: {
      hotelName: "Please enter Hotel name",
      address: "Please enter Hotel Address",
      contact: {
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
