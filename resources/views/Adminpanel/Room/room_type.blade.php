
@extends('Admin.Layout.sitelayout')
 @section('content')



<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 @include('Admin.site.header')
  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('Admin.site.sidebar')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Room Type</h1>
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
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Room Type</small></h3>
              </div>
              @if(session()->has('message.level'))
              <div class="alert alert-{{ session('message.level') }}"> 
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           {!! session('message.content') !!}
          </div>
              @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype="multipart/form-data"  method="post" action="{{route('admin.add.room_type')}}"  name="registration">
                 {{csrf_field()}}
                <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Room type</label>
                    <input type="text" name="room_types" class="form-control" id="exampleInputEmail1" placeholder="Room Type">
                    @if($errors->first('room_types'))
                    <div class="alert-danger">{{$errors->first('room_types')}}</div>
                    @endif
                  </div>
                </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Room price">
                    @if($errors->first('price'))
                    <div class="alert-danger">{{$errors->first('price')}}</div>
                    @endif
                  </div>
                </div>
                    <div class="col-md-6">
                
                </div>
      
      

                         </div>
                           </div>
 <div class="card-footer">
                  <input  type="submit" class="btn btn-primary" value="Submit">
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
 
</script>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
@endsection

@section('footer')
@include('Admin.site.footer')
@endsection

