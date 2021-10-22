  

@extends('User.site.layout')
@section('content')
@include('User.layout.header')
<style>
.reg-img {
    height:240px !important;
}
    
</style>
 <section id="registered-hotel">
     <div class="waperr-registered-hotel">
         <div class="container">
             <h3 class="text-center"> Registered Hotel</h3>
             <div class="row">
             
              @foreach($reg_hotel as $regHotels)
              <div class="col-md-3 col-12">
             <div class="card" style="width: 18rem;">
  <img src="images/city/{{$regHotels->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$regHotels->Hotel_name}}</h5>
    <p class="card-text">Address: &nbsp; {{$regHotels->address}}</p>
  </div>
   <ul class="list-group list-group-flush">
    <li class="list-group-item">Contact: &nbsp; {{$regHotels->contact}}</li>
    
  </ul>
  <button type="button" class="btn btn-primary registered-hotel" data-toggle="modal" data-target="#exampleModal">
         View Detail
</button>
 
</div>
</div>

@endforeach
  </div>
             <!--<h4 class="text-center my-5">Registered Hotels</h4>-->
             <!--<div classs="row reg-hotel" >-->
             <!--    @foreach($reg_hotel as $regHotels)-->
                 
             <!--    <div class="col-md-4 col-sm-12 col-xs-12" style="padding-top:20px">-->
             <!--        <h5>{{$regHotels->Hotel_name}}</h5>-->
             <!--        <img  class="reg-img" src="images/city/{{$regHotels->image}}" alt="Red sun"/>-->
             <!--        <h6>Adress: &nbsp;{{$regHotels->address}}</h6>-->
             <!--         <h6>Contact: &nbsp;{{$regHotels->contact}}</h6>-->
                    
             <!--    </div>-->
             <!--    @endforeach-->
             <!--</div>-->
         </div>
     </div>
 </section>
 <style>
 
 img.card-img-top {
    height: 200px !important;
}

 button.registered-hotel {
    width: 50%;
    height: 50%;
    margin: 10px;
    display: block;
    margin-right: auto;
    margin-left: auto;
    cursor: pointer;
    cursor: pointer;
    background: #ff6207;
    color: white;
    font-weight: bold;
    border: 1px solid red;
}
  .waperr-registered-hotel {
    padding-top: 100px !important;
}
.card {
    margin: 0 auto;
    float: none;
    margin-bottom: 10px;
}
 </style>
 @endsection
@section('footer')
@include('User.layout.footer')
@endsection