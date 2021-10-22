<!-- 
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
        
          <link rel="stylesheet" href="{{asset('site/plugins')}}/fontawesome-free/css/all.min.css">
        <link type="text/css" rel="stylesheet" href="{{asset('css')}}/reset.css">
        <link type="text/css" rel="stylesheet" href="{{asset('css')}}/plugins.css">

        <link type="text/css" rel="stylesheet" href="{{asset('css')}}/style.css">

        
        <link type="text/css" rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">

          <link rel="stylesheet" href="{{asset('build')}}/css/intlTelInput.css">
          <link rel="stylesheet" href="{{asset('build')}}/css/demo.css">
         <link rel="stylesheet" href="{{asset('css')}}/animate.min.css">
          
         <link rel="stylesheet" href="{{asset('fontawesome-free')}}/css/all.min.css">
  <!-- <link rel="stylesheet" href="{{asset('site/plugins')}}/icheck-bootstrap/icheck-bootstrap.min.css"> -->
       <link type="text/css" rel="stylesheet" href="{{asset('css')}}/color.css">

      <link rel="stylesheet" href="{{asset('site/plugins')}}/select2/css/select2.min.css">
     <link rel="stylesheet" href="{{asset('site/plugins')}}/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<body>
      @yield('content')
      @yield('js')
      @yield('footer')
    </body>

         <script type="text/javascript" src="{{asset('javascript')}}/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{asset('javascript')}}/plugins.js"></script>
        <script type="text/javascript" src="{{asset('javascript')}}/scripts.js"></script>
     <script type="text/javascript" src="{{asset('javascript')}}/map-single.js"></script>
  <script src="{{asset('javascript')}}/intlTelInput.js"></script>

 