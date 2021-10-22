
<style type="text/css">
    .navbar {
    position: relative;
    /* display: -webkit-box; */
    /* display: flex; */
    /* -webkit-box-orient: vertical; */
    /* -webkit-box-direction: normal; */
    flex-direction: column;
    padding: 0rem;
}

.col-lg-8.d-none.d-xl-block {
    margin-bottom: -12px;
}
</style>
<body class="loader-active">
      <!--  <div class="Preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/logo.png" alt="JSOFT">
            </div>
        </div>
    </div>
     -->
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
 
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="{{route('home.user')}}" class="logo services_logo">
                      <img src="{{asset('assets/img/Logo1.png')}}" alt="Logo">

<!--                             <div style="background-image: url('assets/img/Logo.png');"></div>
 -->                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright" >
                            <ul>
                       <li class="active"><a href="{{route('home.user')}}"> @lang('home.home_menu')</a>
                                 </li>
                                                                  <li><a href="{{route('contact.us')}}">Services</a></li>
                 <!--                 <li><a href="{{route('Limousine')}}"> @lang('home.limousine_service')</a></li> -->
                                 <li><a href="{{route('Fleet')}}"> @lang('home.fleet_menu')</a></li>
                                 <li><a href="{{route('About.us')}}"> @lang('home.about_us_menu')</a></li>
                                 <li><a href="{{route('contacted_us')}}">Contact</a></li>
                            
                                           <nav class="navbar navbar-expand-md navbar-light navbar-laravel  ">

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ">
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" style="color: white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Language <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a  style="color: black !important" class="dropdown-item" href="{{ url('/locale/en') }}"> English</a>
                                            <a  style="color: black !important" class="dropdown-item" href="{{ url('/locale/fr') }}"> German</a>
                                                            </div>
                                    </li>
                                </ul>
        
                            </nav>
                                
                   
                                   
       
                             <!--    <li><a href="{{ route('register')}}">Add New car</a></li> -->
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>