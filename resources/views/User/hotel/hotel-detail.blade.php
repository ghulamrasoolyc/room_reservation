  

@extends('User.site.layout')
 @section('content')

 @include('User.layout.header')
 
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <div class="hotel-listing-page"> 
                         <div class="text-hotel-p">
                         <p class="text-center">Find Room in Hotel:&nbsp;@if(count($generaic_room) != 0) {{$generaic_room[0]->Hotel_name}} @endif</p>
                         </div>
          
                    <section class="dynamic-room" id="" style="padding-bottom: 50px">
                        <!--  scroll-nav-wrapper  -->
                    
                        <!--  scroll-nav-wrapper end  -->                    
                        <!--   container  -->
                        <div class="container ">
                            <!--   row  -->
                            <div class="row">
                                <!--   datails -->
                                <div class="col-md-12 col-sm-12 col-12 ">
                                    <div class="list-single-main-container ">
                              
   @if(Session::has('serverError'))
   <div class="alert-danger">{{Session::get('serverError')}} </div>
 @endif
                                        <div class="list-single-main-item fl-wrap" id="sec4">
                                            <div class="list-single-main-item-title fl-wrap">
                                                 @if(Session::has('serverError'))
   <div class="alert-danger">{{Session::get('serverError')}} </div>
 @endif
                                            @if(count($generaic_room) != 0)    <h3>Room Detail</h3> @endif
  <div class="ss1">                 
 









   <?php 
   if(count($generaic_room) != 0){
   
   if(@$generaic_room){
  $aray1=[];
  $arraytypes=[];  ?>
  <?php foreach (@$generaic_room as $key => $generaic_room) {
   if(count($aray1)==0){
  array_push($aray1,$generaic_room);
  array_push($arraytypes,$generaic_room->room_types);

   }else{
    if(!in_array($generaic_room->room_types, $arraytypes)){
      array_push($aray1,$generaic_room);
      array_push($arraytypes,$generaic_room->room_types);
      $cc=count($arraytypes);

   }
   }
  
}
    ?>
<?php foreach ($aray1 as $key => $generaic_room) {
             $arraysdata[]=$generaic_room->room_type_iid;
               } 

                ?>
         

           



<?php if($arraysdata[0]){



     $uniquedata1=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })
                     ->join('gallery', 'gallery.room_id', 'room.id')
                    ->select( 'hotel.id as hotel_id', 
                    'room.*',  'room.room_no', 'room.room_type_id as room_type_iid', 'room.id as room_iid', 'room.room_type_id', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid', 'hotel.image', 'hotel.Hotel_name', 'gallery.galleries')
                    ->where('hotel.id', $hot_idd)
                    ->where('room.room_type_id', $arraysdata[0])
                  
                    ->where('room.status', 0)
                    ->get();

            


                       ?>



 <form action="{{ route('next.final.details') }}" method="post" id="submit_idd" onChange="datesubmit();">
                           <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                            {{ csrf_field() }}
               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

               <thead>
    <tr class="table-hrader">
   <th class="first-col" scope="col">Room type</th>
  <td class="third-col"  scope="col">Today's price</td>
  <th class="fort-col" scope="col">Select Room</th>
    </tr>
  </thead>
  <tbody class="tbodies">
<tr>
  <th >
<p><u><?php echo $uniquedata1[0] ->room_types;?></u></p>
<?php  $roomtype_id=$uniquedata1[0]->room_type_iid; ?>
<?php  $hot_idd=$hot_idd;
?>
<?php
  $generaic_=DB::table('room')
                      ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                      ->join('hotel', function($join){
                       $join->on('hotel.id', '=', 'room.hotel_id');
                       })
                    
                      ->select('room.room_type_id')
                      ->where('hotel.id', $hot_idd)
                      ->where('room.status', 0)
                      ->where('room.room_type_id', $roomtype_id)
                      ->get();
                       $countedda=count($generaic_);
                       ?>
            <div class="left">Only <?php echo $countedda; ?> Room left!</div>
<h4>Popular Facilities</h4>


                  <?php  $uniquedata1[0]->room_type_iid; 
 $fascilities=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                   ->join('facilites', function($join){
                     $join->on('facilites.f_room_ty_id', '=', 'room_type.id');
                     })
           

                    ->select('facilites.room_facilties')
                    ->where('hotel.id', $hot_idd)
                    ->where('room.room_type_id', $arraysdata[0])
         
                    ->where('room.status', 0)
                    ->get();
         
 if(@$fascilities){
  $aray1=[];
  $arraytypes=[];  ?>
  <?php foreach (@$fascilities as $key => $fascilities) {
   if(count($aray1)==0){
  array_push($aray1,$fascilities);
  array_push($arraytypes,$fascilities->room_facilties);

   }else{
    if(!in_array($fascilities->room_facilties, $arraytypes)){
      array_push($aray1,$fascilities);
      array_push($arraytypes,$fascilities->room_facilties);
      $cc=count($arraytypes);

   }
   }

  
}  foreach ($aray1 as $key => $room_facilties) { ?>

   <div class="room_facilties"> <span> <span style="color:#febb02">*</span>&nbsp;&nbsp;<?php echo $room_facilties->room_facilties; ?></span></div>
<?php }} ?>
<br>
</th>
<div class="border-single">
 <th>
  <p>PKR:  <?php
         Session::put('prices', $uniquedata1[0]->price);
         echo  $generaic_price=$uniquedata1[0]->price;
        ?>   </p>
          <br>
        <small>No refundable</small>
        </th>
            <th>
              <div class="image-just">
                <div class="left-conted">
   <p>Select room and Price</p>
<select id="room_idd" name="room_id1"   onChange="js1function();" 
 class="dynamic chosen-select no-search-select" required="true">

  <?php 
  for($roomnum=1;  $roomnum <= $countedda; $roomnum++ ) {
   ?>
         <option value="<?php echo $roomnum ?>">   <?php echo $roomnum; ?></option>
         <?php 
       }
       ?>




</select>
</div>

<div class="bed-roomimg">
  <img src="{{asset('images/city')}}/{{$uniquedata1[0]->galleries}}">
</div>
</div>
<div class="input-price">

<input type="text" readonly id="txtvalue" class="innervalue" name="aftersumprice" value="" />
</div>



<input type="hidden" name="hot_iid" value="<?php echo $uniquedata1[0]->hotel_id?> ">
<input type="hidden" name="room_iid" value="<?php echo $uniquedata1[0]->room_iid?> ">
<input type="hidden" name="h_room_type" value="<?php echo $uniquedata1[0]->room_type_id;  ?>">



<input type="hidden"  name="single_room_price" value="<?php echo $uniquedata1[0]->price?>"/>
  </th>
      
      </tr>
      </tbody>
</table> 
</div>
<div class="row">
  <div class="col-md-6">
 <div class="reservation">
<input type="submit" id="submit_iid" class="form-contrl" value="Book Now">
</div> 
</div>
</div>
  </form>

<?php } ?>





<?php if(isset($arraysdata[1])){
 
     $uniquedata2=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                    ->select( 'hotel.id as hotel_id', 
                    'room.*',  'room.room_no', 'room.room_type_id as room_type_iid', 'room.id as room_iid', 'room.room_type_id', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid', 'hotel.image', 'hotel.Hotel_name')
                    ->where('hotel.id', $hot_idd)

                    ->where('room.room_type_id', $arraysdata[1])
      
                    ->where('room.status', 0)
                    ->get();

 

 ?>


 <form action="{{ route('next.final.details') }}" method="post">
                            <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                            {{ csrf_field() }}
               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

               <thead>
    <tr class="table-hrader">
   <th class="first-col" scope="col">Room type</th>
  <td class="third-col"  scope="col">Today's price</td>
  <th class="fort-col" scope="col">Select Room</th>
    </tr>
  </thead>
  <tbody class="tbodies">
<tr>
  <th >
<p><u><?php echo $uniquedata2[0] ->room_types;?></u></p>
<?php  $roomtype_id=$uniquedata2[0]->room_type_iid; ?>
<?php  $hot_idd=$hot_idd;
?>
<?php
  $generaic_=DB::table('room')
                      ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                      ->join('hotel', function($join){
                       $join->on('hotel.id', '=', 'room.hotel_id');
                       })
                    
                      ->select('room.room_type_id')
                      ->where('hotel.id', $hot_idd)
                      ->where('room.status', 0)
                      ->where('room.room_type_id', $roomtype_id)
                      ->get();
                       $countedda=count($generaic_);
                       ?>
            <div class="left">Only <?php echo $countedda; ?> Room left!</div>

                     <h4>Popular Facilities</h4>


                        <?php  $uniquedata1[0]->room_type_iid; 
 $fascilities=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                   ->join('facilites', function($join){
                     $join->on('facilites.f_room_ty_id', '=', 'room_type.id');
                     })
                     
                    ->select('facilites.room_facilties')
                    ->where('hotel.id', $hot_idd)
                    ->where('room.room_type_id', $arraysdata[1])
         
                    ->where('room.status', 0)
                    ->get();
         
 if(@$fascilities){
  $aray1=[];
  $arraytypes=[];  ?>
  <?php foreach (@$fascilities as $key => $fascilities) {
   if(count($aray1)==0){
  array_push($aray1,$fascilities);
  array_push($arraytypes,$fascilities->room_facilties);

   }else{
    if(!in_array($fascilities->room_facilties, $arraytypes)){
      array_push($aray1,$fascilities);
      array_push($arraytypes,$fascilities->room_facilties);
      $cc=count($arraytypes);

   }
   }

  
}  foreach ($aray1 as $key => $room_facilties) { ?>

   <div class="room_facilties"> <span> <span style="color:#febb02">*</span>&nbsp;&nbsp;<?php echo $room_facilties->room_facilties; ?></span></div>
<?php }} ?>
<br>
</th>
<div class="border-single">
 <th>
  <p>PKR:  <?php
         Session::put('prices1', $uniquedata2[0]->price);
         echo  $generaic_price=$uniquedata2[0]->price;
        ?>   </p>
          <br>
        <small>No refundable</small>
        </th>
            <th>
              <div class="image-just">
                <div class="left-conted">
   <p>Select room and Price</p>
<select id="room_iddss" name="room_id1" class=" dynamic chosen-select no-search-select" onChange="js1function1();" >
  <?php 
  for($roomnum=1;  $roomnum <= $countedda; $roomnum++ ) {
   ?>
         <option value="<?php echo $roomnum ?>">   <?php echo $roomnum; ?></option>
         <?php 
       }
       ?>




</select>
</div>

<div class="bed-roomimg">
  <img src="{{asset('images/city')}}/{{$uniquedata1[0]->galleries}}">
</div>
</div>
<div class="input-price">

<input type="text" class="json_value" id="txtvalue1" class="innervalue" name="aftersumprice" value="" />

</div>
<input type="hidden" name="hot_iid" value="<?php echo $uniquedata2[0]->hotel_id?> ">
<input type="hidden" name="room_iid" value="<?php echo $uniquedata2[0]->room_iid?> ">
<input type="hidden" name="h_room_type" value="<?php echo $uniquedata2[0]->room_type_id;  ?>">



<input type="hidden"  name="single_room_price" value="<?php echo $uniquedata2[0]->price?>"/>
  </th>
      
      </tr>
      </tbody>
</table> 
</div>
<div class="row">
  <div class="col-md-6">
 <div class="reservation">
<input type="submit" class="form-contrl" value="Book Now">
</div> 
</div>
</div>
  </form>
<?php     }?>










<?php if(isset($arraysdata[2])){
   
     $uniquedata3=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                    ->select( 'hotel.id as hotel_id', 
                    'room.*', 'room.room_no', 'room.room_type_id as room_type_iid', 'room.id as room_iid', 'room.room_type_id', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid', 'hotel.image', 'hotel.Hotel_name')
                    ->where('hotel.id', $hot_idd)

                    ->where('room.room_type_id', $arraysdata[2])
      
                    ->where('room.status', 0)
                    ->get();

 

 ?>


 <form action="{{ route('next.final.details') }}" method="post">
                       <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                            {{ csrf_field() }}
               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

               <thead>
    <tr class="table-hrader">
   <th class="first-col" scope="col">Room type</th>
  <td class="third-col"  scope="col">Today's price</td>
  <th class="fort-col" scope="col">Select Room</th>
    </tr>
  </thead>
  <tbody class="tbodies">
<tr>
  <th >
<p><u><?php echo $uniquedata3[0] ->room_types;?></u></p>
<?php  $roomtype_id=$uniquedata3[0]->room_type_iid; ?>
<?php  $hot_idd=$hot_idd;
?>
<?php
  $generaic_=DB::table('room')
                      ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                      ->join('hotel', function($join){
                       $join->on('hotel.id', '=', 'room.hotel_id');
                       })
                    
                      ->select('room.room_type_id')
                      ->where('hotel.id', $hot_idd)
                      ->where('room.status', 0)
                      ->where('room.room_type_id', $roomtype_id)
                      ->get();
                       $countedda=count($generaic_);
                       ?>
            <div class="left">Only <?php echo $countedda; ?> Room left!</div>
          <h4>Popular Facilities</h4>


                        <?php  $uniquedata1[0]->room_type_iid; 
 $fascilities=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                   ->join('facilites', function($join){
                     $join->on('facilites.f_room_ty_id', '=', 'room_type.id');
                     })
                     
                    ->select('facilites.room_facilties')
                    ->where('hotel.id', $hot_idd)
                    ->where('room.room_type_id', $arraysdata[2])
         
                    ->where('room.status', 0)
                    ->get();
         
 if(@$fascilities){
  $aray1=[];
  $arraytypes=[];  ?>
  <?php foreach (@$fascilities as $key => $fascilities) {
   if(count($aray1)==0){
  array_push($aray1,$fascilities);
  array_push($arraytypes,$fascilities->room_facilties);

   }else{
    if(!in_array($fascilities->room_facilties, $arraytypes)){
      array_push($aray1,$fascilities);
      array_push($arraytypes,$fascilities->room_facilties);
      $cc=count($arraytypes);

   }
   }

  
}  foreach ($aray1 as $key => $room_facilties) { ?>

   <div class="room_facilties"> <span> <span style="color:#febb02">*</span>&nbsp;&nbsp;<?php echo $room_facilties->room_facilties; ?></span></div>
<?php }} ?>
<br>
</th>
<div class="border-single">
 <th>
  <p>PKR:  <?php
         Session::put('prices2', $uniquedata3[0]->price);
         echo  $generaic_price=$uniquedata3[0]->price;
        ?>   </p>
          <br>
        <small>No refundable</small>
        </th>
            <th>
              <div class="image-just">
                <div class="left-conted">
   <p>Select room and Price</p>
<select id="room_idd2" name="room_id1" 
 class="  dynamic chosen-select no-search-select"
  onChange="js1function2();" >
  <?php 
  for($roomnum=1;  $roomnum <= $countedda; $roomnum++ ) {
   ?>
         <option value="<?php echo $roomnum ?>">   <?php echo $roomnum; ?></option>
         <?php 
       }
       ?>




</select>
</div>

<div class="bed-roomimg">
  <img src="{{asset('images/city')}}/{{$uniquedata1[0]->galleries}}">
</div>
</div>
<div class="input-price">

<input type="text" class="json_value" id="txtvalue2"  class="innervalue" name="aftersumprice" value="" />

</div>
<input type="hidden" name="hot_iid" value="<?php echo $uniquedata3[0]->hotel_id?> ">
<input type="hidden" name="room_iid" value="<?php echo $uniquedata3[0]->room_iid?> ">
<input type="hidden" name="h_room_type" value="<?php echo $uniquedata3[0]->room_type_id;  ?>">



<input type="hidden"  name="single_room_price" value="<?php echo $uniquedata3[0]->price?>"/>
  </th>
      
      </tr>
      </tbody>
</table> 
</div>
<div class="row">
  <div class="col-md-6">
 <div class="reservation">
<input type="submit" class="form-contrl" value="Book Now">
</div> 
</div>
</div> 
  </form>
<?php    }?>













<?php if(isset($arraysdata[3])){
     $uniquedata4=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                    ->select( 'hotel.id as hotel_id', 
                    'room.*',  'room.room_no', 'room.room_type_id as room_type_iid', 'room.id as room_iid', 'room.room_type_id', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid', 'hotel.image', 'hotel.Hotel_name')
                    ->where('hotel.id', $hot_idd)

                    ->where('room.room_type_id', $arraysdata[3])
      
                    ->where('room.status', 0)
                    ->get();

 

 ?>


 <form action="{{ route('next.final.details') }}" method="post">
                  <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                            {{ csrf_field() }}
               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

               <thead>
    <tr class="table-hrader">
   <th class="first-col" scope="col">Room type</th>
  <td class="third-col"  scope="col">Today's price</td>
  <th class="fort-col" scope="col">Select Room</th>
    </tr>
  </thead>
  <tbody class="tbodies">
<tr>
  <th >
<p><u><?php echo $uniquedata4[0] ->room_types;?></u></p>
<?php  $roomtype_id=$uniquedata4[0]->room_type_iid; ?>
<?php  $hot_idd=$hot_idd;
?>
<?php
  $generaic_=DB::table('room')
                      ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                      ->join('hotel', function($join){
                       $join->on('hotel.id', '=', 'room.hotel_id');
                       })
                    
                      ->select('room.room_type_id')
                      ->where('hotel.id', $hot_idd)
                      ->where('room.status', 0)
                      ->where('room.room_type_id', $roomtype_id)
                      ->get();
                       $countedda=count($generaic_);
                       ?>
            <div class="left">Only <?php echo $countedda; ?> Room left!</div>
        
                      <h4>Popular Facilities</h4>


                        <?php  $uniquedata1[0]->room_type_iid; 
 $fascilities=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                   ->join('facilites', function($join){
                     $join->on('facilites.f_room_ty_id', '=', 'room_type.id');
                     })
                     
                    ->select('facilites.room_facilties')
                    ->where('hotel.id', $hot_idd)
                    ->where('room.room_type_id', $arraysdata[3])
         
                    ->where('room.status', 0)
                    ->get();
         
 if(@$fascilities){
  $aray1=[];
  $arraytypes=[];  ?>
  <?php foreach (@$fascilities as $key => $fascilities) {
   if(count($aray1)==0){
  array_push($aray1,$fascilities);
  array_push($arraytypes,$fascilities->room_facilties);

   }else{
    if(!in_array($fascilities->room_facilties, $arraytypes)){
      array_push($aray1,$fascilities);
      array_push($arraytypes,$fascilities->room_facilties);
      $cc=count($arraytypes);

   }
   }

  
}  foreach ($aray1 as $key => $room_facilties) { ?>

   <div class="room_facilties"> <span> <span style="color:#febb02">*</span>&nbsp;&nbsp;<?php echo $room_facilties->room_facilties; ?></span></div>
<?php }} ?>
<br>
<br>
</th>
<div class="border-single">
 <th>
  <p>PKR:  <?php
         Session::put('prices3', $uniquedata4[0]->price);
         echo  $generaic_price=$uniquedata4[0]->price;
        ?>   </p>
          <br>
        <small>No refundable</small>
        </th>
            <th>
              <div class="image-just">
                <div class="left-conted">
   <p>Select room and Price</p>
<select id="room_idd3" name="room_id1" class="  dynamic chosen-select no-search-select" onChange="js1function3();" >
  <?php 
  for($roomnum=1;  $roomnum <= $countedda; $roomnum++ ) {
   ?>
         <option value="<?php echo $roomnum ?>">   <?php echo $roomnum; ?></option>
         <?php 
       }
       ?>




</select>
</div>

<div class="bed-roomimg">
  <img src="{{asset('images/city')}}/{{$uniquedata1[0]->galleries}}">
</div>
</div>
<div class="input-price"> 

<input type="text" class="json_value" id="txtvalue3" class="innervalue"  name="aftersumprice" value="" />
</div>

<input type="hidden" name="hot_iid" value="<?php echo $uniquedata4[0]->hotel_id?> ">
<input type="hidden" name="room_iid" value="<?php echo $uniquedata4[0]->room_iid?> ">
<input type="hidden" name="h_room_type" value="<?php echo $uniquedata4[0]->room_type_id;  ?>">



<input type="hidden"  name="single_room_price" value="<?php echo $uniquedata4[0]->price?>"/>
  </th>
      
      </tr>
      </tbody>
</table> 
</div>
 <div class="row">
  <div class="col-md-6">
 <div class="reservation">
<input type="submit" class="form-contrl" value="Book Now">
</div> 
</div>
</div>
  </form>
<?php    }?>









<?php if(isset($arraysdata[4])){
     $uniquedata5=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                    ->select( 'hotel.id as hotel_id', 
                    'room.*',  'room.room_no', 'room.room_type_id as room_type_iid', 'room.id as room_iid', 'room.room_type_id', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid', 'hotel.image', 'hotel.Hotel_name')
                    ->where('hotel.id', $hot_idd)

                    ->where('room.room_type_id', $arraysdata[4])
      
                    ->where('room.status', 0)
                    ->get();

 

 ?>


 <form action="{{ route('next.final.details') }}" method="post">
                         <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                            {{ csrf_field() }}
               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

               <thead>
    <tr class="table-hrader">
   <th class="first-col" scope="col">Room type</th>
  <td class="third-col"  scope="col">Today's price</td>
  <th class="fort-col" scope="col">Select Room</th>
    </tr>
  </thead>
  <tbody class="tbodies">
<tr>
  <th >
<p><u><?php echo $uniquedata5[0] ->room_types;?></u></p>
<?php  $roomtype_id=$uniquedata5[0]->room_type_iid; ?>
<?php  $hot_idd=$hot_idd;
?>
<?php
  $generaic_=DB::table('room')
                      ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                      ->join('hotel', function($join){
                       $join->on('hotel.id', '=', 'room.hotel_id');
                       })
                    
                      ->select('room.room_type_id')
                      ->where('hotel.id', $hot_idd)
                      ->where('room.status', 0)
                      ->where('room.room_type_id', $roomtype_id)
                      ->get();
                       $countedda=count($generaic_);
                       ?>
            <div class="left">Only <?php echo $countedda; ?> Room left!</div>
         <h4>Popular Facilities</h4>


                        <?php  $uniquedata1[0]->room_type_iid; 
 $fascilities=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                   ->join('facilites', function($join){
                     $join->on('facilites.f_room_ty_id', '=', 'room_type.id');
                     })
                     
                    ->select('facilites.room_facilties')
                    ->where('hotel.id', $hot_idd)
                    ->where('room.room_type_id', $arraysdata[4])
         
                    ->where('room.status', 0)
                    ->get();
         
 if(@$fascilities){
  $aray1=[];
  $arraytypes=[];  ?>
  <?php foreach (@$fascilities as $key => $fascilities) {
   if(count($aray1)==0){
  array_push($aray1,$fascilities);
  array_push($arraytypes,$fascilities->room_facilties);

   }else{
    if(!in_array($fascilities->room_facilties, $arraytypes)){
      array_push($aray1,$fascilities);
      array_push($arraytypes,$fascilities->room_facilties);
      $cc=count($arraytypes);

   }
   }

  
}  foreach ($aray1 as $key => $room_facilties) { ?>

   <div class="room_facilties"> <span> <span style="color:#febb02">*</span>&nbsp;&nbsp;<?php echo $room_facilties->room_facilties; ?></span></div>
<?php }} ?>
<br>
</th>
<div class="border-single">
 <th>
  <p>PKR:  <?php
         Session::put('prices4', $uniquedata4[0]->price);
         echo  $generaic_price=$uniquedata4[0]->price;
        ?>   </p>
          <br>
        <small>No refundable</small>
        </th>
            <th>
              <div class="image-just">
                <div class="left-conted">
   <p>Select room and Price</p>
<select id="room_idd4" name="room_id1"  class="  dynamic chosen-select no-search-select" onChange="js1function4();" >
  <?php 
  for($roomnum=1;  $roomnum <= $countedda; $roomnum++ ) {
   ?>
         <option value="<?php echo $roomnum ?>">   <?php echo $roomnum; ?></option>
         <?php 
       }
       ?>




</select>
</div>

<div class="bed-roomimg">
  <img src="{{asset('images/city')}}/{{$uniquedata1[0]->galleries}}">
</div>
</div>
<div class="input-price">

<input type="text" class="json_value" id="txtvalue4" class="innervalue"  name="aftersumprice" value="" />
</div>

<input type="hidden" name="hot_iid" value="<?php echo $uniquedata5[0]->hotel_id?> ">
<input type="hidden" name="room_iid" value="<?php echo $uniquedata5[0]->room_iid?> ">
<input type="hidden" name="h_room_type" value="<?php echo $uniquedata5[0]->room_type_id;  ?>">



<input type="hidden"  name="single_room_price" value="<?php echo $uniquedata5[0]->price?>"/>
  </th>
      
      </tr>
      </tbody>
</table> 
</div>
 <div class="row">
  <div class="col-md-6">
 <div class="reservation">
<input type="submit" class="form-contrl" value="Book Now">
</div> 
</div>
</div>
  </form>
<?php     }?>











<?php if(isset($arraysdata[5])){
     $uniquedata6=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                    ->select( 'hotel.id as hotel_id', 
                    'room.*',  'room.room_no', 'room.room_type_id as room_type_iid', 'room.id as room_iid', 'room.room_type_id', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid', 'hotel.image', 'hotel.Hotel_name')
                    ->where('hotel.id', $hot_idd)

                    ->where('room.room_type_id', $arraysdata[5])
      
                    ->where('room.status', 0)
                    ->get();

 

 ?>


 <form action="{{ route('next.final.details') }}" method="post">
                         <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                            {{ csrf_field() }}
               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

               <thead>
    <tr class="table-hrader">
   <th class="first-col" scope="col">Room type</th>
  <td class="third-col"  scope="col">Today's price</td>
  <th class="fort-col" scope="col">Select Room</th>
    </tr>
  </thead>
  <tbody class="tbodies">
<tr>
  <th >
<p><u><?php echo $uniquedata6[0] ->room_types;?></u></p>
<?php  $roomtype_id=$uniquedata6[0]->room_type_iid; ?>
<?php  $hot_idd=$hot_idd;
?>
<?php
  $generaic_=DB::table('room')
                      ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                      ->join('hotel', function($join){
                       $join->on('hotel.id', '=', 'room.hotel_id');
                       })
                    
                      ->select('room.room_type_id')
                      ->where('hotel.id', $hot_idd)
                      ->where('room.status', 0)
                      ->where('room.room_type_id', $roomtype_id)
                      ->get();
                       $countedda=count($generaic_);
                       ?>
            <div class="left">Only <?php echo $countedda; ?> Room left!</div>
         
                       <h4>Popular Facilities</h4>


                        <?php  $uniquedata1[0]->room_type_iid; 
 $fascilities=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                   ->join('facilites', function($join){
                     $join->on('facilites.f_room_ty_id', '=', 'room_type.id');
                     })
                     
                    ->select('facilites.room_facilties')
                    ->where('hotel.id', $hot_idd)
                    ->where('room.room_type_id', $arraysdata[5])
         
                    ->where('room.status', 0)
                    ->get();
         
 if(@$fascilities){
  $aray1=[];
  $arraytypes=[];  ?>
  <?php foreach (@$fascilities as $key => $fascilities) {
   if(count($aray1)==0){
  array_push($aray1,$fascilities);
  array_push($arraytypes,$fascilities->room_facilties);

   }else{
    if(!in_array($fascilities->room_facilties, $arraytypes)){
      array_push($aray1,$fascilities);
      array_push($arraytypes,$fascilities->room_facilties);
      $cc=count($arraytypes);

   }
   }

  
}  foreach ($aray1 as $key => $room_facilties) { ?>

   <div class="room_facilties"> <span> <span style="color:#febb02">*</span>&nbsp;&nbsp;<?php echo $room_facilties->room_facilties; ?></span></div>
<?php }} ?>
<br>
</th>
<div class="border-single">
 <th>
  <p>PKR:  <?php
         Session::put('prices5', $uniquedata6[0]->price);
         echo  $generaic_price=$uniquedata6[0]->price;
        ?>   </p>
          <br>
        <small>No refundable</small>
        </th>
            <th>
              <div class="image-just">
                <div class="left-conted">
   <p>Select room and Price</p>
<select id="room_idd5" name="room_id1" class=" dynamic chosen-select no-search-select" onChange="js1function5();" >
  <?php 
  for($roomnum=1;  $roomnum <= $countedda; $roomnum++ ) {
   ?>
         <option value="<?php echo $roomnum ?>">   <?php echo $roomnum; ?></option>
         <?php 
       }
       ?>




</select>
</div>

<div class="bed-roomimg">
  <img src="{{asset('images/city')}}/{{$uniquedata1[0]->galleries}}">
</div>
</div>
<div class="input-price"> 

<input type="text" class="json_value" id="txtvalue5" class="innervalue"  name="aftersumprice" value="" />
</div>

<input type="hidden" name="hot_iid" value="<?php echo $uniquedata6[0]->hotel_id?> ">
<input type="hidden" name="room_iid" value="<?php echo $uniquedata6[0]->room_iid?> ">
<input type="hidden" name="h_room_type" value="<?php echo $uniquedata6[0]->room_type_id;  ?>">



<input type="hidden"  name="single_room_price" value="<?php echo $uniquedata6[0]->price?>"/>
  </th>
      
      </tr>
      </tbody>
</table> 
</div>
<div class="row">
  <div class="col-md-6">
 <div class="reservation">
<input type="submit" class="form-contrl" value="Book Now">
</div> 
</div>
</div>
  </form>
<?php    }?>






<?php if(isset($arraysdata[6])){
     $uniquedata7=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                    ->select( 'hotel.id as hotel_id', 
                    'room.*',  'room.room_no', 'room.room_type_id as room_type_iid', 'room.id as room_iid', 'room.room_type_id', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid', 'hotel.image', 'hotel.Hotel_name')
                    ->where('hotel.id', $hot_idd)

                    ->where('room.room_type_id', $arraysdata[6])
      
                    ->where('room.status', 0)
                    ->get();

 

 ?>


 <form action="{{ route('next.final.details') }}" method="post">
                        <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                            {{ csrf_field() }}
               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

               <thead>
    <tr class="table-hrader">
   <th class="first-col" scope="col">Room type</th>
  <td class="third-col"  scope="col">Today's price</td>
  <th class="fort-col" scope="col">Select Room</th>
    </tr>
  </thead>
  <tbody class="tbodies">
<tr>
  <th >
<p><u><?php echo $uniquedata7[0] ->room_types;?></u></p>
<?php  $roomtype_id=$uniquedata7[0]->room_type_iid; ?>
<?php  $hot_idd=$hot_idd;
?>
<?php
  $generaic_=DB::table('room')
                      ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                      ->join('hotel', function($join){
                       $join->on('hotel.id', '=', 'room.hotel_id');
                       })
                    
                      ->select('room.room_type_id')
                      ->where('hotel.id', $hot_idd)
                      ->where('room.status', 0)
                      ->where('room.room_type_id', $roomtype_id)
                      ->get();
                       $countedda=count($generaic_);
                       ?>
            <div class="left">Only <?php echo $countedda; ?> Room left!</div>
         
                      <h4>Popular Facilities</h4>


                        <?php  $uniquedata1[0]->room_type_iid; 
 $fascilities=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                   ->join('facilites', function($join){
                     $join->on('facilites.f_room_ty_id', '=', 'room_type.id');
                     })
                     
                    ->select('facilites.room_facilties')
                    ->where('hotel.id', $hot_idd)
                    ->where('room.room_type_id', $arraysdata[6])
         
                    ->where('room.status', 0)
                    ->get();
         
 if(@$fascilities){
  $aray1=[];
  $arraytypes=[];  ?>
  <?php foreach (@$fascilities as $key => $fascilities) {
   if(count($aray1)==0){
  array_push($aray1,$fascilities);
  array_push($arraytypes,$fascilities->room_facilties);

   }else{
    if(!in_array($fascilities->room_facilties, $arraytypes)){
      array_push($aray1,$fascilities);
      array_push($arraytypes,$fascilities->room_facilties);
      $cc=count($arraytypes);

   }
   }

  
}  foreach ($aray1 as $key => $room_facilties) { ?>

   <div class="room_facilties"> <span> <span style="color:#febb02">*</span>&nbsp;&nbsp;<?php echo $room_facilties->room_facilties; ?></span></div>
<?php }} ?>
<br>
</th>
<div class="border-single">
 <th>
  <p>PKR:  <?php
         Session::put('prices6', $uniquedata7[0]->price);
         echo  $generaic_price=$uniquedata7[0]->price;
        ?>   </p>
          <br>
        <small>No refundable</small>
        </th>
            <th>
              <div class="image-just">
                <div class="left-conted">
   <p>Select room and Price</p>
<select id="room_idd6" name="room_id1"  class="  dynamic chosen-select no-search-select" onChange="js1function6();" >
  <?php 
  for($roomnum=1;  $roomnum <= $countedda; $roomnum++ ) {
   ?>
         <option value="<?php echo $roomnum ?>">   <?php echo $roomnum; ?></option>
         <?php 
       }
       ?>




</select>
</div>

<div class="bed-roomimg">
  <img src="{{asset('images/city')}}/{{$uniquedata1[0]->galleries}}">
</div>
</div>
<div class="input-price">

<input type="text" class="json_value" id="txtvalue6" class="innervalue"  name="aftersumprice" value="" />
</div>

<input type="hidden" name="hot_iid" value="<?php echo $uniquedata7[0]->hotel_id?> ">
<input type="hidden" name="room_iid" value="<?php echo $uniquedata7[0]->room_iid?> ">
<input type="hidden" name="h_room_type" value="<?php echo $uniquedata7[0]->room_type_id;  ?>">



<input type="hidden"  name="single_room_price" value="<?php echo $uniquedata7[0]->price?>"/>
  </th>
      
      </tr>
      </tbody>
</table> 
</div>
<div class="row">
  <div class="col-md-6">
 <div class="reservation">
<input type="submit" class="form-contrl" value="Book Now">
</div> 
</div>
</div>
  </form>
<?php     }?>





<?php if(isset($arraysdata[7])){
     $uniquedata8=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                    ->select( 'hotel.id as hotel_id', 
                    'room.*',  'room.room_no', 'room.room_type_id as room_type_iid', 'room.id as room_iid', 'room.room_type_id', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid', 'hotel.image', 'hotel.Hotel_name')
                    ->where('hotel.id', $hot_idd)

                    ->where('room.room_type_id', $arraysdata[7])
      
                    ->where('room.status', 0)
                    ->get();

 

 ?>


 <form action="{{ route('next.final.details') }}" method="post">
                         <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                            {{ csrf_field() }}
               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

               <thead>
    <tr class="table-hrader">
   <th class="first-col" scope="col">Room type</th>
  <td class="third-col"  scope="col">Today's price</td>
  <th class="fort-col" scope="col">Select Room</th>
    </tr>
  </thead>
  <tbody class="tbodies">
<tr>
  <th >
<p><u><?php echo $uniquedata8[0] ->room_types;?></u></p>
<?php  $roomtype_id=$uniquedata8[0]->room_type_iid; ?>
<?php  $hot_idd=$hot_idd;
?>
<?php
  $generaic_=DB::table('room')
                      ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                      ->join('hotel', function($join){
                       $join->on('hotel.id', '=', 'room.hotel_id');
                       })
                    
                      ->select('room.room_type_id')
                      ->where('hotel.id', $hot_idd)
                      ->where('room.status', 0)
                      ->where('room.room_type_id', $roomtype_id)
                      ->get();
                       $countedda=count($generaic_);
                       ?>
            <div class="left">Only <?php echo $countedda; ?> Room left!</div>
        
                        <h4>Popular Facilities</h4>


                        <?php  $uniquedata1[0]->room_type_iid; 
 $fascilities=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                   ->join('facilites', function($join){
                     $join->on('facilites.f_room_ty_id', '=', 'room_type.id');
                     })
                     
                    ->select('facilites.room_facilties')
                    ->where('hotel.id', $hot_idd)
                    ->where('room.room_type_id', $arraysdata[7])
         
                    ->where('room.status', 0)
                    ->get();
         
 if(@$fascilities){
  $aray1=[];
  $arraytypes=[];  ?>
  <?php foreach (@$fascilities as $key => $fascilities) {
   if(count($aray1)==0){
  array_push($aray1,$fascilities);
  array_push($arraytypes,$fascilities->room_facilties);

   }else{
    if(!in_array($fascilities->room_facilties, $arraytypes)){
      array_push($aray1,$fascilities);
      array_push($arraytypes,$fascilities->room_facilties);
      $cc=count($arraytypes);

   }
   }

  
}  foreach ($aray1 as $key => $room_facilties) { ?>

   <div class="room_facilties"> <span> <span style="color:#febb02">*</span>&nbsp;&nbsp;<?php echo $room_facilties->room_facilties; ?></span></div>
<?php }} ?>
<br>
<br>
</th>
<div class="border-single">
 <th>
  <p>PKR:  <?php
         Session::put('prices7', $uniquedata8[0]->price);
         echo  $generaic_price=$uniquedata8[0]->price;
        ?>   </p>
          <br>
        <small>No refundable</small>
        </th>
            <th>
              <div class="image-just">
                <div class="left-conted">
   <p>Select room and Price</p>
<select id="room_idd7" name="room_id1"class=" dynamic chosen-select no-search-select" onChange="js1function7();" >
  <?php 
  for($roomnum=1;  $roomnum <= $countedda; $roomnum++ ) {
   ?>
         <option value="<?php echo $roomnum ?>">   <?php echo $roomnum; ?></option>
         <?php 
       }
       ?>




</select>
</div>

<div class="bed-roomimg">
  <img src="{{asset('images/city')}}/{{$uniquedata1[0]->galleries}}">
</div>
</div>
<div class="input-price">

<input type="text" class="json_value" id="txtvalue7" class="innervalue"  name="aftersumprice" value="" />
</div>

<input type="hidden" name="hot_iid" value="<?php echo $uniquedata8[0]->hotel_id?> ">
<input type="hidden" name="room_iid" value="<?php echo $uniquedata8[0]->room_iid?> ">
<input type="hidden" name="h_room_type" value="<?php echo $uniquedata8[0]->room_type_id;  ?>">



<input type="hidden"  name="single_room_price" value="<?php echo $uniquedata8[0]->price?>"/>
  </th>
      
      </tr>
      </tbody>
</table> 
</div>
 <div class="row">
  <div class="col-md-6">
 <div class="reservation">
<input type="submit" class="form-contrl" value="Book Now">
</div> 
</div>
</div> 
  </form>
<?php   }?>

<?php if(isset($arraysdata[8])){
     $uniquedata9=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                    ->select( 'hotel.id as hotel_id', 
                    'room.*',  'room.room_no', 'room.room_type_id as room_type_iid', 'room.id as room_iid', 'room.room_type_id', 
                    'room_type.room_types', 'room_type.price','room_type.id as room_type_iid', 'hotel.image', 'hotel.Hotel_name')
                    ->where('hotel.id', $hot_idd)

                    ->where('room.room_type_id', $arraysdata[8])
      
                    ->where('room.status', 0)
                    ->get();

 

 ?>


 <form action="{{ route('next.final.details') }}" method="post">
                        <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                            {{ csrf_field() }}
               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

               <thead>
    <tr class="table-hrader">
   <th class="first-col" scope="col">Room type</th>
  <td class="third-col"  scope="col">Today's price</td>
  <th class="fort-col" scope="col">Select Room</th>
    </tr>
  </thead>
  <tbody class="tbodies">
<tr>
  <th >
<p><u><?php echo $uniquedata9[0] ->room_types;?></u></p>
<?php  $roomtype_id=$uniquedata9[0]->room_type_iid; ?>
<?php  $hot_idd=$hot_idd;
?>
<?php
  $generaic_=DB::table('room')
                      ->join('room_type', 'room_type.id', '=', 'room.room_type_id')
                      ->join('hotel', function($join){
                       $join->on('hotel.id', '=', 'room.hotel_id');
                       })
                    
                      ->select('room.room_type_id')
                      ->where('hotel.id', $hot_idd)
                      ->where('room.status', 0)
                      ->where('room.room_type_id', $roomtype_id)
                      ->get();
                       $countedda=count($generaic_);
                       ?>
            <div class="left">Only <?php echo $countedda; ?> Room left!</div>
          <h4>Popular Facilities</h4>


                        <?php  $uniquedata1[0]->room_type_iid; 
 $fascilities=DB::table('room')
                    ->join('room_type', 'room_type.id', '=', 'room.room_type_id')

                    ->join('hotel', function($join){
                     $join->on('hotel.id', '=', 'room.hotel_id');
                     })

                   ->join('facilites', function($join){
                     $join->on('facilites.f_room_ty_id', '=', 'room_type.id');
                     })
                     
                    ->select('facilites.room_facilties')
                    ->where('hotel.id', $hot_idd)
                    ->where('room.room_type_id', $arraysdata[8])
         
                    ->where('room.status', 0)
                    ->get();
         
 if(@$fascilities){
  $aray1=[];
  $arraytypes=[];  ?>
  <?php foreach (@$fascilities as $key => $fascilities) {
   if(count($aray1)==0){
  array_push($aray1,$fascilities);
  array_push($arraytypes,$fascilities->room_facilties);

   }else{
    if(!in_array($fascilities->room_facilties, $arraytypes)){
      array_push($aray1,$fascilities);
      array_push($arraytypes,$fascilities->room_facilties);
      $cc=count($arraytypes);

   }
   }

  
}  foreach ($aray1 as $key => $room_facilties) { ?>

   <div class="room_facilties"> <span> <span style="color:#febb02">*</span>&nbsp;&nbsp;<?php echo $room_facilties->room_facilties; ?></span></div>
<?php }} ?>
<br>
</th>
<div class="border-single">
 <th>
  <p>PKR:  <?php
         Session::put('prices8', $uniquedata9[0]->price);
         echo  $generaic_price=$uniquedata9[0]->price;
        ?>   </p>
          <br>
        <small>No refundable</small>
        </th>
            <th>
              <div class="image-just">
                <div class="left-conted">
   <p>Select room and Price</p>
<select id="room_idd8" name="room_id1" class="  dynamic chosen-select no-search-select" onChange="js1function8();" >
  <?php 
  for($roomnum=1;  $roomnum <= $countedda; $roomnum++ ) {
   ?>
         <option value="<?php echo $roomnum ?>">   <?php echo $roomnum; ?></option>
         <?php 
       }
       ?>




</select>
</div>

<div class="bed-roomimg">
  <img src="{{asset('images/city')}}/{{$uniquedata1[0]->galleries}}">
</div>
</div>
<div class="input-price">
<input type="text" id="txtvalue8" class="json_value" class="innervalue" name="aftersumprice" value="" />
</div>

<input type="hidden" name="hot_iid" value="<?php echo $uniquedata9[0]->hotel_id?> ">
<input type="hidden" name="room_iid" value="<?php echo $uniquedata9[0]->room_iid?> ">
<input type="hidden" name="h_room_type" value="<?php echo $uniquedata9[0]->room_type_id;  ?>">



<input type="hidden"  name="single_room_price" value="<?php echo $uniquedata9[0]->price?>"/>
  </th>
      
      </tr>
      </tbody>
</table> 
</div>
 <div class="row">
  <div class="col-md-6">
 <div class="reservation">
<input type="submit" class="form-contrl" value="Book Now">
</div> 
</div>
</div>
  </form>
<?php   }  }}else{?>
 <div class="return-home">
     <h4> &nbsp; Sorry No Room available.Please Try Again</h4>
     <a href="https://dailygilgitbaltistan.com/tours.pk/public/" class="listing-counter">Return Home</a>
 </div>

<?php } ?>




             








 </div>
   </div>


  </div>
  

  </div>
  
      </div>
              
             
      <!--   datails end  -->
       <div class="col-lg-4 col-md-12 col-sm-12 col-md-offset-1  ">

                                   </div>
                                    <!--box-widget-wrap end -->  
                                </div>
                                <!--   sidebar end  -->
                            </div>
                          </div>
                       
                      
                        <!--   container  end  -->
                    </section>
 



                    <!--  section  end-->
                </div>
                <!-- content end-->
                <div class="limit-box fl-wrap"></div>
            </div>
 

            <style type="text/css">

.btn-button{
    width: 150px;
    }
            </style>
            <!--wrapper end -->
        @endsection

@section('footer')
@include('User.layout.footer')
@endsection

<script>

$('#room_idd').change(function(){

var id = $(this).val();  

       $.ajax({
            url: baseUrl+"/ /", 
            method: "POST",  
            data:{id:id},  
            success:function(data){
                 $('#show_cities').html(data);  
           }  

       });  

  });  

 function datesubmit(){
  
             var txtdates=document.getElementById("submit_idd");
   
       document.getElementById("txtdates").value=displaydate;
      
 }

function js1function(){
       var d=document.getElementById("room_idd");
       var displaytaxt=d.options[d.selectedIndex].text;
      <?php $price_room=Session::get('prices'); ?>
       var php_variables= <?php echo json_encode($price_room); ?>;
       document.getElementById("txtvalue").value=displaytaxt  *php_variables;
        }








function js1function3(){
       var d=document.getElementById("room_idd3");
       var displaytaxt=d.options[d.selectedIndex].text;
      <?php $price_room3=Session::get('prices3'); ?>
       var php_variables3= <?php echo json_encode($price_room3); ?>;
       document.getElementById("txtvalue3").value=displaytaxt  *php_variables3;
        }



function js1function4(){
       var d=document.getElementById("room_idd4");
       var displaytaxt=d.options[d.selectedIndex].text;
      <?php $price_room4=Session::get('prices4'); ?>
       var php_variables4= <?php echo json_encode($price_room4); ?>;
       document.getElementById("txtvalue4").value=displaytaxt  *php_variables4;
        }



function js1function5(){
       var d=document.getElementById("room_idd5");
       var displaytaxt=d.options[d.selectedIndex].text;
      <?php $price_room5=Session::get('prices5'); ?>
       var php_variables5= <?php echo json_encode($price_room5); ?>;
       document.getElementById("txtvalue5").value=displaytaxt  *php_variables5;
        }



function js1function6(){
       var d=document.getElementById("room_idd6");
       var displaytaxt=d.options[d.selectedIndex].text;
      <?php $price_room6=Session::get('prices6'); ?>
       var php_variables6= <?php echo json_encode($price_room6); ?>;
       document.getElementById("txtvalue6").value=displaytaxt  *php_variables6;
        }

        function js1function7(){
       var d=document.getElementById("room_idd7");
       var displaytaxt=d.options[d.selectedIndex].text;
      <?php $price_room7=Session::get('prices7'); ?>
       var php_variables7= <?php echo json_encode($price_room7); ?>;
       document.getElementById("txtvalue7").value=displaytaxt  *php_variables7;
        }



        function js1function8(){
       var d=document.getElementById("room_idd8");
       var displaytaxt=d.options[d.selectedIndex].text;
      <?php $price_room8=Session::get('prices8'); ?>
       var php_variables8= <?php echo json_encode($price_room8); ?>;
       document.getElementById("txtvalue8").value=displaytaxt  *php_variables8;
        }



  </script>
  <script>

function js1function1(){
      
       var dd=document.getElementById("room_iddss");
     var displaytaxt1=dd.options[dd.selectedIndex].text;
     <?php $price_room1=Session::get('prices1');   ?>
       var php_variables1= <?php echo json_encode($price_room1); ?>;
       document.getElementById("txtvalue1").value=displaytaxt1  *php_variables1;
        }


  </script>
  <script>

function js1function2(){
       var d=document.getElementById("room_idd2");
       var displaytaxt=d.options[d.selectedIndex].text;


      <?php $price_room2=Session::get('prices2'); ?>
       var php_variables2= <?php echo json_encode($price_room2); ?>;
       document.getElementById("txtvalue2").value=displaytaxt  *php_variables2;
        }

</script>

  <style>
section.dynamic-room { padding: 11px 0 0 10px; }

.gallery-room-img {
    padding: 15px 0 0 5%;
}

.gallery-room-img img {
    height: 50%;
    cursor: pointer;
}

@media(max-width:500px){
.gallery-room-img {
    padding: 5% 0 0 0 !important;
}
.gallery-room-img img {
    height: auto;
    padding: 10px 0 0 0 !important;
}


  .bed-roomimg img {
    width: 100% !important;
    transform: translateY(12px) !important;
    height: 102px !important;
    padding-left: 1px !important;

}
.image-just{
  display:grid !important;
}
}
.bed-roomimg img{
     width: 50%;
    transform: translateY(-50px);
    height: 163px;
    padding-left: 40px;
}
.return-home {
    margin-bottom: 60px;
}

  </style>
