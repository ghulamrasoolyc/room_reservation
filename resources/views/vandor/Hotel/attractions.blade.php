  
        <!--=============== basic  ===============-->
@extends('User.site.layout')
 
 @section('content')

 @include('User.layout.header')
         
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!-- section-->
                    <section class="flat-header color-bg adm-header">
                        <div class="wave-bg wave-bg2"></div>
              <div class="container">
                            <div class="dasboard-wrap fl-wrap">
        
                                <!--dasboard-sidebar-->
                                <div class="dasboard-sidebar">
                            <div style="display: none; width: 250px; height: 448px; float: left;"></div>
                                </div>
                           











                                <div class="dasboard-menu">
                                    <div class="dasboard-menu-btn color3-bg">Dashboard Menu <i class="fal fa-bars"></i></div>
                                    <ul class="dasboard-menu-wrap vishidelem">
                                     

                                         
                                        </li>
                                          </li> <li><a href="{{route('vandor.dashboard')}}"
                                             style="color: rgb(255, 255, 255); background: none;"><i class="fa fa-home"></i> Home </a></li>
                                        <?php  if(@$Hotel_books >1) {?>
         <li><a href="{{route('vandor.booking.view')}}" style="color: rgb(255, 255, 255); background: none;"> 
                                            <i class="far fa-book"></i> Bookings <span>2</span></a></li>
                                    <?php     } ?>
                               
                                        <li><a href="{{route('vandor.view')}}" style="color: rgb(255, 255, 255); background: none;"><i class="far fa-bed"></i> Rooms </a></li>

                                    </ul>
                                </div>
                        <div class="vandor-logout">
                                  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          <input type="hidden" name="_token" value="<?php csrf_token(); ?>">
                                          {{ csrf_field() }}
                                        </form>
                                      </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                    <!-- section  -->
                    <!-- section end-->
                    <!-- section  -->
                    <section class="middle-padding">
                        <div class="container">
                            <!--dasboard-wrap-->
                            <div class="dasboard-wrap fl-wrap">
                                <!-- dashboard-content--> 
                                <div class="dashboard-content fl-wrap">
                                  
                                    <!-- profile-edit-container--> 
                                
                                    <!-- profile-edit-container end--> 
                               











                                    <!-- profile-edit-container end-->    
                                  
                                    <!-- profile-edit-container--> 

    <div class="container">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif

    <h3 class="">Attractions</h3>
<form method="post" action="{{route('add.attractions')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        <div class="input-group control-group increment" >
          <div class="col-md-6">
          <input type="file" name="filename[]" class="form-control">
        </div>
          <div class="input-group-btn"> 
            
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <div class="col-md-6">
            <input type="file" name="filename[]" class="form-control">
          </div>


            <div class="input-group-btn"> 
            
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>
                                    <!-- profile-edit-container end-->                                        
     
<script type="text/javascript">


    $(document).ready(function() {


      $(".btn-success").click(function(){ 
        // alert();
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>                             

   @endsection

@section('footer')

@endsection

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">