@extends('User.site.layout')
 @section('content')

 @include('User.layout.header')

<div class="booking-section-page">
  <div class="inner-booking-section">
    <div class="container-fluid containers">
      <div class="booking-details-sections">
        <div>
        <div class="booking-container">
         <p>Your Booking Details</p>
      </div>
      <div class="inner-div-sec">
      <h4>Check-in:</h4>
      <p>Friday, 22 May 2020 from 12:00</p>
      <h4>
        Check-out</h4>
        <p>Sat, 23 May untill 12:00
            <h4>
        Total lenght of Stay
      </h4>
      <p>1 Night</p>
      <h4>
           <a href="#">Travelling On different dates?</a>
       </h4>
       <div class="inner-section-border">
       </div>
       <br>
       <br>

       <h4>You selected: </h4>
       <p>2 x Double or Twin Room <p>
             <a href="#">Change Your Selection</a>
         </div>

         </div>

       </div>
                      @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
<div class="inner-section-booking">
  <form action="{{route('next.final.details')}}" method="post">
          {{csrf_field()}}
        <div class="customer-form-detail">
          <div class="containe-div">
         <img src="{{asset('images/city')}}/<?php echo $booking[0]->image; ?>">
            </div>
            <div class="img-left">
               <h6>{{$booking[0]->Hotel_name}}</h6>
               <br>
               <p>Rating: <i class="fa fa-star"></i>&nbsp;
                <i class="fa fa-star"></i>&nbsp; &nbsp;<i class="fa fa-star"></i></p>
                <div class="marker-img">
                 <p> <i class="fa fa-map-marker"></i>&nbsp;Royal Road Kazmi Bazar, 16100 Skardu, Pakistan</p>
                </div>

            </div>
        
        </div>
        <div class="outer-link">
          <p>No payment needed today. You'll pay when you stay. </p>

        </div>
        <div class="enter-detail">
          <h3>Enter Your detail</h3>
          <div  class="detail-form-customer">
            <div class="bbt">
               <i class="fa fa-user bicon_occur"> </i>
            <p>Sign in to book with your saved details or register to manage your bookings on the go!</p>
          </div>
        <div class="required_fields_description">
      
               Almost done! Just fill in the required info
               <strong style="color: #a30000 !important;
font-size: 15px;     font-weight: bold;"></strong>
         
        </div>

  <div class="row-name">
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
<select name="title" class="form-control">
<option>Mr.</option>

<option>Ms.</option>
<option>Mrs.</option>
</select>
  </div>
  <div class="form-group padding-full-name">
    <label for="exampleFormControlInput1">Full Name</label>
    <input type="text" name="fullname" class="form-control"  
   placeholder="Enter Valid Name" required="true" >
  </div>

</div>


<input type="hidden" name="hote_booking_id" value="<?php echo $hot_iid; ?>">
<input type="hidden" name="h_room_type" value="<?php echo $h_room_type; ?>">
<input type="hidden" name="sumroom" value="<?php echo $sumroom; ?>">
<input type="hidden" name="sumPrice" value="<?php echo $sumPrice; ?>">
<input type="hidden" name="checkin" value="<?php echo $checkin; ?>">
<input type="hidden" name="checkOut" value="<?php echo $checkOut; ?>">

<!--   <div class="form-group lebel_class_input">
     <label for="exampleFormControlInput1">Country</label>
<select name="country" class="form-control" required="true">
<option value="">India</option>
<option value="">South Africa</option>
<option value="">England</option>

</select>

  </div> -->
   <div class="form-group lebel_class_input">
    <label for="exampleFormControlSelect1">Contact Number</label>
    <input id="phone" name="phone" class="form-control" type="tel" required="true">
  </div>

  <div class="form-group lebel_class_input">
    <label for="exampleFormControlSelect1">Email</label>
    <input id="email" name="email" class="form-control" type="email" required="true" >
  </div>


<!--   <div class="form-group lebel_class_input">
    <label for="exampleFormControlSelect1">Who are You booking for</label>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
</div>
  
  </div> -->


<div class="guests room_details--margin_adjustment">
<div class="bp-room">
  <div class="room-details-description">
    <div class="room-details-room-name">
      <p class="room-name--name-prominent">  
         <ins class="room-name-pure" tabindex="0">Double or Twin Room</ins>
      </p>

      
      <p class="policies_digest ">
<span class="
bp_prepayment_policy
">
<ins class="bp_prepayment_policy_text
              " tabindex="0">
<strong>Non-refundable</strong>
</ins>
</span>
<a class="room_policies_tooltip_icon js-pod_smp_nr  jq_tooltip" data-width="350" data-title="
<div class='bp_bs2_booking_conditions_tooptip'>
<p>
<strong>
<strong>Non-refundable</strong>
:
</strong>
Please note, if cancelled, modified or in case of no-show, the total price of the reservation will be charged.
</p>
<p>
<strong>Prepayment:</strong>
No prepayment is needed.
</p>
</div>
" tabindex="0">
<i class="bicon-question" style="color:#0896FF"></i>
</a>
</p>
<ul class="rooms-block__pills-container bui-spacer--small">
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="Balcony">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-resort" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M84 116a4 4 0 0 1-4 4H48a4 4 0 0 1 0-8h12V52a4 4 0 0 1 8 0v60h12a4 4 0 0 1 4 4zm-36-16a4 4 0 0 0-4-4H22.9l-7.1-21.3a4 4 0 1 0-7.6 2.6l7.5 22.4-7.3 14.5a4 4 0 1 0 7.2 3.6l6.9-13.8H32v12a4 4 0 0 0 8 0v-12h4a4 4 0 0 0 4-4zm64.3-.3l7.5-22.4a4 4 0 0 0-7.6-2.6l-7 21.3H84a4 4 0 0 0 0 8h4v12a4 4 0 0 0 8 0v-12h9.5l7 13.8a4 4 0 0 0 7-3.6zM12.3 40h103.4c3.7 0 5.7-4.1 3.2-6.7C109.8 24 90.4 8 64 8S18.2 24 9.1 33.3C6.6 36 8.6 40 12.3 40z"></path></svg>
Balcony
</span>
</li>
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="Lake View">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-landscape" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M112 20H16a8 8 0 0 0-8 8v72a8 8 0 0 0 8 8h96a8 8 0 0 0 8-8V28a8 8 0 0 0-8-8zM24 92l32-32 20 20 8-8 20 20zm68-32a12 12 0 1 1 12-12 12 12 0 0 1-12 12z"></path></svg>
Lake view
</span>
</li>
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="Garden View">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-garden" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M116 112H69V80.7a10.5 10.5 0 0 0 5.5-9.2 8.5 8.5 0 0 0-.2-1.7 8.5 8.5 0 0 0 1 1.4 10.5 10.5 0 0 0 14.9-14.9 8.5 8.5 0 0 0-1.4-1 8.5 8.5 0 0 0 1.7.2 10.5 10.5 0 0 0 0-21 8.5 8.5 0 0 0-1.7.2 8.5 8.5 0 0 0 1.4-1 10.5 10.5 0 1 0-14.9-14.9 8.5 8.5 0 0 0-1 1.4 8.5 8.5 0 0 0 .2-1.7 10.5 10.5 0 1 0-21 0 8.5 8.5 0 0 0 .2 1.7 8.5 8.5 0 0 0-1-1.4 10.5 10.5 0 0 0-14.9 14.9 8.5 8.5 0 0 0 1.4 1 8.5 8.5 0 0 0-1.7-.2 10.5 10.5 0 0 0 0 21 8.5 8.5 0 0 0 1.7-.2 8.5 8.5 0 0 0-1.4 1 10.5 10.5 0 0 0 14.9 14.9 8.5 8.5 0 0 0 1-1.4 8.5 8.5 0 0 0-.2 1.7 10.5 10.5 0 0 0 5.5 9.2V112H12a4 4 0 0 0 0 8h104a4 4 0 0 0 0-8zM87.3 68.3a6.5 6.5 0 0 1-9.1 0 42 42 0 0 1-5.1-12 15.6 15.6 0 0 0 2.4-2.2 42.2 42.2 0 0 1 11.8 5 6.5 6.5 0 0 1 0 9.2zM97 45a6.5 6.5 0 0 1-6.5 6.5c-2 0-6.7-2.1-11.3-4.5a15.6 15.6 0 0 0 .4-3.3v-.9c4.4-2.3 9-4.3 11-4.3A6.5 6.5 0 0 1 97 45zM78.2 21.7a6.5 6.5 0 0 1 9.1 9.1 37 37 0 0 1-10.2 4.6 15.6 15.6 0 0 0-3.3-3.8c1.4-4.5 3.1-8.7 4.4-10zM64 12a6.5 6.5 0 0 1 6.5 6.5c0 1.7-1.7 5.8-3.8 9.9a14.7 14.7 0 0 0-5.4 0 35 35 0 0 1-3.8-10A6.5 6.5 0 0 1 64 12zm-23.3 9.7a6.5 6.5 0 0 1 9.1 0 32 32 0 0 1 4.5 9.9 15.6 15.6 0 0 0-3.4 3.8 35 35 0 0 1-10.2-4.6 6.5 6.5 0 0 1 0-9.1zM31 45a6.5 6.5 0 0 1 6.5-6.5c1.9 0 6.5 2 11 4.3v1a15.6 15.6 0 0 0 .3 3.2 38.8 38.8 0 0 1-11.3 4.5A6.5 6.5 0 0 1 31 45zm18.8 23.3a6.5 6.5 0 0 1-9.1-9.1c1.4-1.5 6.7-3.5 11.8-5a15.6 15.6 0 0 0 2.4 2.1 42.1 42.1 0 0 1-5 12zm12.7-9.1h3c2.5 4.8 5 10.2 5 12.3a6.5 6.5 0 0 1-13 0c0-2 2.5-7.4 5-12.3zM48 104q-24 0-24-24 24 0 24 24zm56-24q0 24-24 24 0-24 24-24z"></path></svg>
Garden view
</span>
</li>
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="Mountain View">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-mountains" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M120 117.4l-15-47.2a2 2 0 0 0-2-1.4 2 2 0 0 0-.8.2l-4 2a2 2 0 0 1-1 .2 2 2 0 0 1-1.9-1.3L81.6 33.3a2 2 0 0 0-3.8-.1l-37.6 84A2 2 0 0 0 42 120h76a2 2 0 0 0 2-2.6zM79.1 49.7l8.6 23v.2a10 10 0 0 0 11.5 6l.8 2.6A27.2 27.2 0 0 1 83 88a34.1 34.1 0 0 1-18.6-5.7zM52.8 72.5l-21 46.3a2 2 0 0 1-1.9 1.2H10a2 2 0 0 1-1.9-2.9L22.4 85a2 2 0 0 1 2.6-1l4.6 1.8a2 2 0 0 0 2.5-1L42.2 65a2 2 0 0 1 3-.7l7 5.7a2 2 0 0 1 .6 2.4z"></path></svg>
Mountain view
</span>
</li>
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="Landmark View">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-landmark" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><rect x="8" y="106" width="112" height="10" rx="2" ry="2"></rect><path d="M24 60a2 2 0 0 0-2 1.8v34.4a2 2 0 0 0 2 1.8h8a2 2 0 0 0 2-1.8V61.8a2 2 0 0 0-2-1.8zm24 0a2 2 0 0 0-2 1.8v34.4a2 2 0 0 0 2 1.8h8a2 2 0 0 0 2-1.8V61.8a2 2 0 0 0-2-1.8zm24 0a2 2 0 0 0-2 1.8v34.4a2 2 0 0 0 2 1.8h8a2 2 0 0 0 2-1.8V61.8a2 2 0 0 0-2-1.8zm24 0a2 2 0 0 0-2 1.8v34.4a2 2 0 0 0 2 1.8h8a2 2 0 0 0 2-1.8V61.8a2 2 0 0 0-2-1.8zm-85.8-8h107.6a2 2 0 0 0 1.3-3.7L65 12.3a2 2 0 0 0-2.2 0l-53.9 36a2 2 0 0 0 1.3 3.7z"></path></svg>
Landmark view
</span>
</li>
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="City View">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-city" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M24 88h8v16h-8zm0-16h8V56h-8zm32 32h8V88h-8zm0-32h8V56h-8zm0-32h8V24h-8zm64 16v60a4 4 0 0 1-4 4H12a4 4 0 0 1-4-4V44a4 4 0 0 1 4-4h28V12a4 4 0 0 1 4-4h32a4 4 0 0 1 4 4v58.3l5.2-5.1a4 4 0 0 1 5.6 0l5.2 5.1V56a4 4 0 0 1 .3-1.5l8-20a4 4 0 0 1 7.4 0l8 20a4 4 0 0 1 .3 1.5zM16 112h24V48H16zm32 0h24V16H48v96zm32 0h16V81.7l-8-8-8 8zm32-55.2l-4-10-4 10V112h8z"></path></svg>
City view
</span>
</li>
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="Inner courtyard view">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-landscape" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M112 20H16a8 8 0 0 0-8 8v72a8 8 0 0 0 8 8h96a8 8 0 0 0 8-8V28a8 8 0 0 0-8-8zM24 92l32-32 20 20 8-8 20 20zm68-32a12 12 0 1 1 12-12 12 12 0 0 1-12 12z"></path></svg>
Inner courtyard view
</span>
</li>
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="Private bathroom">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-shower" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M103.8 49.8A8 8 0 0 1 96 56H32a8 8 0 0 1-3.6-15.2L46.1 32a39.7 39.7 0 0 1 9.2-3.3 7.9 7.9 0 0 0-7.2-4.7H8V8h40.1a23.9 23.9 0 0 1 23.7 20.6 39.7 39.7 0 0 1 10 3.4l17.8 8.8a8 8 0 0 1 4.2 9zM32 64s-8 11.6-8 16a8 8 0 0 0 16 0c0-4.4-8-16-8-16zm8 48a8 8 0 0 0 16 0c0-4.4-8-16-8-16s-8 11.6-8 16zm-32 0a8 8 0 0 0 16 0c0-4.4-8-16-8-16s-8 11.6-8 16zm64 0a8 8 0 0 0 16 0c0-4.4-8-16-8-16s-8 11.6-8 16zm40-16s-8 11.6-8 16a8 8 0 0 0 16 0c0-4.4-8-16-8-16zM64 64s-8 11.6-8 16a8 8 0 0 0 16 0c0-4.4-8-16-8-16zm23 16a8 8 0 0 0 16 0c0-4.4-8-16-8-16s-8 11.6-8 16z"></path></svg>
Ensuite bathroom
</span>
</li>
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="Flat-screen TV">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-screen" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M116 24H12a4 4 0 0 0-4 4v64a4 4 0 0 0 4 4h36v4a4 4 0 0 0 4 4h24a4 4 0 0 0 4-4v-4h36a4 4 0 0 0 4-4V28a4 4 0 0 0-4-4zm-5 64H16V32h95z"></path></svg>
Flat-screen TV
</span>
</li>
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="Soundproofing">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-soundproof" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M12 120a4 4 0 0 1-2.8-6.8l104-104a4 4 0 0 1 5.6 5.6l-104 104A4 4 0 0 1 12 120zm70.6-96.3l3.3 1.4 6-6a57 57 0 0 0-6.5-2.9 4 4 0 1 0-2.8 7.5zM84 93.5a4 4 0 0 0 2.2-.7C97.7 85.3 104 75 104 64a30 30 0 0 0-5.7-17.4l-5.8 5.8A21.8 21.8 0 0 1 96 64c0 8.3-5 16.1-14.2 22.2a4 4 0 0 0 2.2 7.3zm26.2-58.7l-5.7 5.7a42 42 0 0 1 4 7.2 40.4 40.4 0 0 1 0 32.6 43.1 43.1 0 0 1-10.2 14.3 47.5 47.5 0 0 1-15.7 9.7 4 4 0 1 0 2.8 7.5 55.5 55.5 0 0 0 18.3-11.3 51 51 0 0 0 12.2-17 48.4 48.4 0 0 0 0-39 50 50 0 0 0-5.7-9.7zM16 88h7l8-8H16V48h16v31l8-8V48l24-32v31l8-8V16a8 8 0 0 0-14.4-4.8L36 40H16a8 8 0 0 0-8 8v32a8 8 0 0 0 8 8zm48-7v31L50.7 94.3 45 100l12.6 16.8A8 8 0 0 0 72 112V73z"></path></svg>
Soundproofing
</span>
</li>
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="Barbecue">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-bbq" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M56 16c-20.5 2-37.3 11.7-44 24h104c-6.6-12.4-23.5-22-44-24v-4a4 4 0 0 0-4-4h-8a4 4 0 0 0-4 4v4zm-8.7 96a12 12 0 1 1-12.8-15.9L40 77C22.6 71.8 10.2 60.7 8 48h112c-2.2 12.7-14.6 23.8-32 29l10.8 37.9a4 4 0 0 1-2.7 5c-2.6.1-4.3-.6-5-2.7L89 112H47.3zm0-8H87l-7-25a86.7 86.7 0 0 1-16 1 86.3 86.3 0 0 1-16-1l-5.7 18.8a12 12 0 0 1 5 6.2z"></path></svg>
Barbecue
</span>
</li>
<li class="rooms-block__pills-container__pill bp-highlighted-facility" data-name-en="Terrace">
<span class="" data-et-view="eWHMPBXLYSfDcdXUSdafbMO:1">
<svg class="bk-icon -iconset-resort" fill="#006607" height="14" width="14" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M84 116a4 4 0 0 1-4 4H48a4 4 0 0 1 0-8h12V52a4 4 0 0 1 8 0v60h12a4 4 0 0 1 4 4zm-36-16a4 4 0 0 0-4-4H22.9l-7.1-21.3a4 4 0 1 0-7.6 2.6l7.5 22.4-7.3 14.5a4 4 0 1 0 7.2 3.6l6.9-13.8H32v12a4 4 0 0 0 8 0v-12h4a4 4 0 0 0 4-4zm64.3-.3l7.5-22.4a4 4 0 0 0-7.6-2.6l-7 21.3H84a4 4 0 0 0 0 8h4v12a4 4 0 0 0 8 0v-12h9.5l7 13.8a4 4 0 0 0 7-3.6zM12.3 40h103.4c3.7 0 5.7-4.1 3.2-6.7C109.8 24 90.4 8 64 8S18.2 24 9.1 33.3C6.6 36 8.6 40 12.3 40z"></path></svg>
Terrace
</span>
</li>
</ul>




    </div>
<div class="bp_room_details_holder  ">
<div class="max-persons-details">
<label for="nr_guests_565177502_214085416_2_41_0" class="room-detail-label"><strong>Guests:</strong></label>
<select class="ClickTaleSensitive bp_bs2_guest_dropdown bp_input_select notranslate" name="nr_guests_565177502_214085416_2_41_0" id="nr_guests_565177502_214085416_2_41_0" data-room-guests-select="">
<option value="2" selected="">2</option>
<option value="1">1</option>
</select>
</div>
<div class="smoking-details">
<span class="room-detail-text">
<img alt="No Smoking" src="//q-ak.bstatic.com/static/img/book/no_smoking_icon/0cf6556bc7910f63f69e04e8a71b8b0f570d2084.png">
<input type="hidden" name="smoking_preference_565177502_214085416_2_41_0" value="no">
</span>
</div>
</div>

  </div>
</div>
  </div>



      </div>
    </div>
<div class="final-details">
  <input type="submit" class="btn btn-primary" value="Next: Final Details">
</div>

  
</form>

      </div>
   </div>
 
      <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
  </script>


        @endsection

@section('footer')
@include('User.layout.footer')
@endsection
