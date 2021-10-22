
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
       
           
            
       
                <div class="multuistep-form">
                    <div class="container hotel-register-form">
                        <div class="multip-steps-form-display">
                              @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif
                
   @if(Session::has('serverError'))
   <div class="alert-danger">{{Session::get('serverError')}} </div>
 @endif
 
    @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {!! session('message.content') !!}
</div>
    @endif
                

                                <div class="tab info-tab">
                                              <form action="{{ route('vandor.add_else.hotel') }}" method="POST" enctype="multipart/form-data" name="registration" >
                                <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                                {{ csrf_field() }}
                                    <div class="inner-overly">
                                    <h4> Add Room Detail</h4>

                                   
                                    <div class="form-group  basic-information-stesp mt-4">
                                      <input type="text" name="room_no" placeholder="Enter Hotel Room No." class="form-control">
                                      @if($errors->first('room_no'))
                                      <div class="alert-danger">{{ $errors->first('room_no')}}</div>
                                      @endif
                                  </div>
                                  <div class="form-group  basic-information-step-1 mt-4">
                                    <input type="text" name="types" placeholder="Enter Hotel Room Features, like Single, double.." class="form-control">
                                   @if($errors->first('types'))
                                       <div class="alert-danger">{{ $errors->first('types') }}</div>
                                       @endif
                                </div>


                                <div class="form-group  basic-information-step-1 mt-4">
                                    <input type="text" name="price" placeholder="Enter Room Price" class="form-control">
                                    @if($errors->first('price'))
                                       <div class="alert-danger">{{ $errors->first('price')}}</div>
                                      @endif
                                </div>



                                <div class="form-group  basic-information-step-1 mt-4">
                        <input type="file" name="image" class="upload" class="form-control">
                        @if($errors->first('image'))
                                  <div class="alert-danger">{{ $errors->first('image')}}</div>
                                  @endif
                    </div>
<!-- 

        <div class="input-group control-group increment" >
             <input type="file" name="image" class="upload" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button" class="form-control"><i class="glyphicon glyphicon-plus"></i>+</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
         <input type="file" name="image" class="upload" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> - </button>
            </div>
          </div>
        </div> -->




                                    </div>
                      
                
                
                                 <div class="submit-button pull-right">
                                   <input type="submit"  id="prevBtn">
                                 </div>
                            </form>
                        </div>
                    </div>
                   </div>
                   <section class="content">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                       
                            <!-- /.card-header -->
                            <div class="card-body">
              <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                      <thead>
                          <tr>
                              <th>Room No</th>
                              <th>Room Type</th>
                            
                              <th>Price</th>
                    
                                <th>Action</th>
                            
                          </tr>
                      </thead>
                      <tbody>
                      
                        @foreach($selecteroomddata as $selecteddata)

                        <?php 
                           $num=1;
                        
                              
                         ;?>
                            
          
                                 <tr>
                            <!-- <td><?php echo $num++; ?> </td> -->
                              <td>{{$selecteddata->room_no}}</td>
                                <td>{{$selecteddata->room_types}}</td>
                                <td>{{$selecteddata->price}}</td>
                              <td>
                            <?php 
                            switch ($selecteddata->status) {
                              case '0':?>
                      <a href="<?php echo route('selecteddata.reserved.vandor.city',['id'=>$selecteddata->id])?>"
                      class="btn btn-avail "> Available</a>
                      <?php 
                      break;
                          case '1': 
                          ?>
                           <a href="<?php echo route('selecteddata.avail.vandor.city',['id'=>$selecteddata->id])?>"
                      class="btn btn-danger "> Reserved</a>
                      <?php 
                                break;?>
                              
                        
                       <?php      }
                          ?>
                        </td> 
                          
          
                                    </tr>
                          
                                 @endforeach
                  </tbody>
                 
                  </table>
                    </div>
                          </div>
                        </div>
                        <div>
                          <div>
                          </section>
              
             
               
                        
                        @guest
                            
                        @endguest
                                    <div class="limit-box fl-wrap"></div>
                       </div>
   <!--............................................................ Multi steps form..................................................... -->


                
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



       <style type="text/css">
         
     .input-group-btn button.btn.btn-success {
    background: #154385;
        height: 38px;
    margin-bottom: 10px;
    /* color: white; */
}


.input-group-btn button.btn.btn-danger {
    width: 40px;
    margin-bottom: 5px;
    height: 37px;
}


       </style>



<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

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
      room_no: "required|string",
      types: "required",
      price: "required",
      image: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },

          room_no: {
        required: true,
        minlength: 5

      }
    },
    // Specify validation error messages
    messages: {
      room_no: "Please enter Room No.",
      types: "Please enter your lastname",
      price: "Please Enter price"
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type="text/javascript" src="{{asset('assets')}}/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>