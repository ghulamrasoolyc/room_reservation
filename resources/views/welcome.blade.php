

   @extends('User.site.header_layut')
 
   @section('content')
  
   @include('User.layout.header')
  
  
  
  
        <style>
  
  
  .border-search-form {
  
      padding:5px !important;
  
      border: 2px solid #18458b;
   background: #003580;
  }
  .search-form-drop1{
      width: 272px;
      border: none;
      height:50px;
  }
  .search-form-drop2{
        width: 272px;
      border: none;
      height:50px;
  }
  .search-form-drop3{
        width: 272px;
      border: none;
      height:50px;
  }
  input.text-submit {
      width: 56px;
      height: 50px;
  }
  .submited-formd{
          text-align: center;
  }
  .submited-formd:hover {
         background:white;
         color:#18458b;
         border: 1px solid #18458b;
  }
  </style>
  
              <div id="wrapper">
                  <!-- content-->
                  <div class="content" >
                    <div class="" >
                      <!--section -->
                       <!--<section class="hero-section" style="background-image: url('{{asset('images')}}/logo-deputy.png')" alt="">"  data-scrollax-parent="true" id="sec1">-->

                      <section class="hero-section"  data-scrollax-parent="true" id="sec1">
                          <div class="hero-parallax" style="color: #f8f9fa" >
    <div class="bg" data-bg=""  data-scrollax="properties: { translateY: '200px' }"></div>
                              <div class="overlay op7" ></div>
                          </div>
                          <div class="hero-section-wrap fl-wrap">
                                <div class="container">
  
  
                                                            <div class="home-intro home-introeds">
                                      <div class="section-title-separator"><span></span></div>
                                      <h2>Distict Administration Tour Guide Web Application </h2>
                             
                           
                                  </div>
                                  <div class="main-search-input-wrap">
                      
                            @if(count($errors))
              <div class="form-group">
                  <div class="alert alert-danger">
                      <ul>
                          @foreach($errors->all() as $error)
                              <li>{{$error}}</li>
                          @endforeach
                      </ul>
                  </div>
              </div>
          @endif
  
  
       @if(session()->has('message.level'))
      <div class="alert alert-{{ session('message.level') }}"> 
      {!! session('message.content') !!}
         </div>
       @endif
  
     @if(Session::has('serverError'))
   <div class="alert-danger">{{Session::get('serverError')}} </div>
 @endif
    
                                   <div class="border-search-form">
  
                                  <div class="search-form">
  
                                      <form id="validateForm" method="post"
                                       action="{{ route('user.search.listing') }}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <div class="inner-form-section">
            
            <div class="container-fluid smart-phone-responsive">
  <div class="row">
                         <div class="col-lg-3 col-12   col-sm-12 col-offset-3 div-padding-class">
                                             
                                                      <div class="listsearch-input-item input-group flexiblesw ">
  
          <input type="text" id="from_places"  onchange="GetRoute(); "  name="hot_id" class=" select2" class="form-control"  name="hot_id" placeholder="Enter a location" required="true">
        
                                                      </div>
                                                  </div>
  
         <div class=" col-lg-3 col-12  col-sm-12 col-offset-3 div-padding-class">
       <div class="input-group flexiblesw date" 
                          data-target-input="nearest"> 
                          <input  type="text" id="datepicker"  name="checkIn"  
                           placeholder="Check in" required/>
                
                  </div>
     </div>
      <div class=" col-lg-3  col-12 col-sm-12 col-offset-3 div-padding-class">
       <div class="input-group flexiblesw date" 
                          data-target-input="nearest"> 
                          <input  type="text" id="datepicker2"  name="checkOut" 
                           placeholder="Check out" required/>
                
                  </div>
     </div>
         <div class=" col-lg-3 col-12 col-sm-12 col-offset-3 div-padding-class">
             <div class="input-group  submited-formd">
                          <input type="submit" class=" submited-formd" value="Search" />
                       
                      </div>
  <!--     <input  id="date2" name="checkOut"  class="search-form-drop3" placeholder="Check out" type="text"/>  -->
   
   </div>
            
  </div>
                              </div>
  
                                        </div>
  
                                      </form>
                                  </div>
                               </div>
  
  
  
  
  
                                   
  
                              
                                  </div>
                              </div>
                          </div>
                      
                      </section>
                    </div>
                      <!-- section end -->
                      <!--section -->
                      <div id="sec2">
                          <div class="container">
                                  <div class="section-title">
                                      <div  class="section-title-separator"><span style="color: #0e5d35 !important; padding-top: 20px;"></span></div>
                                      <h2 style="color: #0e5d35 !important; padding-top: 20px;">Popular Hotels</h2>
                                      <span class="section-separator"></span>
                                    
                                  </div>
                              </div>
                              <div class="container">
                         

                              
    @if(session()->has('msg'))
    <div class="alert alert-danger"> 
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{Session::get('msg')}}
</div>
    @endif


                              </div>
                              <!-- portfolio start -->
                              <div class="gallery-items fl-wrap mr-bot spad home-grid">
                           
  
  
     <?php if($hotels){
          $aray1=[];
          $arraytypes=[];  ?>
          <?php foreach (@$hotels as $key => $hotels) {
                if(count($aray1)==0){
                 array_push($aray1,$hotels);
                 array_push($arraytypes,$hotels->Hotel_name);
                  }else
                  {
                  if(!in_array($hotels->Hotel_name, $arraytypes)){
                  array_push($aray1,$hotels);
                  array_push($arraytypes,$hotels->Hotel_name);
                  $cc=count($arraytypes);
  
                   }
                   }
    
                   }
                  ?>
  
                             @foreach($aray1 as $value)
                              <a href="<?php   echo route('user.view.city',
                              ['id'=>$value->hotel_id])?>">
                                  <div class="gallery-item">
                                      <div class="grid-item-holder">
                                          <div class="listing-item-grid">
  
          <div class="listing-counter">{{$value->Hotel_name}} Hotels</div>
                  <img  src="images/city/{{$value->image}}"   alt=""/>
                  
                

                                              <div class="listing-item-cat">
                                                  <h3><a href="#"></a></h3>
                                                  <div class="weather-grid"   data-grcity="London"></div>
                                                  <div class="clearfix"></div>
                                              
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </a>
                            @endforeach
  <?php } ?>
  
  
  
  
                              </div>
                              <!-- portfolio end -->
                             
                      </section>
   
  
                  </div>
                  
              <div id="fromlocate"></div>
                  <!-- content end-->
              </div>
  
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
  
  
  
  
  
  </script>
    
  
  
  
  
    @endsection
  
  @section('footer')
  @include('User.layout.footer')
  @endsection
  
  
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script type="text/javascript" src="{{asset('assets')}}/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  
      
  
      
  
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
  
  
  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyDQI6Wm38FGkfeuqignehv7fvvAre4juS4&callback=initMap"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  

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




    </script>