

@extends('User.layout')
 @section('content')
 @include('User.Layouts.header')

<script src="{{asset('admin_assets')}}/plugins/jquery/jquery.min.js"></script>
    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2><?php echo $limisuoine[0]->model ?> <span class="price">Rent: <b>$150</b></span></h2>
                        
                            <div class="single-car-preview">
                                <img src="{{asset('assets/img/car')}}/<?php echo $limisuoine[0]->image?>" alt="JSOFT">
                            </div>
           
                        
                        <div class="car-details-info">
                            <h4>Car Booking Detail</h4>
                            <div class="technical-info">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="tech-info-table">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Seat</th>
                                                    <td><?php echo  $limisuoine[0]->seat?></td>
                                                </tr>
                                           
                                                <tr>
                                                    <th>Doors</th>
                                                    <td><?php echo  $limisuoine[0]->door  ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Air Conditio</th>
                                                    <td><?php echo  $limisuoine[0]->air_condition ?></td>
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
                                <h3>Your Personal Information</h3>
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

                                <input type="hidden" value="{{csrf_token()}}" id="token"/>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="name-input">
                                                    <input type="text" id="name" placeholder="Full Name" required="true">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="email-input">
                                                    <input type="email" id="email" placeholder="Email Address" required="true">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="row personal-info">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="name-input">
                                                    <input type="text" id="phone" placeholder="Contact Number" required="true">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="email-input">
                                                    <input type="text" id="from" placeholder="From" required="true">
                                                </div>
                                            </div>
                                        </div>
                                                            <div class="row personal-info">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="name-input">
                                                    <input type="text" id="to" placeholder="TO" required="true">

                                                </div>
                                            </div>

                                  
                                        </div>
                                             <input type="hidden" id="car_id" value="{{$limisuoine[0]->id }}">                               
                     <!--            <input type="hidden" name="model" value="{{$limisuoine[0]->model }}">
                                <input type="hidden" name="seat" value="{{$limisuoine[0]->seat }}">
                               <input type="hidden" name="door"  value="{{$limisuoine[0]->door }}">
                               <input type="hidden" name="air_condition"  value="{{$limisuoine[0]->air_condition }}">
                               <input type="hidden" name="price"  value="{{$limisuoine[0]->price }}">
                               <input type="hidden" name="car_number"  value="{{$limisuoine[0]->car_number }}"> -->
                                              
                                        <div class="input-submit">
                                            <input type="submit" id="add" value="Submit">
                                      
                                        </div>
                                  
                               













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
                                <p><i class="fa fa-mobile"></i> +8801816 277 243</p>
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
                                            <a href="#"><img src="assets/img/we-do/service1-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service2-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
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
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
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
    <!--== Car List Area End ==-->

</div>
<script>

    $(document).ready(function(){
       $("#msg").hide();
           $("#add").click(function(){
            alert();
        
            $("#msg").show();
        
           var token = $('#token').val();
           var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
             var from = $('#from').val();
                 var to = $('#to').val();
            var car_id = $('#car_id').val();
      
$.ajax({
    type: 'post',
    data: "token=" + token + "&name=" + name + "&email=" + email +  "&car_id=" + car_id + "&phone=" + phone + "&from=" + from +  "&to=" + to ,
    url: "<?php echo url('/addItem') ?>",
    success:function(data){
        $("#msg").html("Your Booking is confirmed");
        $("#msg").fadeOut(200);
    }
     });
    });

   });
</script>
  
  @endsection

@section('footer')
 @include('User.Layouts.footer')
@endsection
