@extends('User.layout')
 @section('content')
 @include('User.Layouts.header') -->

 <script src="https://www.google.com/recaptcha/api.js"></script>


 <div class="contact-forms_s">
 <div class="container">
     <div class="heading-contact-form">
         <h4>Contact Us</h4>
     </div>
     <div class="inner-contact-forms">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{url('captcha')}}">
          @csrf
         <div class="row">
             <div class="col-md-6 col-12 col-sm-12">
            <p for="fname">Name</p>
            <input type="text"name="name" placeholder="@lang('about.con_name')" required="true">
             </div>
             <div class="col-md-6 col-12 col-sm-12">
            <p for="lname">Email</p>
            <input type="text" name="email" placeholder="@lang('about.con_email')" required="true">
            </div>
         </div>

         <div class="row">
            <div class="col-md-6 col-12 col-sm-12">
           <p for="fname">Phone</p>
           <input type="text" name="phone"  placeholder="@lang('about.con_phone')" required="true">
            </div>
            <div class="col-md-6 col-12 col-sm-12">
           <p for="lname">Subject</p>
           <input type="text" name="subject"  placeholder="@lang('about.about_sub')" required="true">
           </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-12 col-sm-12">
           <p for="fname">Message</p>
           <textarea name="review"  name="message" cols="30" rows="10" placeholder="@lang('about.con_msg')" required="true"></textarea>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
               <div class="captcha">
                 <span>{!! captcha_img() !!}</span>
                 <button type="button" class="btn btn-success"><i class="fa fa-refresh" id="refresh"></i></button>
                 </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
               <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha"></div>
            </div>
            <div class="input-submited">
                <button type="submit">Submit Message</button>
            </div>
          </form>
     </div>
 </div>
 </div>
  @endsection

@section('footer')
 @include('User.Layouts.footer')
@endsection
