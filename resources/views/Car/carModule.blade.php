
@extends('limousine.User.layout')
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
     <!--    <link rel="shortcut icon" href="images/logo.png"> -->
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="">
                <div class=""></div>
            </div>
        </div>
        <div id="main">
            <!-- header-->
            <header class="main-header">
                <!-- header-top-->
                <div class="header-top fl-wrap">
                    <div class="container">
                        <div class="logo-holder">
                            <a href="{{route('home')}}"><img src="{{asset('images')}}/logo-deputy.png" alt=""></a>
                        </div>                       


               </div>
                </div>
     <div class="header-inner fl-wrap">
                    <div class="container">
                       
<div class="container">
 
  <ul class="nav">
    <li class="nav-item">

     <a class="nav-link" href="{{ route('home')}}">Stays</a>
    </li>

    <li class="nav-item">

           <a class="nav-link" href="{{route('attractions.view')}}">Attractions</a>
    </li>
        <li class="nav-item">
     <a class="nav-link" href="https://dailygilgitbaltistan.com/tours.pk/public/registered-hotel">Hotel</a>
    </li>
     
  </ul>
</div>


            </header>

            <style>
          .header-inner  div ul li a {
    color: #fff !important;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
    text-align: center;
    white-space: nowrap;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>


<script src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyDbRrdljp_1NZ748GugPpSF7m7W1oVe2E0&callback=initMap"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
   <!--<script-->
   <!--  src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyBs_s81-FmiRbUz6uRb6WvlaavSOCjoeBM&callback=initMap" async defer"-->
   <!--  defer-->
   <!--></script>-->

   <script>
 cnahgemaparea();
    GetRoute();
   myFunctionmap();



    </script>




<script type="text/javascript">
    var source, destination;
    var directionsDisplay;
      var directionsDisplay2;
    var directionsService = new google.maps.DirectionsService();
      var directionsService2 = new google.maps.DirectionsService();
    google.maps.event.addDomListener(window, 'load', function () {
    new google.maps.places.SearchBox(document.getElementById('from_places'));
    new google.maps.places.SearchBox(document.getElementById('to_places'));
    directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
     directionsDisplay2 = new google.maps.DirectionsRenderer({ 'draggable': true });
    });
     function GetRoute() {


        var mapOptions = {
          zoom: 7,
             center: {
               lat: 46.8182,
               lng: 8.2275
             }
         };



        var mapOptions1 = {
          zoom: 13,
             center: {

             }
         };




    map2 = new google.maps.Map(document.getElementById('divvmaps'), mapOptions1);
    map = new google.maps.Map(document.getElementById('dvMap1'), mapOptions);

    directionsDisplay.setMap(map);
    directionsDisplay2.setMap(map2);
    directionsDisplay.setPanel(document.getElementById('dvMap1'));






    //*********DIRECTIONS AND ROUTE**********************//
    source = document.getElementById("from_places").value;

    destination = document.getElementById("to_places").value;

    var request = {
        origin: source,
        destination: destination,
        travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        }
    });

        directionsService2.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay2.setDirections(response);
        }
    });


    //*********DISTANCE AND DURATION**********************//
    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
        origins: [source],
        destinations: [destination],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
            var distance = response.rows[0].elements[0].distance.text;
            var duration = response.rows[0].elements[0].duration.text;
            var dvDistance = document.getElementById("dvDistance");
           dvDistance.innerHTML = "";
            dvDistance.innerHTML += "Distance:  " + distance + ",";
            dvDistance.innerHTML += "Duration:  " + duration;

        } else {
            alert("Unable to find the distance via road.");
        }
    });
    }


    var map;
        function initialize() {
          var mapOptions = {
            zoom: 7,
            center: new google.maps.LatLng(46.8182, 8.2275),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          map = new google.maps.Map(document.getElementById('dvMap1'),
              mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);


    </script>
<script>

bookingdetai1();

</script>
<style>





a.chbs-payment-type-2 {
   /* width: 100px !important; */
   height: 70px !important;
   width: 182px !important;
}
i.fas.fa-chevron-right {
   display: none !important;
}

input#next3 {
   text-align: center;
}


/*#dvMap {*/
/*    display:none;*/
/*}*/

.map1 {
   height: 275px !important;
   width: 583px;
   background-color: gray;
   position: relative;
   float: left;
}

i.gj-icon.event {
   display: none !important;
}


input#next2 {
   text-align: center;
}


i.pull-right.fa.fa-facebook {
   font-size: 35px;
   color: green;
   background-repeat: no-repeat;
}
input#next1 {
   text-align: center;
   font-size: 15px;
   font-weight: bold;
}
a.chbs-button.chbs-button-style-1.chbs-button-step-next.step2_next {
   text-align: center;
   font-size: 16px;
   font-weight: bold;
}
.chbs-main .chbs-form-field {
   margin-top: -1px;
   position: relative;
   border-style: solid;
   padding: 16px 0px 12px 0px;
   border-width: 1px 1px 1px 1px;
}

.img-thumbnail-img {
   height: 300px;
   width: 600px;
}




/*div#panel-1 {
   border: 1px solid #EAECEE;
}
.chbs-layout-column-right {
   border: 1px solid #EAECEE;
}*/

@media(max-width: 411px) {
   .map1 {
   height: 275px !important;
   width: 367px !important;
   background-color: gray;
   position: relative;
   float: left;
}
}
</style>

   <style type="text/css">
     /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
     .map {
       height: 100%;
     }

 .map2 {
       height: 100%;
     }

     /* Optional: Makes the sample page fill the window. */
     html,
     body {
       height: 100%;
       margin: 0;
       padding: 0;
     }

     #floating-panel {
       position: absolute;
       top: 10px;
       left: 25%;
       z-index: 5;
       background-color: #fff;
       padding: 5px;
       border: 1px solid #999;
       text-align: center;
       font-family: "Roboto", "sans-serif";
       line-height: 30px;
       padding-left: 10px;
     }
   </style>
<script>
   totalkm = "";
</script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="jquery-timepicker/jquery.timepicker.min.css">
<script src="jquery-timepicker/jquery.timepicker.min.js"></script>
<!--== Slider Area Start ==-->
<section id="slider-area">
   <!--== slide Item One ==-->
   <div class="single-slide-item overlay">

       <div id="content" class="site-content">


           <div id="content-inside" class="container no-sidebar">
               <div id="primary" class="content-area">
                   <main id="main" class="site-main" role="main">



                       <article id="post-15" class="post-15 page type-page status-publish hentry">
                           <header class="entry-header">
                           </header><!-- .entry-header -->
@if (count($errors) > 0)
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif             <div class="entry-content">
                               <div class="chbs-main chbs-booking-form-id-10007 chbs-clear-fix chbs-width-960" id="chbs_booking_form_E3DF8DEF39AF2F32ABE1B75AE4A81467">

                                   <form name="chbs-form" method="POST" target="_self">
                                       <div class="chbs-main-navigation-default chbs-clear-fix" data-step-count="4">
                                           <ul class="chbs-list-reset">

                                               <li data-step="1" class="chbs-state-selected step1">
                                                   <div></div>
                                                   <a href="#">
                               <span>
                                   <span>1</span>
                                   <span class="chbs-meta-icon-tick"></span>
                               </span>
                                                       <p class="germen-lang">@lang('welcome.basic_info')</p>
                                                   </a>
                                               </li>

                                               <li data-step="2" class="step2">
                                                   <div></div>
                                                   <a href="#">
                               <span>
                                   <span>2</span>
                                   <span class="chbs-meta-icon-tick"></span>
                               </span>
                                                       <p class="germen-lang">@lang('welcome.select_vahicel')</p>
                                                   </a>
                                               </li>

                                               <li data-step="3" class="step3">
                                                   <div></div>
                                                   <a href="#">
                               <span>
                                   <span>3</span>

                                   <span class="chbs-meta-icon-tick"></span>
                               </span>
                                                       <p class="germen-lang">@lang('welcome.payment_method')</p>
                                                   </a>
                                               </li>

                                               <li data-step="4" class="step4">
                                                   <div></div>
                                                   <a href="#">
                               <span>
                                   <span>4</span>
                                   <span class="chbs-meta-icon-tick"></span>
                               </span>
                                                       <p class="germen-lang">@lang('welcome.Confirmation')</p>
                                                   </a>
                                               </li>
                                           </ul>
                                       </div>
<!--
                                       <div class="chbs-main-navigation-responsive chbs-box-shadow chbs-clear-fix">
                                           <div class="chbs-form-field" style="cursor: pointer;">
                                               <select name="chbs_navigation_responsive" data-value="1" id="ui-id-3" style="display: none;">

                                                   <option value="1">
                                                       1. Basic Info                            </option>

                                                   <option value="2">
                                                       2. Select Vahicle                            </option>

                                                   <option value="3">
                                                       3. Payment Method                          </option>

                                                   <option value="4">
                                                       4. Confirmation                            </option>

                                               </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="ui-id-3-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-3-menu" aria-haspopup="true" style="width: 0px;"><span class="chbs-meta-icon-arrow-vertical-large"></span><span class="ui-selectmenu-text">
                               1. Fahrtdetails                            </span></span>
                                           </div>
                                       </div> -->
                                   </form>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
                                   <div id="questions">
   <form action="{{route('booking_cont')}}" method="post">
                                          <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                            {{ csrf_field() }}
                                      <!--  //////////////////////////////////Step 1 start -->

                                       <div id="q0" class="step_1">
                                           <div class="chbs-main-content chbs-clear-fix">

                                               <div class="chbs-main-content-step-1" style="display: block;">
                                                   <div class="chbs-notice chbs-hidden"></div>
                                                   <div class="chbs-layout-50x50 chbs-clear-fix">

                                                       <div class="chbs-layout-column-left">

                                                           <div class="chbs-tab chbs-box-shadow ui-tabs ui-widget ui-widget-content ui-corner-all">

                                                               <div id="panel-1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false">
                                                                   <label class="chbs-form-label-group">@lang('welcome.check_in')  </label>
                                                                   <div class="chbs-clear-fix responisive-class">

                                                                       <div class="chbs-form-field chbs-form-field-width-50">
                                                                           <p class="chbs-form-field-label">
                                                                           @lang('welcome.check_in')
                                                                                      <i class="far fa-clock"></i>
                                                                           </p>
                                <input type="date" id="datepicker"  name="dateinput" onchange="date(); validate();" placeholder="Check In" style="cursor:pointer">




                                                                       </div>

                                                                       <div class="chbs-form-field chbs-form-field-width-50">
                                                                           <p class="padding-left">
                                                                           @lang('welcome.times')
                                                                                                         <i class="far fa-clock"></i>
                                                                           </p>
                                           <input type="time" name="timeinput" required="required" id="times"  onchange="time(); validate();" name="appt">





                                                                       </div>

                                                                   </div>
                                                                   <div class="chbs-form-field chbs-form-field-location-autocomplete chbs-form-field-location-switch chbs-hidden">
                                                                       <p>Zwischenstopp</p>
                                                                       <input type="text" autocomplete="off" name="chbs_waypoint_location_service_type_1[]" id="chbs_location_RIHQGEGXSAXIFXQU" class="pac-target-input" placeholder="Enter a location">
                                                                       <input type="hidden" name="chbs_waypoint_location_coordinate_service_type_1[]">
                                                                       <span class="chbs-location-add chbs-meta-icon-plus"></span>
                                                                       <span class="chbs-location-remove chbs-meta-icon-minus"></span>
                                                                   </div>

                       <div class="chbs-form-field chbs-form-field-location-autocomplete chbs-form-field-location-switch"
                       data-label-waypoint="Waypoint">
                           <p class="welcome-city-smart">
                              @lang('welcome.SelectedCity')                              <span class="chbs-tooltip chbs-meta-icon-question" data-hasqtip="2" oldtitle="The address when your journey will start." title=""></span>
                           </p>
                           <span class="chbs-meta-icon-2 "></span>


                           <input type="text" id="from_places" name="origincity"
                            onchange="from_places1(); GetRoute(); validate();"  class="switchVisible";
                            placeholder="@lang('welcome.placeholder')   ">
                           <input type="hidden" id="origin" name="destination">




                       </div>
                       <div class="chbs-form-field chbs-form-field-location-autocomplete">
                           <p class="welcome-city-smart">
                             @lang('welcome.selected_city_to')<span class="chbs-tooltip chbs-meta-icon-question" data-hasqtip="3" oldtitle="The address when your journey will end." title=""></span>
                           </p>
                           <span class="chbs-meta-icon-2 "></span>
                     <input type="text" id="to_places"
                     onchange="to_placesid(); GetRoute();  validate();" name="distinationcity"
                      placeholder="@lang('welcome.placeholder_to') ">
                     <input type="hidden" id="destination" name="destination">
                       </div>

                </div>
                        </div>

                                                       </div>
                                                       <div class="chbs-layout-column-right">
                                                      <div class="chbs-google-map">




                   <div style="height:360px; width:100%; "  class="innermaps" id="dvMap1"> </div>

                        </div>
                                                               <div id="result">
                                                           <div class="chbs-ride-info chbs-box-shadow">
                                                               <div>

                     <p style="font-size: 19px;" class="google-apis" id="dvDistance" onchange="tottalPriceperKm()"></p>
                       </span>
                                                               </div>

                                                           </div>
                                                       </div>

                                               </div>
                                                   </div>
                                                   <div class="chbs-clear-fix chbs-main-content-navigation-button next-button-only">


                                                       <input id="next1"  readonly="readonly" value="Next" class="chbs-button chbs-button-style-1 chbs-button-step-next    tabClicker" data-tab="tabs-1">

                                                                           <i class="fas fa-chevron-right"></i>



                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                  <!--  ////////////////////////////////////Step 1 end///////////////////////////////////////// -->







                                       <div id="tabs-1" class="step_2" style="margin-top: 30px;">
                                           <div class="chbs-main-content-step-2">

                                                   <div class="chbs-layout-25x75 chbs-clear-fix">

                                                       <div class="chbs-layout-column-left">


                                                           <div class="chbs-summary">
                                                               <div class="chbs-summary-header">
                                                                   <h4 style="font-weight: bolder">@lang('welcome.location_summary')</h4>

                                                               </div>

                                                               <div class="chbs-summary-field">

                                                                   <div class="chbs-summary-field-name"><p>@lang('welcome.SelectedCity') </p> </div>
                                                                   <div id="from_placesss"></div>

                                                               </div>

                                                             <div class="chbs-summary-field">

                                                                   <div class="chbs-summary-field-name"><p>@lang('welcome.selected_city_to')</p></div>
                                                                   <div id="to_placesss"></div>

                                                               </div>


                                                               <div class="chbs-summary-field">

                                                                   <div class="chbs-summary-field-name"><p>@lang('welcome.date_') </p></div>
                                                               <div id="dateed"></div>

                                                               </div>




                                                               <div class="chbs-summary-field">

                                                                   <div class="chbs-summary-field-name"><p>@lang('welcome.time_')</div>
                                                                   <div id="timepickers"></div>

                                                               </div>


                                                               <div class="chbs-summary-field">
                                                                   <div class="chbs-layout-50x50 chbs-clear-fix">
                                                                       <div class="chbs-layout-column-left">

                                                                           <div class="chbs-summary-field-name">  <p> @lang('welcome.kilometer')</p></div>
                                                                           <div id="distance_in_kilos"></div>

                                                                       </div>
                                                                       <div class="chbs-layout-column-right">

                                                                           <div class="chbs-summary-field-name">  <p>@lang('welcome.duration')</p></div>
                                                                           <div id="distance_in_miles"></div>

                                                                       </div>
                                                                   </div>
                                                               </div>

                                                           </div>
                                                       </div>

                                                       <div class="chbs-layout-column-right">

                                                           <div class="chbs-layout-column-right">
                                                               <div class="chbs-vehicle-filter chbs-box-shadow chbs-clear-fix">

                                                                   <label class="chbs-form-label-group leey"><p>@lang('welcome.select_car_type')</p> </label>
                                                                   <div class="chbs-form-field chbs-form-field-width-33" style="cursor: pointer;">
                                                                       <label class="chbs-form-field-label">
                                                                           <p class="color-font-size">@lang('welcome.car_number_')</p>

                                                                       </label>
                                                                       <div class="inter-car-number">
                     <input type="text" name="selectCarNumber" id="Inter_" onchange="selectCar();" placeholder="Enter Car Number"  id="carnumberId" name="carNumber">
                                                                       </div>
                   </div>
                                        <div class="chbs-form-field chbs-form-field-width-33" style="cursor: pointer;">
                                                                       <label>
                                                                           <p class="color-font-size">@lang('welcome.car_seat_')</p>
                                                                       </label>

                                                                       <select name="selectcarSeat" id="seatnumbers" onchange="myFunction()">
                                                                           <option class="color-font-size" >Seat </option>
                                                                         <!--   <option value="1">1</option>
                                                                           <option value="2">2</option> -->
                                                                           <option value="3">3</option>
                                                                           <option value="4">4</option>
                                                                           <option value="5">5</option>
                                                                           <option value="6">6</option>

                                                                       </select>


                                                                   </div>
                                                                   <div class="chbs-form-field chbs-form-field-width-33" style="cursor: pointer;">
                                                                       <label>
                                                                         <p class="color-font-size">Select Car</p>
                                                                       </label>

                                                                       <!--************************    Filter of Car********************-->
                                      <select name="selectCarIds" onchange="carselectedmodel();" id="selectCarId"  class="" >
                                                                           <option class="color-font-size">@lang('welcome.selected_car')</option>
                                                                           @foreach($modals as $car_models)
                                                                           <option value="{{$car_models->model}}">{{$car_models->model}} </option>
                                                                           @endforeach


                                                                       </select>
                                                                        <!--************************  End  Filter of Car********************-->

                                                                   </div>
                                                               </div>

                                                               <div class="chbs-notice chbs-hidden"></div>



<!-- ****************************************Start display car*************************************** -->
<div id="err-msg" style="background-color: #EAECEE; border-radius: 3px; margin-bottom: 50px">
    <p style="color: #778591;  width: 166px; margin: auto;"> please select a vehicle </p> </div>

<div id="myTable">
<input type="text" id="car_select_id" value="" name = "car_select_id" style="display: none;" />
     @foreach($specificData as $key => $value)

     <div class="chbs-vehicle-list" ><ul class="chbs-list-reset"><li>
              <div class="chbs-vehicle chbs-clear-fix" id="{{$value->id}}"
                 data-id="12555" data-base_location_cooridnate_lat="" data-base_location_cooridnate_lng="">
              <div class="chbs-vehicle-image chbs-vehicle-image-has-gallery" style="opacity: 1;">
                     <img id="imgdynamic" src="{{asset('assets/img/car')}}/{{$value->image}}"
                      alt="Click to open vehicle gallery."></div><div class="chbs-vehicle-gallery"></div>
                 <div class="chbs-vehicle-content">
                <div class="chbs-vehicle-content-header" >
                <input type="hidden" id="carnumber"  name="car_name" value="{{$value->model}}">
            <span style="font-size: 17px;
            font-weight: bold;
            letter-spacing: normal;
                 font-family: Work Sans;
               font-style: normal; color: #999;" id="model-{{$value->model}}" onchange="bookingdetai1();" >Car Model: &nbsp;{{$value->model}}</span>

                          <a  id="book-btn-{{$value->id}}" class="chbs-button chbs-button-style-2 chbs-button-style-1  "
                     onclick="passprice('{{$value->price}}'); car_select_id('{{$value->id}}', 'book');
                      carModels('{{$value->model}}');" >

                         Booking</a>
                    <a id="unbook-btn-{{$value->id}}"   class="chbs-button chbs-button-style-2 chbs-button-style-1"
                         onclick="car_select_id('{{$value->id}}', 'unbook'); selectImg();" style="display: none;">

                         unselect</a>
                         </div>


 <div class="chbs-vehicle-content-price">
              <p  ><strong>Car No</strong>: {{$value->car_number}}</p>
                   <p id="pricet">Price:{{$value->price}}</p>
                  <p id="seat">Seat: <span1>{{$value->seat}}</span1>



</div>


                              </div>

         <input type="hidden" name="chbs_base_location_vehicle_return_distance[12555]" value="">
         <hr>
 </div>
  </li></ul>

</div>
<!--
 <div class="img-tick">
                           <img height="30" class="pull-right" width="40" src="{{asset('assets/img')}}/tick.png" alt="tick"/>
                       </div>  -->

     @endforeach
 </div>
<!-- ***********************End Display car********************************* -->
 </div>

                                                       </div>


                                                   </div>


                                                   <div class="chbs-clear-fix chbs-main-content-navigation-button justifyContent-div">
                                                       <div>
                                                       <a href="#" class="chbs-button chbs-button-style-2 chbs-button-step-prev step2_prev">

                                                           BACK           </a>
                                                       </div>
                                            <!-- <button id="next2" class="chbs-button chbs-button-style-1 chbs-button-step-next step2_next" onclick="err_msg();"> -->
                                                 <div>
                                                <input id="next2"  readonly="readonly" value="Next" class="chbs-button chbs-button-style-1 chbs-button-step-next step2_next">
                                                                         <i class="fas fa-chevron-right"></i>
                                                 </div>
                                                       <!-- </button> -->
                                                   </div>


                                           </div>
                                       </div>



                                       <div id="q2" class="step_3">

                                           <div class="chbs-main-content-step-3" >
                                               <div class="chbs-layout-25x75 chbs-clear-fix">

                                                   <div class="chbs-layout-column-left" style="">
                                                       <div class="chbs-summary">
                                                           <div class="chbs-summary-header">
                                                               <h4><p>@lang('welcome.location_and_time_detail')</p></h4>

                                                           </div>


                                                           <div class="chbs-summary-field">

                                                               <div class="chbs-summary-field-name"><p>@lang('welcome.from_')</p></div>
                                                               <div class="p_class_div" id="formOrigin"></div>


                                                                                </div>
                                                           <div class="chbs-summary-field">

                                               <div class="chbs-summary-field-name"><p>@lang('welcome.To_')</p></div>
                                               <div class="p_class_div" id="fromdistination"></div>

                                               </div>
                                                          <div class="chbs-summary-field">

                                                               <div class="chbs-summary-field-name"><p> @lang('welcome.kilometer')</p> </div>
                                                               <div  class="p_class_div" id="in_kilo_1"></div>

                                                           </div>

                                                           <div class="chbs-summary-field">
                                                               <div class="chbs-layout-50x50 chbs-clear-fix">
                                                                   <div class="chbs-layout-column-left">

                                                                       <div class="chbs-summary-field-name"> <p>@lang('welcome.duration')</p></div>
                                                                       <div  class="p_class_div" id="duration_text_01"></div>

                                                                   </div>

                                                               </div>
                                                           </div>



                                                       </div>

                                                       <div class="chbs-summary-price-element">

                                                           <div class="chbs-summary-price-element-vehicle-fee">
                                                               <p class="p_class_div" >@lang('welcome.totalPricePerkm')</p>
                                                               <p  class="p_class_div" id="carpriceindCarm1"></p>

                                                           </div>

                                                           <div class="chbs-summary-price-element-total">
                                                               <span style="   letter-spacing: normal;
                                                               font-family: Work Sans;
                                                             font-style: normal;" class="p_class_div">@lang('welcome.Total_Price')</span>
                                                                <span style="   letter-spacing: normal;
                                                                font-family: Work Sans;
                                                              font-style: normal;" class="p_class_div" id="gettotalkilemeter"></span>
                                                           </div>

                                                       </div>
                                                   </div>

                                                   <div class="chbs-layout-column-right">

                                                       <div class="chbs-notice chbs-hidden"></div>

                                                       <div class="chbs-client-form">
                                                           <div class="chbs-client-form-sign-up">

                                                               <div class="chbs-box-shadow">

                                                                   <div class="chbs-clear-fix">
                                                                       <label  class="chbs-form-label-group p_class_div">@lang('welcome.Contact_details')</label>
                                                                       <div class="chbs-form-field chbs-form-field-width-50" id="fName_v">
                                                                           <label class="p_class_div" >@lang('welcome.your_first_name') *</label>
                      <input type="text" id="fname" name="fname1" onchange="fnames();validate_3()" onblur="validate_form3('fname', 'fn-err');"
                                                                            name="chbs_client_contact_detail_first_name" value="">
                                                                           <p id="fn-err" style="color:red; display:none">text required*</p>
                                                                       </div>
                                                                       <div class="chbs-form-field chbs-form-field-width-50">
                                                                           <label class="p_class_div" >@lang('welcome.Last_Name')  *</label>
                      <input type="text" id="lnamee" name="lname1" onchange="lnames();validate_3();"  onblur="validate_form3('lnamee', 'ln-err');"  value="">
                                                                      <p id="ln-err" style="color:red; display:none">text required*</p>
                                                                       </div>
                                                                   </div>

                                                                   <div class="chbs-clear-fix">
                                                                       <div class="chbs-form-field chbs-form-field-width-50">
                                                                           <label class="p_class_div" >@lang('welcome.emai_address')*</label>
                             <input type="text" id="email" name="email" onchange="emails();validate_3();" onblur="validate_form3('email', 'email-err');" name="chbs_client_contact_detail_email_address" value="">
                                                                          <p id="email-err" style="color:red; display:none">text required*</p>
                                                                       </div>
                                                                       <div class="chbs-form-field chbs-form-field-width-50">
                                                                           <label class="p_class_div" >@lang('welcome.telephone')</label>
                        <input type="text" name="tell" id="telephone" onchange="telephones();validate_3();" onblur="validate_form3('telephone', 'p-err');" name="chbs_client_contact_detail_phone_number" value="">
                                                                          <p id="p-err" style="color:red; display:none">text required*</p></div>
                                                                   </div>

                                                                   <div class="chbs-clear-fix">
                                                                       <div class="chbs-form-field">
                                                                           <label class="p_class_div">@lang('welcome.Additional_information')</label>
                    <textarea onchange="additionals(); validate_3();" id="additional"  name="additionalinfod"></textarea>
                                                                       </div>
                                                                   </div>







                                                                   <div class="chbs-hidden">

                                                                       <div class="chbs-clear-fix">
                                                                           <div class="chbs-form-field chbs-form-field-width-50">
                                                                               <label>Firmenname</label>
                                                                               <input type="text" name="chbs_client_billing_detail_company_name" value="">
                                                                           </div>
                                                                           <div class="chbs-form-field chbs-form-field-width-50">
                                                                               <label>Steuernummer</label>
                                                                               <input type="text" name="chbs_client_billing_detail_tax_number" value="">
                                                                           </div>
                                                                       </div>

                                                                       <div class="chbs-clear-fix">
                                                                           <div class="chbs-form-field chbs-form-field-width-33">
                                                                               <label>Strasse *</label>
                                                                               <input type="text" name="chbs_client_billing_detail_street_name" value="">
                                                                           </div>
                                                                           <div class="chbs-form-field chbs-form-field-width-33">
                                                                               <label>Hausnummer</label>
                                                                               <input type="text" name="chbs_client_billing_detail_street_number" value="">
                                                                           </div>
                                                                           <div class="chbs-form-field chbs-form-field-width-33">
                                                                               <label>Ort *</label>
                                                                               <input type="text" name="chbs_client_billing_detail_city" value="">
                                                                           </div>
                                                                       </div>

                                                                       <div class="chbs-clear-fix">
                                                                           <div class="chbs-form-field chbs-form-field-width-33">
                                                                               <label>Bundesland</label>

                                                                               <select name="chbs_client_billing_detail_state" id="ui-id-18" style="display: none;">
                                                                                   <option value="" selected=""></option>
                                                                               </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="ui-id-18-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-18-menu" aria-haspopup="true" style="width: 0px;"><span class="chbs-meta-icon-arrow-vertical-large"></span><span class="ui-selectmenu-text">&nbsp;</span></span>

                                                                           </div>
                                                                           <div class="chbs-form-field chbs-form-field-width-33">
                                                                               <label>Postleitzahl *</label>
                                                                               <input type="text" name="chbs_client_billing_detail_postal_code" value="">
                                                                           </div>

                                                                       </div>



                                                                   </div>



                                                               </div>

                                                           </div>
                                                       </div>

                                                 <!--       <h4 class="chbs-payment-header">
                                                                </h4>
                                                       <ul class="chbs-payment chbs-list-reset">
                                                           <li>

                                                           </li>
                                                           <li>
                                                               <a href="#" data-payment-id="2" class="chbs-payment-type-2">
                                                                   <span class="chbs-meta-icon-tick"></span>
                                                               </a>
                                                           </li>
                                                           <li>

                                                           </li>
                                                           <li>

                                                           </li>
                                                       </ul> -->
                                                   </div>

                                               </div>

                                               <div class="chbs-clear-fix chbs-main-content-navigation-button">
                                                   <a href="#" class="chbs-button chbs-button-style-2 chbs-button-step-prev step3_prev">

                                                       Back            </a>
                                                   <input id="next3" value="Next" class="chbs-button chbs-button-style-1 chbs-button-step-next step3_next">


                                               </div>                    </div>

                                       </div>


                                   <div class="chbs-main-content-step-4 step_4" style="margin-top: 30px;">

                                       <div class="chbs-layout-33x33x33 chbs-clear-fix">

                                           <div class="chbs-notice chbs-hidden"></div>
                                           <div class="chbs-layout-column-left">
                                               <div class="chbs-summary">
                                                   <div class="chbs-summary-header">
                                                       <p style="
                                                       font-weight: bold;
                                                       letter-spacing: normal;"> @lang('welcome.booking_Summary')</p>
                                                       <!-- <a href="#" data-step="3">Bearbeiten</a> -->
                                                   </div>

                                                   <div class="chbs-summary-field">
                                                       <div class="chbs-layout-50x50 chbs-clear-fix">
                                                           <div class="chbs-layout-column-left">

                                                               <div class="chbs-summary-field-name">   @lang('welcome.Your_Name')</div>
                                                               <div class="p_class_div" id="fnamecustomer"></div>

                                                           </div>
                                                           <div class="chbs-layout-column-right">

                                                               <div  class="chbs-summary-field-name p_class_div"> @lang('welcome.Last_Name')</div>
                                                               <div class="p_class_div" id="lnamesscustomer"></div>

                                                           </div>
                                                       </div>
                                                   </div>

                                                   <div class="chbs-summary-field">

                                                       <div  class="chbs-summary-field-name p_class_div">@lang('welcome.emai_address')</div>
                                                       <div  class="p_class_div" id="emailss"></div>

                                                   </div>

                                                   <div class="chbs-summary-field">

                                                       <div class="chbs-summary-field-name">@lang('welcome.telephone')</div>
                                                       <div class="p_class_div" id="telephone11"></div>

                                                   </div>

                                                   <div class="chbs-summary-field">

                                                       <div  class="chbs-summary-field-name p_class_div">@lang('welcome.Additional_information')</div>
                                                       <div class="p_class_div" id="additionaldd"></div>

                                                   </div>

                                               </div>

                                           </div>
                                           <div class="chbs-layout-column-center">
                                               <div class="chbs-google-map-summary">
                                                   <div id="chbs_google_">

                                                        <div style="height:360px; width:100%; "  class="innermapss" id="divvmaps"> </div>

                                                   </div>

                                                   <div class="chbs-summary">
                                                       <div class="chbs-summary-header">
                                                        <p style="
                                                        font-weight: bold;
                                                        letter-spacing: normal;">Location Information</p>

                                                       </div>


                                                       <div class="chbs-summary-field">

                                                           <div class="chbs-summary-field-name">@lang('welcome.from_')</div>
                                                           <div>
                                                               <span style="

                                                               letter-spacing: normal; color:#999; " id="from2_place"></span>


                                                           </div>

                                                       </div>
                                                          <div class="chbs-summary-field">

                                                           <div class="chbs-summary-field-name"> @lang('welcome.To_')</div>
                                                           <div>



                                                               <span style="
                                                               letter-spacing: normal; color:#999; " id="toplaces_1"> </span>

                                                           </div>

                                                       </div>

                                                   </div>
                                               </div>
                                           </div>

                                           <div class="chbs-layout-column-right">
                                               <!--<div style="height: 334px !important">-->

                                               <!--    <img id="imageDiv" width="1000%">-->
                                               <!--</div>-->

                                                   <div class="chbs-summary">
                                                       <div class="chbs-summary-header">
                                                        <p style="
                                                        font-weight: bold;
                                                        letter-spacing: normal;">@lang('welcome.car_model'): &nbsp;
                                                        <span id="modelCar"> </span></p>
                                                       </div>
                                                       <div class="chbs-summary-field">
                                                           <div class="chbs-summary-field-name"></div>
                                                           <p style="font-size: 21px;
                                                           font-weight: bold;
                                                           letter-spacing: normal;" id="model_1"></p>
                                                       </div>


                                                       <div class="chbs-summary-field">

                                                           <div class="chbs-summary-field-name">@lang('welcome.time_') --  @lang('welcome.date_')</div>
                                                           <div>
                                                               <span class="p_class_div" id="datepickers_2"></span>
                                                               &nbsp; -  &nbsp;
                                                               <span class="p_class_div" id="timepicker_1"></span>
                                                           </div>

                                                       </div>

                                                       <div class="chbs-summary-field">
                                                           <div class="chbs-layout-50x50 chbs-clear-fix">
                                                               <div class="chbs-layout-column-left">

                                                                   <div  class="chbs-summary-field-name p_class_div">@lang('welcome.kilometer')</div>
                                                                   <div class="p_class_div" id="distance_in_kilos_1"></div>

                                                               </div>
                                                               <div class="chbs-layout-column-right">

                                                                   <div class="chbs-summary-field-name p_class_div">duration</div>
                                                                   <div  class="p_class_div"  id="duration_text_1"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>



                                               <div class="chbs-summary-price-element">
                                                   <!-- <div class="chbs-summary-price-element-vehicle-fee">
                                                       <span>Ausgewähltes Fahrzeug</span>
                                                       <span>CHF3203.98</span>
                                                   </div> -->
                                                   <div class="chbs-summary-price-element-total">
                                                       <p style="font-size: 18px;
                                                       font-weight: bold;
                                                       letter-spacing: normal; color:#999; ">@lang('welcome.total_price')
                                                &nbsp; &nbsp;<span style="font-size: 18px;
                                               font-weight: bold;
                                               letter-spacing: normal; color:#999; " id="gettotalkilemeter2"></span></p>
                                                   </div>
                                               </div>
                                           </div>

                                       </div>
                                         <div class="chbs-clear-fix chbs-main-content-navigation-button">
                                                       <a href="#" class="chbs-button chbs-button-style-2 chbs-button-step-prev step2_prev">
                                                           <!-- <i class="fas fa-chevron-left"></i> -->
                                                        BACK         </a>

                                               <input type="submit" name="" class="chbs-button chbs-button-style-1 pull-right">


                                         </div>
                               </div>
                           </form>
                       </div>


<div class="chbs-main-content-step-5" style="display: none" >
                                       <div class="chbs-clear-fix chbs-booking-complete chbs-hidden">
                                           <div class="chbs-meta-icon-tick">
                                               <div></div>
                                               <div></div>
                                           </div>
                                           <h3>Vielen Dank für Ihre Anfrage. Wir werden Ihre Anfrage schnellstmöglich bearbeiten und uns in Kürze mit Ihnen in Verbindung setzen.</h3>
                                           <p class="chbs-booking-complete-payment-cash">
                                               <a href="https://mexclusive.ch/" class="chbs-button chbs-button-style-1">Back To Home</a>
                                           </p>
                                           <p class="chbs-booking-complete-payment-paypal">
                                               You will be redirected to the payment page within <span>5</span> second.            </p>
                                           <p class="chbs-booking-complete-payment-stripe">
                                               <a href="#" class="chbs-button chbs-button-style-1">Pay via Stripe</a>
                                           </p>

                                           <p class="chbs-booking-complete-payment-woocommerce">
                                               <a href="#" class="chbs-button chbs-button-style-1">Pay for order</a>
                                           </p>
                                       </div>                    </div>
                               </div>




                               <div id="chbs-preloader" style="background-color:rgba(255,255,255,0.19607843137255);">
                                   <div></div>
                               </div>

                               <div id="chbs-preloader-start"></div>

                           </div>


               </div><!-- .entry-content -->
               </article><!-- #post-## -->




               </main><!-- #main -->
           </div><!-- #primary -->
       </div><!--#content-inside -->
   </div>
   </div>


   <!--== slide Item One ==-->
</section>



<div class="main-page-sliders">
<div class="container">
<h3>@lang('welcome.ourreliable')</h3>






   <div class="row smardt-phones-responsive">
       <div class="col-md-4 col-sm-12 col-12">
           <div class="inner-offical-events">

           <a href="#" title="beat the waves " >
<div style="background-image:url({{asset('limousine/assets/img/car')}}/DoorToDoor.jpg);height:300px;background-size: cover;
                                                           background-repeat: no-repeat; ">

<div style="background-color:#33333394;
height:300px;">



{{-- <div class="date-ev">
<div class="date">
25
<div class="clearfix"></div>
<span class="month">
Sep
</span>
</div>
</div> --}}



<h4 class="home_official_event">
   @lang('welcome.door')<br><br>

</h4>
</div>



</div>
</a>
           </div>
           </div>



           <div class="col-md-4 col-sm-12 col-12">
           <div class="inner-offical-events">

           <a href="#" title="beat the waves ">
<div style="background-image:url({{asset('limousine/assets/img/car')}}/Limousine_Service1.jpg);height:300px;background-size: cover;
                                                           background-repeat: no-repeat; ">

<div style="background-color:#33333394;
height:300px;">


{{--
<div class="date-ev">
<div class="date">
21
<div class="clearfix"></div>
<span class="month" style="font-size:20px">
March
</span>
</div>
</div> --}}



<h4 class="home_official_event">
   @lang('welcome.limousine_service') <br><br>

</h4>
</div>


</div>

</a>
</div>
           </div>
           <div class="col-md-4 col-sm-12 col-12">
           <div class="inner-offical-events">

           <a href="#" title="beat the waves ">
<div style="background-image:url({{asset('limousine/assets/img/car')}}/AirportTransfer.jpg);height:300px;background-size: cover;
                                                           background-repeat: no-repeat;">

<div style="background-color:#33333394;
height:300px;">



{{-- <div class="date-ev">
<div class="date">
1st
<div class="clearfix"></div>
<span class="month" style="font-size: 20px;">
march
</span>
</div>
</div> --}}



<h4 class="home_official_event">
   @lang('welcome.airports') <br><br>

</h4>
</div>



</div>
</a>
           </div>
           </div>
   </div>



   <div class="row smardt-phones-responsive  nest-rowss">
       <div class="col-md-4 col-sm-12 col-12">
           <div class="inner-offical-events">

           <a href="#" title="beat the waves ">
<div style="background-image:url({{asset('limousine/assets/img/car')}}/SightSeeingService.jpg);height:300px;background-size: cover;
                                                           background-repeat: no-repeat;">

<div style="background-color:#33333394;
height:300px;">



{{-- <div class="date-ev">
<div class="date">
25
<div class="clearfix"></div>
<span class="month">
Sep
</span>
</div>
</div> --}}



<h4 class="home_official_event">
   @lang('welcome.sifghtt') <br><br>

</h4>
</div>



</div>
</a>
           </div>
           </div>



           <div class="col-md-4 col-sm-12 col-12">
           <div class="inner-offical-events">

           <a href="#" title="beat the waves ">
<div style="background-image:url({{asset('limousine/assets/img/car')}}/Contact_us.jpg);height:300px;background-size: cover;
                                                           background-repeat: no-repeat;">

<div style="background-color:#33333394;
height:300px;">



{{-- <div class="date-ev">
<div class="date">
21
<div class="clearfix"></div>
<span class="month" style="font-size:20px">
March
</span>
</div>
</div> --}}



<h4 class="home_official_event">
@lang('welcome.tailers')<br><br>

</h4>
</div>



</div>
</a>
           </div>
           </div>

   </div>


</div>
</div>


<div class="container">

   <div class="row">
               <!-- About Content Start -->
               <div class="col-lg-12">
                   <div class="display-table">
                       <div class="display-table-cell paragraph-heading">
                           <div class="about-content">

                               <p>@lang('welcome.new1')</p>
                           </div>
                       </div>

                   </div>

               </div>

           </div>


   <div class="row">
               <!-- About Content Start -->
               <div class="col-lg-12">
                   <div class="display-table">
                       <div class="display-table-cell cwenter-text-pad">
                           <div class="about-content">

                               <p>@lang('welcome.new2')</p>
                           </div>
                       </div>

                   </div>

               </div>

           </div>



<div class="design-row-paragraph">
   <div class="row" >
               <!-- About Content Start -->
               <div class="col-md-4 col-12">
                   <div class="display-table-right">
                       <div class="display-table-cell">
                           <div class="about-content">

                               <p>@lang('welcome.new3')</p>
                           </div>
                       </div>

                   </div>

               </div>


               <div class="col-md-4 col-12">
                   <div class="display-table-center">
                       <div class="display-table-cell">
                           <div class="about-content">

                               <p>@lang('welcome.new5')</p>
                           </div>
                       </div>

                   </div>
               </div>




               <div class="col-md-4 col-12">
                   <div class="display-table-left">
                       <div class="display-table-cell">
                           <div class="about-content">

                               <p>@lang('welcome.new6')</p>
                           </div>
                       </div>

                   </div>

               </div>

           </div>
       </div>
</div>













   <!--== Testimonials Area End ==-->

   <!--== Mobile App Area Start ==-->
   <div id="mobileapp-video-bg"></div>

   <!--== code for filter==-->








<script>

 function carselectedmodel(){
    // var value = $(this).val().toLowerCase();
  var selectCarIds=document.getElementById("selectCarId").value;


   $("#myTable span").filter(function() {
     $(this).toggle($(this).text().indexOf(selectCarIds) > -1)
   });


}



</script>




   <!--== Articles Area End ==-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
var tt=1;
var aa=0;
   $(document).ready(function(){
       $('.step_2').hide();
       $('.step_3').hide();
       $('.step_4').hide();


       $('#next1').click(function(){
           $('.step_2').show();
           $('.step_1').hide();
           $('.step_3').hide();
           $('.step_4').hide();
           $(".step2").addClass('chbs-state-selected');
       });
       $('.step2_next').click(function(){
           $('.step_3').show();
           $('.step_1').hide();
           $('.step_2').hide();
           $('.step_4').hide();
           $(".step3").addClass('chbs-state-selected');
           aa = tt;

       });

       $('.step2_prev').click(function(){
           $('.step_1').show();
           $('.step_2').hide();
           $('.step_3').hide();
           $('.step_4').hide();
           $(".step2").removeClass('chbs-state-selected');
       });

       $('.step3_next').click(function(){

aa = tt;
           $('.step_4').show();
           $('.step_1').hide();
           $('.step_2').hide();
           $('.step_3').hide();
           $(".step4").addClass('chbs-state-selected');


       });
   $('.step2').click(function(){

           if(aa=='1'){
           $('.step_2').show();
           $('.step_1').hide();
           $('.step_3').hide();
           $('.step_4').hide();
           $(".step1").addClass('chbs-state-selected');
           $(".step2").addClass('chbs-state-selected');
           $(".step3").removeClass('chbs-state-selected');
           $(".step4").removeClass('chbs-state-selected');
       }
       });
       $('.step3_prev').click(function(){
           $('.step_2').show();
           $('.step_1').hide();
           $('.step_3').hide();
           $('.step_4').hide();
           $(".step3").removeClass('chbs-state-selected');
       });
       $('.step1').click(function(){
           $('.step_1').show();
           $('.step_2').hide();
           $('.step_3').hide();
           $('.step_4').hide();
           $(".step1").addClass('chbs-state-selected');
           $(".step2").removeClass('chbs-state-selected');
           $(".step3").removeClass('chbs-state-selected');
           $(".step4").removeClass('chbs-state-selected');
       });

       $('.step3').click(function(){
             if(aa=='1'){
           $('.step_3').show();
           $('.step_1').hide();
           $('.step_2').hide();
           $('.step_4').hide();
           $(".step1").addClass('chbs-state-selected');
           $(".step2").addClass('chbs-state-selected');
           $(".step3").addClass('chbs-state-selected');
           $(".step4").removeClass('chbs-state-selected');
       }x
       });
       $('.step4').click(function(){
              if(aa=='1'){
           $('.step_4').show();
           $('.step_1').hide();
           $('.step_2').hide();
           $('.step_3').hide();
           $(".step1").addClass('chbs-state-selected');
           $(".step2").addClass('chbs-state-selected');
           $(".step3").addClass('chbs-state-selected');
           $(".step4").addClass('chbs-state-selected');
       }
       });

   });
</script>

<script language="javascript" type="text/javascript">


function multiply()
{
   // Get the input values
   a = Number(document.getElementById('in_kilo').value);
   b = Number(document.getElementById('pricet').value);

   // Do the multiplication
   c = a*b;
// alert(c);
// die();
   // Set the value of the total
   document.getElementById('TOTAL').value=c;
}
</script>

<script type="text/javascript">
   //coding by abbas
       $(function(){
                   google.maps.event.addDomListener(window, 'load', function(){
                       var from_places = new google.maps.places.Autocomplete(document.getElementById('from_places'));

                       var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));

                google.maps.event.addListener(from_places, 'place_changed', function(){
                           var from_place = from_places.getPlace();
                           var from_address= from_place.formatted_address;

                           $('#origin').val(from_address);


                       });
                           google.maps.event.addListener(to_places, 'place_changed', function(){
                           var to_place = to_places.getPlace();
                           var to_address= to_place.formatted_address;
                           $('#destination').val(to_address);

                       });
                   });

          function calculateDistance(origin,destination){

               var service = new google.maps.DistanceMatrixService();

               service.getDistanceMatrix(
                  {
                    origins: [origin],
                    destinations:[destination],
                   travelMode: google.maps.TravelMode.DRIVING,
                   unitSystem: google.maps.UnitSystem.IMPERIAL,
                   avoidHighways:false,
                   avoidTolls: false
                  },
                  callback
                   );
           }



           function callback(response, status) {
     if (status != google.maps.DistanceMatrixStatus.OK) {
          $('#result').html(err);
       }
       else{
           var origin = response.originAddresses[0];




           document.getElementById('formOrigin').innerHTML = origin;

            document.getElementById('from_placesss').innerHTML = origin;

             document.getElementById('from2_place').innerHTML = origin;


           var destination = response.destinationAddresses[0];

           document.getElementById('fromdistination').innerHTML = destination;

            document.getElementById('to_placesss').innerHTML = destination;
             document.getElementById('toplaces_1').innerHTML = destination;


           if(response.rows[0].elements[0].status==="ZERO_RESULTS"){

                           $('#result').html("better get on a plane " + origin + "and " + destination );
           }
           else{

                   var distance = response.rows[0].elements[0].distance;
                   var duration = response.rows[0].elements[0].duration;
                   console.log(response.rows[0].elements[0].distance);
                   var distance_in_kilo= distance.value / 1000;

                   var totalkm=distance_in_kilo;
                  var x = myFunction(totalkm);

                   var distance_in_mile=distance.value / 1609.34;
                   var duration_text= duration.text;
                  document.getElementById('duration_text_1').innerHTML = duration_text;

                document.getElementById('duration_text_01').innerHTML = duration_text;


                   var duration_value= distance.value;
                   var origin =distance_in_mile;

                   var destination =duration_text;
                   $('#in_mile').text(distance_in_mile.toFixed(2));
                   $('#in_kilo').text(distance_in_kilo.toFixed(2));


                    document.getElementById('distance_in_kilos').innerHTML = distance_in_kilo;


                    document.getElementById('in_kilo_1').innerHTML = distance_in_kilo;



                     document.getElementById('distance_in_kilos_1').innerHTML = distance_in_kilo;


                   document.getElementById('distance_in_miles').innerHTML = distance_in_mile.toFixed(2);



                   $('#duration_text').text(duration_text);

                   $('#duration_value').text(duration_value);
                   $('#from').text(origin);

                   $('#to').text(destination);


       var var1= myfuncvtions(totalkm);
       }

     }


   }

           $(document).ready(function()
       {
           $('#to_places,#from_places').focus();
           $('#to_places, #from_places').change(function(event){
           var origion =$('#from_places').val();
           var destination =$('#to_places').val();
           event.preventDefault();
           calculateDistance( origion,destination);
               });

       });

       });
   var globalOne = 0;


function myFunction(a) {
   globalOne=a;
         // Function returns the product of a and b
}
function passprice(price){
var varkm=globalOne;
 var totalkilometers=Math.round(varkm*price);

  document.getElementById('gettotalkilemeter').innerHTML = totalkilometers;
     document.getElementById('gettotalkilemeter2').innerHTML = totalkilometers;

  document.getElementById('carpriceindCarm1').innerHTML = price;

}

   </script>


<script type="text/javascript">


   $( function() {
       var from = $( "#fromDate" )
               .datepicker({
                   dateFormat: "yy-mm-dd",
                   changeMonth: true
               })
               .on( "change", function() {
                   to.datepicker( "option", "minDate", getDate( this ) );
               }),
           to = $( "#toDate" ).datepicker({
               dateFormat: "yy-mm-dd",
               changeMonth: true
           })
               .on( "change", function() {
                   from.datepicker( "option", "maxDate", getDate( this ) );
               });

       function getDate( element ) {
           var date;
           var dateFormat = "yy-mm-dd";
           try {
               date = $.datepicker.parseDate( dateFormat, element.value );
           } catch( error ) {
               date = null;
           }

           return date;
       }
   });

   $(function(){
       $("#datepicker").datepicker({
           minDate: 0,
           maxDate: "+1M +5D"
       });
   });


   $(document).ready(function(){
       $('#time').timepicker({
           timeFormat: 'h:mm p',
           interval: 15,
           minTime: '10',
           maxTime: '6:00pm',
       });
   });
   $(function() {
       $('#next').on('click', function() {
           $('#questions>div').each(function() {
               var id = $(this).index();
               if ($(this).is(':visible')) {
                   $(this).hide();
                   if (id == $('#questions>div').length - 1) {
                       $('#questions>div').eq(0).show();
                   } else {
                       $('#questions>div').eq(id + 1).show();
                   }
                   return false;
               }
           });
       });
   });


$('.chbs-icon-minus').click(function () {
       if ($(this).prev().val() < 3) {
       $(this).prev().val(+$(this).prev().val() + 1);
       }
});
$('.chbs-icon-plus').click(function () {
       if ($(this).next().val() > 1) {
       if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
       }
});

$('.chbs-icon-plus').click(function () {
 var th = $(this).closest('.chbs-quantity-section').find('.count');
 th.val(+th.val() + 1);
});
$('.chbs-icon-minus').click(function () {
 var th = $(this).closest('.chbs-quantity-section').find('.count');
       if (th.val() > 1) th.val(+th.val() - 1);
});

</script>


<script type="text/javascript">





       function from(){
   var froms=document.getElementById("fromplaces").value;

   document.getElementById('fromss').innerHTML = froms;


   }



function to(){
   var toplacess=document.getElementById("toplaces").value;

   document.getElementById('toplacesss').innerHTML = toplacess;


   }

function from_places1(){
   var fromplaces_1=document.getElementById("from_places").value;
   var fromplaces_2=document.getElementById("from_places").value;



}



function bookingdetai1(){

   var carnumber=document.getElementById("carnumber").value;
       var model=document.getElementById("model").value;

alert(model);

   document.getElementById('carnumbers').innerHTML = carnumber;

       document.getElementById('models').innerHTML = model;


}
</script>

<script type="text/javascript">

       function time(){
   var timepicker=document.getElementById("times").value;

       var timepicker_1=document.getElementById("times").value;


   document.getElementById('timepickers').innerHTML = timepicker;
       document.getElementById('timepicker_1').innerHTML = timepicker_1;


   }

   function date(){


       var datepickers=document.getElementById("datepicker").value;
       var datepickers_1=document.getElementById("datepicker").value;

       document.getElementById('dateed').innerHTML = datepickers;
               document.getElementById('datepickers_2').innerHTML = datepickers_1;



       }

</script>
<script type="text/javascript">
   function fnames()
                    {
       var fname=document.getElementById("fname").value;
       document.getElementById('fnamecustomer').innerHTML = fname;
              }
   function lnames()
    {
   var lnamess=document.getElementById("lnamee").value;
   document.getElementById('lnamesscustomer').innerHTML = lnamess;
    }
  function emails()
                       {
   var emails=document.getElementById("email").value;
   document.getElementById('emailss').innerHTML = emails;
}
  function telephones()
{
    var telephone1=document.getElementById("telephone").value;
        document.getElementById('telephone11').innerHTML = telephone1;
}
function additionals(){
   var additionalss=document.getElementById("additional").value;
   document.getElementById('additionaldd').innerHTML = additionalss;

}

</script>


<script type="text/javascript">

       function to_placesid(){
   var toplacessss=document.getElementById("to_places").value;
var toplaces1=document.getElementById("to_places").value;





   }


</script>

<script type="text/javascript">

   function ConfirmDelete()
{

 var x = confirm("Are you sure you want to Book?");
 if (x)
     return true;
 else
   return false;
}

</script>

<script type="text/javascript">

   function ConfirmDeletes()
{
 var x = confirm("Are you sure you want to Book?");
 if (x)
     return true;
 else
   return false;
}

</script>
<script>

// function passprice1(price1){

// document.getElementById('carpriceindCarm1').innerHTML = price1;

// }
// function passprice2(price2){

// document.getElementById('carpriceindCarm1').innerHTML = price2;

// }
// function passprice3(price3){

// document.getElementById('carpriceindCarm1').innerHTML = price3;

// }
// function passprice4(price4){

// document.getElementById('carpriceindCarm1').innerHTML = price4;

// }
// function passprice5(price5){

// document.getElementById('carpriceindCarm1').innerHTML = price5;

// }

function tottalPriceperKm(){
   callback();
   var totalkm=document.getElementById("in_kilo").value;

}



</script>

<script>
function selectCar(){
   var carnumberIds=document.getElementById("carnumberId").value;


}
function fetchCar() {
   var fetchCarIds=document.getElementById("selectCarId").value;

}
</script>
 <script>
     "use strict";

     function initMap() {

       const directionsService = new google.maps.DirectionsService();
               const directionsService2 = new google.maps.DirectionsService();

       const directionsRenderer = new google.maps.DirectionsRenderer();
               const directionsRenderer2 = new google.maps.DirectionsRenderer();

       var mapOptions = {
      zoom: 7,
         center: {
           lat: 46.8182,
           lng: 8.2275
         }
     };


     var mapOptions2 = {
      zoom: 12,
         center: {
           lat: 46.8182,
           lng: 8.2275
         }
     };





   const  map = new google.maps.Map($('.map')[0], mapOptions);


       const  map2 = new google.maps.Map($('.map2')[0], mapOptions2);


       directionsRenderer.setMap(map);

       directionsRenderer2.setMap(map2);
       const onChangeHandler = function() {
         calculateAndDisplayRoute(directionsService, directionsRenderer);
                   calculateAndDisplayRoute(directionsService, directionsRenderer2);

       };

       document
         .getElementById("from_places")
         .addEventListener("change", onChangeHandler);
       document
         .getElementById("to_places")
         .addEventListener("change", onChangeHandler);
     }

     function calculateAndDisplayRoute(directionsService, directionsRenderer) {
       directionsService.route(
         {
           origin: {
             query: document.getElementById("from_places").value
           },
           destination: {
             query: document.getElementById("to_places").value
           },
           travelMode: google.maps.TravelMode.DRIVING
         },
         (response, status) => {
           if (status === "OK") {
             directionsRenderer.setDirections(response);
           }

         }
       );
     }
   </script>

   <script>
   $(function(){
   $("#datepicker").datepicker({
       minDate: 0,
       maxDate: "+1M +5D"
   });
});
$( function() {
 var from = $( "#fromDate" )
     .datepicker({
       dateFormat: "yy-mm-dd",
       changeMonth: true
     })
     .on( "change", function() {
       to.datepicker( "option", "minDate", getDate( this ) );
     }),
   to = $( "#toDate" ).datepicker({
     dateFormat: "yy-mm-dd",
     changeMonth: true
   })
   .on( "change", function() {
     from.datepicker( "option", "maxDate", getDate( this ) );
   });

</script>
<script>

$(document).ready(function(){
 $("#carnumberId").on("keyup", function() {
   var value = $(this).val().toLowerCase();


   $("#myTable ul").filter(function() {
     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   });
 });
});
</script>
<script>
$(document).ready(function(){
 $("#selectCarId").on("change", function() {
   var value = $(this).val().toLowerCase();



   $("#myTable ul").filter(function() {
     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   });
 });
});
</script>
<script>
$(document).ready(function(){
 $("#seatnumbers").on("change", function() {
 // Declare variables
var input, filter, table, tr, td, i, txtValue;
 input = document.getElementById("seatnumbers");
 filter = input.value.toUpperCase();
 table = document.getElementById("myTable");
 tr = table.getElementsByTagName("ul");
 for (i = 0; i < tr.length; i++) {
   td = tr[i].getElementsByTagName("span1")[0];
   if (td) {
     txtValue = td.textContent || td.innerText;
     if (txtValue.toUpperCase().indexOf(filter) > -1) {
       tr[i].style.display = "";
     } else {
       tr[i].style.display = "none";
     }
   }
 }

    });
 });
</script>
<script>
$(function(){
   $("#datepicker2").datepicker({
       minDate: 0,
       maxDate: "+1M +5D"
   });
});

</script>

    </script>


  @include('User.layout.footer')








