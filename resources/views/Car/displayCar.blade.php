 @extends('User.site.layout')
 
 @section('content')

 @include('User.layout.header')
    <!--== Car List Area Start ==-->

    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            @foreach($car as $car)
                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                    <div class="">
                   <img src="{{asset('Assets_car/img/car')}}/{{$car->image}}"/>
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">{{$car->model}}</a></h2>
                                        <h5>{{$car->price}}</h5>
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

 <a href="<?php echo  route('car.booking',['id'=>$car->id]) ?>" class="rent-btn">Book It</a>
                                    </div>
                                </div>       </div>
                                @endforeach
                </div>
            </div>
        </div>
    </section>
  @endsection

@section('footer')
@include('User.layout.footer')
@endsection