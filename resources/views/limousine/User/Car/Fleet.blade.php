
@extends('User.layout')
 @section('content')
 @include('User.Layouts.header')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>@lang('fleet.Our_latest_fleet')</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p style="color:black">@lang('fleet.fleet_paragraph')</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <div id="blog-page-content" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="{{asset('assets/img/car')}}/s.png" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">@lang('fleet.mar_')</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">@lang('fleet.seat'): <span>@lang('fleet.pass')</span></a>
                                                <a href="#" class="commnet">@lang('fleet.Baggage'):<span>@lang('fleet.Baggage_con') </span></a>
                                            </div>

                                            <!--<div class="article-date">25 <span class="month">jan</span></div>-->

         <p> @lang('fleet.fleet_e_car_content')</p>
          <p> @lang('fleet.exctras')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->

                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article middle">
                        <div class="row">

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-xl-none">
                                <div class="article-thumb">
                                    <img src="{{asset('assets/img/car')}}/ss.png" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">@lang('fleet.S_class')</a></h3>
                                            <div class="article-meta">
                                            <a href="#" class="author">@lang('fleet.seat1'): <span>@lang('fleet.pass1')</span></a>
                                                <a href="#" class="commnet">@lang('fleet.Baggage1'):<span>@lang('fleet.Baggage_con1') </span></a>
                                            </div>

                                            <!--<div class="article-date">25 <span class="month">jan</span></div>-->

                              <p> @lang('fleet.fleet_e_car_content1')</p>
          <p> @lang('fleet.exctras1')</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-none d-xl-block">
                                <div class="article-thumb">
                                    <img src="{{asset('assets/img/car')}}/ss.png" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->

                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="{{asset('assets/img/car')}}/vv.png" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">@lang('fleet.V_')
</a></h3>
                                            <div class="article-meta">
                                                        <a href="#" class="author">@lang('fleet.seat2'): <span>@lang('fleet.pass2')</span></a>
                                                <a href="#" class="commnet">@lang('fleet.Baggage2'):<span>@lang('fleet.Baggage_con2') </span></a>
                                            </div>

                                            <!--<div class="article-date">25 <span class="month">jan</span></div>-->

                                                           <p> @lang('fleet.fleet_e_car_content2')</p>
                                                   <p> @lang('fleet.exctras2')</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->

                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article middle">
                        <div class="row">

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-xl-none">
                                <div class="article-thumb">
          <img src="{{asset('assets/img/car')}}/tota.png" alt="JSOFT">

                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">@lang('fleet.pijouro')</a></h3>
                                            <div class="article-meta">
                                               <a href="#" class="author">@lang('fleet.seat3'): <span>@lang('fleet.pass3')</span></a>
                                                <a href="#" class="commnet">@lang('fleet.Baggage3'):<span>@lang('fleet.Baggage_con3') </span></a>
                                            </div>

                                            <!--<div class="article-date">25 <span class="month">jan</span></div>-->

                                                  <p> @lang('fleet.fleet_e_car_content3')</p>
                                                   <p> @lang('fleet.exctras3')</p>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-none d-xl-block">
                                <div class="article-thumb">
                                    <img src="{{asset('assets/img/car')}}/tota.png" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->
            </div>

            <div class="row">
                <!-- Page Pagination Start -->
                <!--<div class="col-lg-12">-->
                <!--    <div class="page-pagi">-->
                <!--        <nav aria-label="Page navigation example">-->
                <!--            <ul class="pagination">-->
                <!--                <li class="page-item"><a class="page-link" href="#">Previous</a></li>-->
                <!--                <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
                <!--                <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                <!--                <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                <!--                <li class="page-item"><a class="page-link" href="#">4</a></li>-->
                <!--                <li class="page-item"><a class="page-link" href="#">5</a></li>-->
                <!--                <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
                <!--            </ul>-->
                <!--        </nav>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- Page Pagination End -->
            </div>
        </div>
    </div>



    <!--== Car List Area End ==-->
 @endsection

@section('footer')
 @include('User.Layouts.footer')
@endsection
