 @extends('User.site.layout')
 
 @section('content')

 @include('User.layout.header')
 

    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2>Aston Martin One-77 <span class="price">Rent: <b>$150</b></span></h2>
                        <div class="car-preview-crousel">
                                     <img src="{{asset('Assets_car/img/car')}}/{{$car_sep[0]->image}}"/>
                 
                        </div>
                        <div class="car-details-info">
                     
                            <div class="technical-info">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="tech-info-table">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Model</th>
                                                    <td>{{$car_sep[0]->model}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Seat</th>
                                                    <td>{{$car_sep[0]->seat}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Number</th>
                                                    <td>{{$car_sep[0]->car_number}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Door</th>
                                                    <td>{{$car_sep[0]->door}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="tech-info-list">
                                            <ul>
                                                <li>ABS</li>
                                                <li>Air Bags</li>
                                                <li>Bluetooth</li>
                                                <li>Car Kit</li>
                                                <li>GPS</li>
                                                <li>Music</li>
                                                <li>Bluetooth</li>
                                                <li>ABS</li>
                                                <li>GPS</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="review-area">
                                <h3>Be the first to review “Aston Martin One-77”</h3>
                                <div class="review-star">
                                    <p class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star unmark"></i>
                                        <i class="fa fa-star unmark"></i>
                                    </p>
                                </div>
                                <div class="review-form">
                                    <form action="{{route('user.last.booking')}}" method="post">
                                       
                                         {{csrf_field()}}
                                            <div class="col-lg-12 col-md-12 mt-4">
                                                <div class="name-input">
                                                    <input type="text" name="name" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <input type="hidden" name="uidd" value="{{$car_sep[0]->id}}">

                                            <div class="col-lg-12 col-md-12 mt-4">
                                                <div class="email-input">
                                                    <input type="email" name="email" placeholder="Email Email">
                                                </div>
                                            </div>
                                 
                                            <div class="col-lg-12 col-md-12 mt-4">
                                                <div class="name-input">
                                                    <input type="text" name="contact" placeholder="Contact">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 my-4">
                                                <div class="email-input">
                                                    <input type="address" name="address" placeholder="Address">
                                                </div>
                                            </div>
                                      



                                        <div class="input-submit">
                                                 <div class="col-lg-12 col-md-12 my-4">
                                            <button type="submit">Submit</button>
                                   </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>For More Informations</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-mobile"></i>Liocation From: &nbsp; Skardu</p>
                                 <p><i class="fa fa-mobile"></i>Liocation To: &nbsp; khaplu</p>
                                  <p><i class="fa fa-mobile"></i>Date: &nbsp; 12/12/2022</p>
                                   <p><i class="fa fa-mobile"></i>Con#: &nbsp; 8349603456</p>
                                <p><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</p>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Rental Tips</h3>

                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="{{asset('Assets_car')}}/img/we-do/service1-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="{{asset('Assets_car')}}/img/we-do/service3-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="{{asset('Assets_car')}}/img/we-do/service2-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="{{asset('Assets_car')}}/img/we-do/service3-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Connect with Us</h3>

                            <div class="sidebar-body">
                                <div class="social-icons text-center">
                                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-behance"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>

  @endsection

@section('footer')
@include('User.layout.footer')
@endsection