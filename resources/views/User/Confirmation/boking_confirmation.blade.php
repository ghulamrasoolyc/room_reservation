@extends('User.site.layout')
 
 @section('content')

 @include('User.layout.header')

 <div class="print-slip">
  <div class="div-print-slip">



    <div class="right-side-form">
      <h3>Your booking in <?php echo $ourrecords[0]->Hotel_name;?> is confirmed.</h3>
      <div class="icon-heading">
    <i class="fas fa-check"></i>&nbsp; &nbsp; <p>Your booking confirmation is in your inbox.&nbsp;<strong style="color:#0071c2"><?php echo $email;?></strong>  </P>
     </div>
  <div class="icon-heading">

  <i class="fas fa-check"></i>&nbsp; &nbsp;<p>Get a better room for just PKRnbsp; &nbsp;<strong style="color:#0071c2"> <?php echo $sumPrice;?> </strong></p>
     </div>
       <div class="icon-heading">

  <i class="fas fa-check"></i>&nbsp; &nbsp;<p>Number of room you booked; &nbsp;<strong style="color:#0071c2"> <?php echo $sumroom;?> </strong></p>
     </div>


      <div class="icon-heading">
 
      <i class="fas fa-check"></i>&nbsp; &nbsp;<p>You can now modify or cancel your booking until check-in</p>
            </div>
      <div class="icon-heading">
        <i class="fas fa-check"></i>&nbsp; &nbsp;<p>Your payment will be handled by <strong style="color:#0071c2"><?php echo $ourrecords[0]->Hotel_name;?> </strong> Hotel. The Price section below has more</p>
      </div>
    <div class="icon-heading">
      <i class="fas fa-check"></i>&nbsp; &nbsp;<p>Get paperless confirmation when you download the app</p>
    </div>
  </div>




    <div class="download-slip-form">
      <div class="reassurance__button-container reassurance__button-container--first">

<form method="post" action="{{route('print.slip')}}">
    {{csrf_field()}}

             <input type="hidden" name="fullname"    value="<?php echo $name ;?>">
           <input type="hidden" name="email"     value="<?php echo $email ;?>">
           <input type="hidden"  name="phone"      value="<?php echo $phone ;?>">
           <input type="hidden" name="h_room_type" value="<?php echo $room_type_id ;?>">
           <input type="hidden" name="sumPrice"    value="<?php echo $sumPrice ;?>">
            <input type="hidden" name="sumroom"    value="<?php echo $sumroom ;?>">
            <input type="hidden" name="hotel_id"    value="<?php echo $hotel_id ;?>">
                      <input type="hidden" name="checkin"    value="<?php echo $checkin ;?>">
            <input type="hidden" name="checkOut"    value="<?php echo $checkOut ;?>">
   
             <input type="submit" class="btb btn-primary save-confirmations" value="Print Room Confirmation">


  </form>




<i class="mb-loader mb-loader--print"></i>
</div>
<div class="reassurance__button-container ">

</div>
      <div>
  </div>
 </div>
</div>

<script>
$('a.printPage').click(function(){
           window.print();
           return false;
});
</script>
   @endsection

@section('footer')
@include('User.layout.footer')
@endsection
