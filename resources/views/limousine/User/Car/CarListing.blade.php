

@extends('User.layout')
 @section('content')
 @include('User.Layouts.header')

    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="set-location">
                <h6>From {{$From}} To {{$To}}</h6>
            </div>
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            @foreach($searchLocation as $searchLocation)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb">
                                     <img src="{{asset('assets/img/car')}}/car-1.jpg"/>

                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">{{$searchLocation->car_name}}</a></h2>
                                        <h5>{{$searchLocation->price}}</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                        <ul class="car-info-list">
                                            <li>AC</li>
                                            <li>Diesel</li>
                                            <li>Auto</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star unmark"></i>
                                        </p>
       <a href="<?php echo route('Book_car',['id'=>$searchLocation->location_id])?>"
        class="rent-btn"> Book It</a>

                                    </div>
                                </div>
                            </div>
                     @endforeach


                    
                        </div>
                    </div>

                    <!-- Page Pagination Start -->
                    <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Page Pagination End -->
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>


 @endsection

@section('footer')
 @include('User.Layouts.footer')
@endsection
