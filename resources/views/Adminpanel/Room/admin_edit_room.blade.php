
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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Room</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype="multipart/form-data"  method="post" action="{{route('admin.add.room')}}">
               {{csrf_field()}}
                <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Room No.</label>
                    <input type="text" name="room_no" class="form-control" id="exampleInputEmail1"  value="<?php echo $filter_room[0]->id ?>">
                  </div>
                </div>

                </div>
                
    
<!-- 
  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contact No.</label>
                    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" placeholder="Enter Contact">
                  </div>
                </div>
                   <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email Adress</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                  </div>
                         </div>
                </div> -->


<!--   <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add Hotel Image</label>
            <input type="file" name="image" class="form-control">
                  </div>
                </div>

                   <div class="col-md-6">
 
                         </div>
                </div> -->

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


