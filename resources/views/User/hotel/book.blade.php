@extends('User.site.layout')
 @section('content')

 @include('User.layout.header')

<section id="wrapper-hotel-listing">
  <div class="wrapper-listings">
    <div class="div-fluids">
      
      <div class=" inner-listing-hotel">
  
          <div class="bookin-forms">
          <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
        </div>
<div class="wrapper-fields">
  <br>
 <h6 style="text-align:center; color:red"> <?php echo @$Msg; ?></h6>
 <br>

<div class="s-hotel">: &nbsp;<strong style="color:green"></strong> properties found </div>
         <div class="outer-div">
        <div class="full-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
             <img src="">
           </div>
          
          <div class="col-md-8 ">
            <div class="inner-heading">
            <h6></h6>
            <p>Hotel Dewanekhas Skardu has a restaurant, free bikes, a shared lounge and garden in Skardu. Boasting family rooms, this property also provides guests with a terrace. <p>
            <h5>Execptional </h5>
            <p>11 Reviews</p>

            <a href="">Choose Your Room</a>
        </div>
         </div>
        </div>
      </div>
      </div>
    </div>
    


  </div>


  </div>
</div>
</section>
 
    


        @endsection

@section('footer')
@include('User.layout.footer')
@endsection