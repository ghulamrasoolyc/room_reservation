
@extends('User.layout')
 @section('content')
 @include('User.Layouts.header')
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Limousine Service</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>                       <div class="container">
                                    <div class="row popular-car-gird">
                                    <ul id="progressbar">
                                            <li class="active"><span>01.</span>Personal Info</li>
                                            <li class=""><span>02.</span>Billing Address</li>
                                            <li><span>03.</span>Payment Method</li>
                                            <li><span>04.</span>Confirm</li>
                                        </ul>
                                    </div>
               
                    <div class="gOOGLE-APIS-SECTION">
                        <div class="inner-section-google">
                    <div class="row">
                        <div class="col-md-6">
                             <div class="booking-informations-user">
                                <div class="booking-informations-user-main-header">
                                    <label class="chbs-form-label-group">Fahrtdetails</label>
                                </div>
                            <div class="chbs-clear-fix">

                            <div class="chbs-form-field chbs-form-field-width-50">
                                <label class="chbs-form-field-label">
                                    Abholdatum                                    <span class="chbs-tooltip chbs-meta-icon-question" data-hasqtip="0" oldtitle="The date when your journey will start." title=""></span>
                                </label>
                                <span class="chbs-meta-icon-2 chbs-meta-icon-2-date-1"></span><input type="text" autocomplete="off" name="chbs_pickup_date_service_type_1" class="chbs-datepicker hasDatepicker" value="" id="dp1592896956727" size="10">
                            </div>

                            <div class="chbs-form-field chbs-form-field-width-50">
                                <label>
                                    Abholzeit                                    <span class="chbs-tooltip chbs-meta-icon-question" data-hasqtip="1" oldtitle="The time when your journey will start." title=""></span>
                                </label>
                                <span class="chbs-meta-icon-2 chbs-meta-icon-2-time-1"></span><input type="text" autocomplete="off" name="chbs_pickup_time_service_type_1" class="chbs-timepicker ui-timepicker-input" value="">
                            </div>

                        </div>
                             </div>

                        </div>
                            <div class="col-md-6">
                                                          <div class="maparea">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29213.038296132225!2d90.39150904197642!3d23.760577791538438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c783c3404f0d%3A0x76ae0d2edabc81df!2sHatir+Jheel!5e0!3m2!1sen!2sbd!4v1517941663187"></iframe>
        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
     
                            
 @endsection

@section('footer')
 @include('User.Layouts.footer')
@endsection
<style type="text/css">
.br11{
    border-bottom: 1px solid gray;
}
</style>