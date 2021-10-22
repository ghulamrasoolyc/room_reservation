
 @extends('Admin.Layout.sitelayout')
 @section('content')

 @include('Admin.site.header')




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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
          
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
            <!-- jquery validation -->
                    @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
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
                <h3 class="card-title">Edit Hotel/resturant</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype="multipart/form-data" method="post" action="{{route('update.added_hotel')}}">
                 {{csrf_field()}}
                <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hotel name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?php echo $editHotel->Hotel_name  ?>">
                  </div>
                </div>

                </div>
                 <input type="hidden" name="iiid" class="form-control" id="exampleInputEmail1" value="<?php echo $editHotel->id  ?>">
      
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Street</label>
                    <input type="text" name="street" class="form-control" id="exampleInputEmail1"  value="{{$editHotel->street}}">
                  </div>
                </div>
                   <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Adress</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" value="{{$editHotel->address}}">
                  </div>
                         </div>
                

  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contact No.</label>
                    <input type="text" name="contact" class="form-control" id="exampleInputEmail1"  value="{{$editHotel->contact}}">
                  </div>
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
@endsection

@section('footer')
@include('Admin.site.footer')
@endsection


