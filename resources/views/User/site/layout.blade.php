
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Easybook - Hotel Booking Directory Listing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
           <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>


        <!--=============== css  ===============-->
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
    <link href="{{asset('Assets_car')}}/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{asset('Assets_car')}}/css/responsive.css" rel="stylesheet">



        <link type="text/css" rel="stylesheet" href="{{asset('css')}}/reset.css">
        <link type="text/css" rel="stylesheet" href="{{asset('css')}}/plugins.css">

        <link type="text/css" rel="stylesheet" href="{{asset('css')}}/style.css">
        <link type="text/css" rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">

          <link rel="stylesheet" href="{{asset('build')}}/css/intlTelInput.css">
          <link rel="stylesheet" href="{{asset('build')}}/css/demo.css">
         <link rel="stylesheet" href="{{asset('css')}}/animate.min.css">
         <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          
         <link rel="stylesheet" href="{{asset('fontawesome-free')}}/css/all.min.css">


       <link type="text/css" rel="stylesheet" href="{{asset('css')}}/color.css">
  <!-- iCheck for checkboxes and radio inputs -->


<body>
      @yield('content')
      @yield('js')
      @yield('footer')
    </body>
    <script type="text/javascript" src="{{asset('javascript')}}/jquery.min.js"></script> 
         <script type="text/javascript" src="{{asset('javascript')}}/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{asset('javascript')}}/plugins.js"></script>
        <script type="text/javascript" src="{{asset('javascript')}}/scripts.js"></script>
     <script type="text/javascript" src="{{asset('javascript')}}/map-single.js"></script>
  <script src="{{asset('javascript')}}/intlTelInput.js"></script>


    

