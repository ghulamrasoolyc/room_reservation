  
@extends('User.site.layout')
 @section('content')

 @include('User.layout.header')
<section id="wrapper-hotel-listing">
  <div class="wrapper-listings"  >
    <div class="div-fluids">
      <div class="container">
        <div class="hotel-lls">
        <h4>Hotel List </h4>
        </div>
     
            
   
            <?php if($singleHotel){
             $aray1=[];
            $arraytypes=[];  ?>
             <?php foreach (@$singleHotel as $key => $singleHotel) {
             if(count($aray1)==0){
              array_push($aray1,$singleHotel);
              array_push($arraytypes,$singleHotel->Hotel_name);
               }else
               {
               if(!in_array($singleHotel->Hotel_name, $arraytypes)){
               array_push($aray1,$singleHotel);
               array_push($arraytypes,$singleHotel->Hotel_name);
               $cc=count($arraytypes);

                }
                }
 
                }
               ?>
        
          @foreach ( $aray1 as $key => $singleHotel)
          <div class="book-hotel-city">
            @if(session()->has('message.level'))
            <div class="alert alert-{{ session('message.level') }}"> 
            {!! session('message.content') !!}
               </div>
             @endif
        
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="left-points">
                  <img src="{{asset('images/city')}}/<?php echo $singleHotel->image; ?>">
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="right-points">
                  <h5>Hotel name: {{$singleHotel->Hotel_name}}</h5>
                  <p>Place Name: {{$singleHotel->address}}</p>
                  <p>City: {{$singleHotel->city_name}}</p>
                  <p>City: {{$singleHotel->contact}}</p>
                  
                </div>
                <div class="booking-btn">
                  <a href="{{route('find.hotel',['id'=>$singleHotel->id])}}">View detail</a>
                </div>
              </div>

              <div class="clearfix"></div>
            </div>
            </div>
          @endforeach
       <?php } ?>
  <div class="back-home-to">
    <a href="{{route('home')}}">Back</a>
  </div>
      </div>
  


  </div>
</div>
</section>
 



        @endsection

@section('footer')
@include('User.layout.footer')
@endsection