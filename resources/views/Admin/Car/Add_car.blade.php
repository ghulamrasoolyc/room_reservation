
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
            <h1 class="m-0 text-dark">Dashboard (Add City)</h1>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Location</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form action="{{route('admin.add_car')}}" 
              method="post" name="contactForm" onsubmit="return validateForm()" >
            
      {{csrf_field()}}
                <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                <input type="text" class="form-control" name="from" placeholder="From" required="true">
                     <div class="error" id="nameErr"></div>
                  </div>
                </div>
                   <div class="col-md-6">
                  <div class="form-group">
                <input type="text" class="form-control" name="to" placeholder="To" required="true">
                     <div class="error" id="nameErr"></div>
                  </div>
                 </div>

                 </div>
                         <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">

             

                  <select name="car_id" class="form-control">
                  <option value="">Select Car</option>
                       <?php
                       foreach ($car as $key => $car) {?>
                         <option value="{{$car->id}}">
                          <?php echo $car->name ?></option>
                             <?php     }
                     ?>
                  </select>
           
                     <div class="error" id="nameErr"></div>
                  </div>
                </div>
                  <div class="col-md-6">
                  <div class="form-group">
                <input type="text" class="form-control" name="price" placeholder="Enter Car Rent" required="true">
                     <div class="error" id="nameErr"></div>
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








  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

@endsection

@section('footer')
@include('Admin.site.footer')
@endsection
