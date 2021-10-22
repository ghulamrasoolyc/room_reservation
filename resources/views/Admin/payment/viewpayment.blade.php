<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Car Services</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin_assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin_assets')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('admin_assets')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_assets')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 @include('Admin.site.header')
  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('Admin.site.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard : payment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                <th>S.no</th>
                <th>Name</th>
              <th>Phone.</th>
                 <th>Car Model.</th>
              <th>Email</th>
              <th>From</th>
              <th>To</th>
              <th>date</th>
              <th>Time</th>
              <th>Price.</th>
        <th>Action</th>

            </tr>
                  </thead>
                  <tbody>
               <?php
                   $var=0;

     foreach ($viewpayments as $key => $manage_hotel) {
  $var++;
      ?>
        <tr>
      <td> <?php echo $var;  ?> </td>


      <td> <?php echo $manage_hotel->fname  ?> </td>
      <td> <?php echo $manage_hotel->phone  ?> </td>
       <td> <?php echo $manage_hotel->model  ?> </td>
      <td> <?php echo $manage_hotel->email  ?> </td>
            <td> <?php echo $manage_hotel->from_to  ?> </td>
      <td> <?php echo $manage_hotel->dest  ?> </td>
       <td> <?php echo $manage_hotel->date  ?> </td>
       <td> <?php echo $manage_hotel->time  ?> </td>
            <td> <?php echo $manage_hotel->price  ?> </td>

            <td>
                <a href="<?php echo route('admin.historyhirerdetailss',['id'=>$manage_hotel->pay_id])?>" class="btn btn-primary btn-xs">View Detail</a>
                  </td>


                                    </tr>

  <?php   }
     ?>



                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@include('Admin.site.footer')



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin_assets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin_assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="{{asset('admin_assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin_assets')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('admin_assets')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('admin_assets')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_assets')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin_assets')}}/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
