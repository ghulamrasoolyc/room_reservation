
@extends('User.site.layout')
 @section('content')

 @include('User.layout.header')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>

<h2>Responsive Checkout Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p>
<div class="row booking-form-row">
  <div class="col-75">
    <div class="container booking-form-container">
      <form action="{{route('room_bookin_detail')}}" method="post">
             {{csrf_field()}}
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
             <input type="text"  name="fname" placeholder="User name" required="true">

            <label for="adr"><i class="fa fa-address-card-o"></i> Email</label>
            <input type="text" id="adr" name="email" placeholder="youremail@gmail.com"required="true">

            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street"  required="true">


            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text"  name="city" placeholder="New York"  required="true">
  <label for="city"><i class="fa fa-institution"></i> Phone</label>
            <input type="text"  name="phone" placeholder="phone"  required="true">

      <label for="fname"><i class="fa fa-user"></i> Full Name</label>



            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text"  name="state" placeholder="NY"  required="true">
              </div>
         
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Your name"  required="true">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"  required="true">
            <label for="expmonth">Exp Month</label>
            <input type="text"  name="expmonth" placeholder="September"  required="true">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text"  name="expyear" placeholder="2020"  required="true">
              </div>
             
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

</div>

</body>
</html>

<style>

.booking-form-row {
    padding-top: 40px;
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.booking-form-container {

  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #18458b;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

       @endsection

@section('footer')
@include('User.layout.footer')
@endsection