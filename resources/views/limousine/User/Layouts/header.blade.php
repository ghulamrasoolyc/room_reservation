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
                            <a href="{{route('home')}}"><img src="{{asset('images')}}/logo.png" alt=""></a>
                        </div>                       
    <a href="{{route('register')}}" class=" show-reg-form  sign_in_wrapper"><span>Add Your Hotel</span></a>

               </div>
                </div>
     <div class="header-inner fl-wrap">
                    <div class="container">
                       
<div class="container">
 
  <ul class="nav">
    <li class="nav-item">

     <a class="nav-link" href="{{ route('home')}}">Stays</a>
    </li>
  <li class="nav-item last-items">
        <a class="nav-link" href="{{route('car_rantels')}}">Car Rentals</a>
    </li>
    <li class="nav-item">

           <a class="nav-link" href="{{route('attractions.view')}}">Attractions</a>
    </li>
        <li class="nav-item">
     <a class="nav-link" href="#">Hotel</a>
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
