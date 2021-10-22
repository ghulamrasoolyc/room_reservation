

@extends('Admin.Layout.sitelayout')
 @section('content')



<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 @include('Admin.site.header')
  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('Admin.site.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard: Add Hotel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          
        @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
    {!! session('message.content') !!}
       </div>
     @endif
                     
   @if(Session::has('serverError'))
   <div class="alert-danger">{{Session::get('serverError')}} </div>
 @endif
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Hotel/resturant</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype="multipart/form-data" method="post" action="{{route('admin.added_hotel')}}">
                 {{csrf_field()}}
                <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hotel name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Hotel Name">
                      @if($errors->first('name'))
                                      <div class="alert-danger">{{ $errors->first('name')}}</div>
                                      @endif
                  </div>
                </div>
        <div class="col-6">
                <div class="form-group">
                  <label>Select(City or State)</label>
                  <select name="city_id" class="form-control">
                    <?php
                       foreach ($fetch_city_name as $key => $fetch_city_name) {?>
                         <option value="{{$fetch_city_name->id}}">
                          <?php echo $fetch_city_name->city_name ?></option>
                             <?php     }
                     ?>
                     
              


                  </select>
                </div>
                <!-- /.form-group -->
              </div>
                </div>
                
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Street</label>
                    <input type="text" name="street" class="form-control" id="exampleInputEmail1" placeholder="Enter Street">
                      @if($errors->first('street'))
                                      <div class="alert-danger">{{ $errors->first('street')}}</div>
                                      @endif
                  </div>
                </div>
                   <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Adress</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Adress">
                      @if($errors->first('address'))
                                      <div class="alert-danger">{{ $errors->first('address')}}</div>
                                      @endif
                  </div>
                         </div>
                </div>


  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contact No.</label>
                    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" placeholder="Enter Contact">
                      @if($errors->first('contact'))
                                      <div class="alert-danger">{{ $errors->first('contact')}}</div>
                                      @endif
                  </div>
                </div>
     



                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add Hotel Image</label>

            <input type="file" name="image" class="form-control">
              @if($errors->first('image'))
                                      <div class="alert-danger">{{ $errors->first('image')}}</div>
                                      @endif
                  </div>
                </div>


                </div>


        

                </div>

      




                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
@endsection

@section('footer')
@include('Admin.site.footer')
@endsection


