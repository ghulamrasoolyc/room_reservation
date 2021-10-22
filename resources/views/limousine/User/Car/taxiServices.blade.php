@extends('User.layout')
 @section('content')
 @include('User.Layouts.header')



 <style>

 </style>
    <!--<section id="page-title-area" class="section-padding overlay">-->
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2></h2>
                        <span class="title-line"><i class=""></i></span>
                        <p style="color:black"></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--== About Page Content Start ==-->
    <section id="about-area" class="section-padding">

        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>@lang('welcome.Our_services')</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>@lang('about.about_content')</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <h4>@lang('service.service01')</h4>
                                <p>@lang('service.service1')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img class="img-slice" src="assets/img/home2.png" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>





       <div class="row">
                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img class="img-slice" src="{{asset('assets/img/car')}}/DoorToDoor.jpg" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->

                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                 <h4>@lang('service.service02')</h4>
                                <p>@lang('service.service2')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->


            </div>



                   <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                 <h4>@lang('service.service03')</h4>
                                <p>@lang('service.service3')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img class="img-slice" src="{{asset('assets/img/car')}}/AirportTransfer.jpg" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>




       <div class="row">
                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img class="img-slice" src="{{asset('assets/img/car')}}/SightSeeingService.jpg" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->

                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                            <h4>@lang('service.service04')</h4>
                                <p>@lang('service.service4')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->


            </div>



                   <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                           <h4>@lang('service.service05')</h4>
                                <p>@lang('service.service5')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img class="img-slice"  src="{{asset('assets/img/car')}}/Contact_us.jpg" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>
        </div>
    </section>


        <div id="mobileapp-video-bg"></div>
    {{-- <section id="mobile-app-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <h2>SAVE 30% WITH THE APP</h2>
                        <p>Easy &amp; Fast - Book a car in 60 seconds</p>
                        <div class="app-btns">
                            <a href="#"><i class="fa fa-android"></i> Android Store</a>
                            <a href="#"><i class="fa fa-apple"></i> Apple Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--== About Page Content End ==-->


  @endsection

@section('footer')
 @include('User.Layouts.footer')
@endsection
