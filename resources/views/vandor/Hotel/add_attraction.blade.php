
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
                          
                            <form action="{{ route('vandor.add.hotel.attraction') }}" method="POST" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                                {{ csrf_field() }}
                
                                <div class="tab info-tab">
                                    <div class="inner-overly">
                                    <h4> Add attraction</h4>
                                    <div class="form-group  basic-information-stesp mt-4">
                                      <input type="text" name="attractionname" placeholder="Enter Place name" class="form-control">
                                  </div>
                                  <div class="form-group  basic-information-step-1 mt-4">
                                    <input type="text" name="attraction_location" placeholder="Enter Location" class="form-control">
                                </div>
                                <div class="form-group  basic-information-step-1 mt-4">
                                    <textarea name="detail" placeholder="Enter Detail" class="form-control"></textarea>
                               
                                </div>

                                <div class="form-group  basic-information-step-1 mt-4">
                                    <input type="file" name="image" class="upload" class="form-control">
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