
        <!--=============== basic  ===============-->
        @extends('User.site.layout')
 
        @section('content')
       
        @include('User.layout.header')
        <link rel="stylesheet" href="{{asset('site/plugins')}}/select2/css/select2.min.css">
         <link rel="stylesheet" href="{{asset('site/plugins')}}/select2-bootstrap4-theme/select2-bootstrap4.min.css">
           <body>
           
         
                   <div id="wrapper" style="height: 92%">
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
     
                            
                       
                         
                                           </ul>
                                       </div>
                                       <div style="font-size: 17px" class="vandor-logout vandor-logout-style border-logouts">
                                         <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                   Logout
                                               </a>
       
                                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                                                {{ csrf_field() }}
                                                   {{ csrf_field() }}
                                               </form>
                                             </div>
                               
                                   </div>
                               </div>
                           </section>

                               
                        @guest
                            
                        @endguest
                                    <div class="limit-box fl-wrap"></div>
                       </div>

   <div class="vandor-dahvoard">
   <div class="container">



  @if(session()->get('success'))
    <div class="alert alert-danger"> 
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{Session::get('success')}}
</div>
    @endif

           <div class="dashboard-profile-text">
                   <h4>Vandor dashboard</h4>
           </div>
<div class="profiles">
 <div class="row">
<div class="col-md-6 col-12 col-sm-12">
<div class="left-corner">
    
        <div class="images-vandor">
    
                
    
            <img  src="{{asset('images/city') }}/{{@$Hotel_book->image}}"   alt=""/>
        </div>
        <div class="profile-hotels mt-3">
           <p style="font-size: 17px;
           line-height: 16.5px;"> Name: <?php  echo @$Hotel_book->userName; ?></p>
               <p style="font-size: 17px;
               line-height: 16.5px;"> Hotel Name:&nbsp; <?php  echo @$Hotel_book->Hotel_name; ?></p>
               <p style="font-size: 17px;
               line-height: 16.5px;">Location: &nbsp; <?php  echo @$Hotel_book->address; ?></p>
        </div>

</div>

</div>

<div class="col-md-6 col-12 col-sm-12">
        <div class="profile-hotel">
        <div class="row">
        
                <div class="col-md-6 col-12">
                        <a href="{{route('add.vandor.hotel') }}">
                        <div class="add-hotels">
                                <i class="fas fa-hotel">Add Hotel</i>       
                            </div>
                        </a>
                        <a href="{{route('add.vandor.attration') }}">
                            <div class="view-vahicel">
                                <i class="fa fa-picture" aria-hidden="true">Add Attraction</i>
                        </div>
                        </a>
              
                      </div>

        <div class="col-md-6 col-12">
                <a href="{{route('add.vandor.room') }}">
                <div class="add-vihicle">
                        <i class="fa fa-home" aria-hidden="true">Add  Room</i>
                        
                    </div>
                </a>

                <a href="{{route('vandor.booking.view') }}">
                    <div class="view-booking">
                        <i class="fa fa-check" aria-hidden="true">Booking Detail</i>
                      
                </div>
                </a>
             
      
              </div>

        </div>
        </div>
</div>
 </div>
</div>
   </div>
   </div>

                   </div>
           
               </div>


     @endsection
     @section('footer')
     @include('User.layout.footer')
     @endsection
  


     <style>
    .vandor-dahvoard {
 margin: 40px 0 60px 0; */

}


.left-corner {
    padding: 10px;
    border: 1px solid grey;
}

.ashboard-profile-text h4{
    padding: 10px 0 18px 0;
    text-align: center;
}


.profile-hotel {
    border: 1px solid lightgrey;
    padding: 10px;
}

.add-hotels {
    padding: 60px;
    border: 1px solid grey;
    /* background: tomato; */
    color: white;
    background: #0e5d35;
    cursor: pointer;
    margin-right: -15px
}

.add-hotels:hover{

}



.add-vihicle {
    padding: 60px;
    border: 1px solid #ccc;
    background: #e9ecef;
    cursor: pointer;
    margin-left: -15px;
}


.view-vahicel {
    border: 1px solid darkgrey;
    margin-right: -15px;
    padding: 60px;
    background: #e9ecef;
    cursor: pointer;
}



.view-booking {
        padding: 60px;
    border: 1px solid grey;
    /* background: tomato; */
    color: white;
    background: #0e5d35;
    cursor: pointer;
    margin-left: -15px
}



.booking-sections {
    margin-top: 110px;
}

.inner-booking-details {
    background: #3aaced;
    /* padding: 0 0 30px; */
    padding: 30px 0 30px 0;
}

.container.justify-contents {
    display: flex;
}

.back-dashboards a {
    border: 1px solid white;
    width: 115px;
    /* width: 200px; */
    cursor: pointer;
    /* padding: 10; */
    padding: 10px 20px 10px 20px;
    color: white;
    text-decoration: none;
}

.booking-deaai {
    margin-top: 30px;
}

.border-logouts{
    margin-bottom: 20px !important;
    padding-bottom: 37px !important;
    border: 1px slid white;
}


    
</style>