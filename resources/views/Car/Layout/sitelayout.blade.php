<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Easybook - Hotel Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    <link href="{{asset('Assets_car')}}/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{asset('Assets_car')}}/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{asset('Assets_car')}}/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{asset('Assets_car')}}/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{asset('Assets_car')}}/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{asset('Assets_car')}}/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{asset('Assets_car')}}/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{asset('Assets_car')}}/css/responsive.css" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
</head>







<body>
      @yield('content')
      @yield('js')
      @yield('footer')
    </body>
    <script src="{{asset('Assets_car')}}/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{asset('Assets_car')}}/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="{{asset('Assets_car')}}/js/main.js"></script>


      </html>




      <script type="text/javascript">

$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
      </script>