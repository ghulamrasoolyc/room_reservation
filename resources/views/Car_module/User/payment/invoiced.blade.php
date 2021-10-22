
@extends('User.layout')
 @section('content')
  @include('User.Layouts.header')
 <style type="text/css">
 .invocie-section {
 
    /* height: 100vh; */
    padding: 138px 0px 64px;
}
h3.text-center {
    font-size: 24px;
    font-weight: 300;
    font-style: normal;
}
.invocie-section .container {
    text-align: center;
    padding: 16px;
}
.div-button a {
    background: #afdaec !important;
    background: #eaecee !important;
    color: black;
    border: none;
}
.div-button.pull-center {
    padding: 23px 0 21px 0;
}
</style>
<div class="invocie-section">
  <div class="container button-div">
    <h3 class="text-center">Thank you for applied our Services.</h3>  
  

   <div class="div-button pull-center">
    <a href="{{route('home.user')}}" class="btn btn-success">Go Back</a>
</div>
</div>
 @endsection

@section('footer')
 @include('User.Layouts.footer')
@endsection
