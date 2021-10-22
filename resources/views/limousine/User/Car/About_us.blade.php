@extends('User.layout')
 @section('content')
 @include('User.Layouts.header')

    <!--<section id="page-title-area" class="section-padding overlay">-->
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <!--<div class="col-lg-12">-->
                    <div class="section-title  text-center">
                        <h2></h2>
                        <span class="title-line"><i class=""></i></span>
                        <p style="color:black"></p>
                    </div>
                </div>
                 <!--Page Title End -->
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
                        <h2>@lang('about.about_us')</h2>
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
                                <p>@lang('about.about_content1')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img style="height: 300px !important" src="assets/img/car/AirportTransfers.jpg" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item active">

                            <p>@lang('about.about_content02')</p>
                        </div>
                    </div>


                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item active">

                            <p>@lang('about.about_content2')</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item active">

                            <p>@lang('about.about_content3')</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== About Page Content End ==-->
        <div id="mobileapp-video-bg"></div>
    <section id="mobile-app-area">
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
    </section>

  @endsection

@section('footer')
 @include('User.Layouts.footer')
@endsection
