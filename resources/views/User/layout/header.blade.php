<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
     <!--    <link rel="shortcut icon" href="images/logo.png"> -->
    </head>
    <style>
       
      
@media screen and (max-width: 480px) {
.header-inner ul li a {

    font-size: 10px !important;
 
} 
ul.nav {
    padding: 1px !important;
}
}
        
    </style>
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
   <a href="{{route('register')}}"  class=" show-reg-form  sign_in_wrapper"><span style="color: white">Registered Your Hotel</span></a>

    <a href="{{route('login')}}"  class="show-reg-form sign-up-wrapper"><span style="color: white">Sign In<span></a>

               </div>
                </div>
     <div class="header-inner fl-wrap">
                    <div class="container">
                       

 <div class="localization-menu">
  <div class="left-menu-bar">
  <ul class="nav">
    <li class="nav-item">

     <i class="fa fa-home"></i> <a class="nav-link" href="{{route('registered_hotel')}}">Registered Hotel</a>
    </li>
  <li class="nav-item ">
        <i class="fa fa-car"></i> <a class="nav-link" href="{{route('car_rantels')}}">Car Rentals</a>
    </li>
    <li class="nav-item">

         <i class="fa fa-hotel"></i>  <a class="nav-link" href="{{route('attractions.view')}}">Attractions</a>
    </li>
     
  
  </ul>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
     <a  style="color: white !important" class="dropdown-item" href="{{ url('/locale/en') }}"> English</a>
           <a  style="color: white !important" class="dropdown-item" href="{{ url('/locale/fr') }}"> German</a>
          </div>
</div>

</div>


            </header>


            <style type="text/css">
              
              .header-inner ul .fa{
    color: #ccd6e5;
    margin-right: -7px;
    padding-top: 12px !important;
}

.header-inner ul li a {
    color: #fff !important;
    font-weight: 400;
    font-size: 13px;
    line-height: 20px;
    text-align: center;
    white-space: nowrap;
    padding-top: 10px;
    font-weight:bold;
}
            </style>

            <script type="text/javascript">
              function flights(){
                alert('Upcoming Soon.');
              }
            </script>