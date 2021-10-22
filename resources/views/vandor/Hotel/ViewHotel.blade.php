
        <!--=============== basic  ===============-->
@extends('User.site.layout')
 
 @section('content')

 @include('User.layout.header')

    <body>
    
  
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!-- section-->
                    <section class="flat-header color-bg adm-header">
                        <div class="wave-bg wave-bg2"></div>
                        <div class="container">
                            <div class="dasboard-wrap fl-wrap">
        
                                <!--dasboard-sidebar-->
                                <div class="dasboard-sidebar">
                                    <div class="dasboard-sidebar-content fl-wrap" style="z-index: 20; position: relative; top: 0px;">
                                        <div class="dasboard-avatar">
                                            <img src="{{asset('images')}}/city/100537193.jpg" alt="">
                                        </div>
                                   
                                                <div class="hotel_namess">
                                                    <h3> </h3>
                                                </div>                          
                                        <div class="user-stats fl-wrap">
                                            <ul>
                                                
                                                <li>
                                                    Bookings
                                                    <span>32</span>	
                                                </li>
                                                <li>
                                                    Rooms	
                                                    <span>9</span>	
                                                </li>
                                            </ul>
                                        </div>

                                           {{ Auth::user()->name }}
                                        <a href="{{ route('user.logout') }}" class="log-out-btn color-bg">Log Out <i class="far fa-sign-out"></i></a>
                                        
                                    </div><div style="display: none; width: 250px; height: 448px; float: left;"></div>
                                </div>
                                <!--dasboard-sidebar end--> 
                                <!-- dasboard-menu-->
                                <div class="dasboard-menu">
                                    <div class="dasboard-menu-btn color3-bg">Dashboard Menu <i class="fal fa-bars"></i></div>
                                    <ul class="dasboard-menu-wrap vishidelem">
                                        <li>
                                            <a href="{{route('vandor.room.view')}}" style="color: rgb(255, 255, 255); background: none;"><i class="far fa-user"></i>View Details</a>
                  
                                        </li>

                                         
                                        </li>
                                        <li><a href="#" style="color: rgb(255, 255, 255); background: none;"> <i class="far fa-calendar-check"></i> Bookings <span>2</span></a></li>
                                        <li><a href="#" style="color: rgb(255, 255, 255); background: none;"><i class="far fa-comments"></i> Rooms </a></li>
                                    </ul>
                                </div>
                                <!--dasboard-menu end-->
                                <!--Tariff Plan menu-->
                             
                                <!--Tariff Plan menu end-->
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                    <!-- section  -->




                    <div class="limit-box fl-wrap"></div>
                </div>
                <!-- content end-->
            </div>
    
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->



   @endsection

@section('footer')

@endsection