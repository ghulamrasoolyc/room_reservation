<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Easy Book 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.min.css">
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
            <h1>Dashboard : Cities</h1>
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
                <th>City</th>
                <th>Hotel Name</th>
              
                <th>Address</th>
       <th>Street</th>
                   <th>Contact</th>
               <!--     <th>Image</th> -->
                     <th>Action</th>
                     <th>status</th>
            </tr>
                  </thead>
                  <tbody>
               <?php
     foreach ($manage_hotel as $key => $manage_hotel) {?>
        <tr>
      <td> <?php echo $manage_hotel->city_name  ?> </td>
      <td> <?php echo $manage_hotel->Hotel_name  ?> </td>
      <td> <?php echo $manage_hotel->address  ?> </td>
      <td> <?php echo $manage_hotel->street  ?> </td>

      <td> <?php echo $manage_hotel->contact  ?> </td>
      
                       

                      <td>
  <a href="<?php echo route('admin.editedhotel',['id'=>$manage_hotel->id])?>" class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> Edit</a>
      <a href="<?php echo route('admin.deletedhotel',['id'=>$manage_hotel->id])?>" class="btn btn-danger btn-xs delete" data-confirm="Do you want to delete this category?"> <i class="fa fa-trash"></i> Delete</a>
    </dyd>
    <td>
      <?php switch ($manage_hotel->status) {
        case '0':?>
         <a href="<?php echo route('admin.status.active',['id'=>$manage_hotel->id])?>" class="btn btn-success btn-xs delete" data-confirm="Do you want to delete this category?"> <i class="fa fa-trash"></i> Pending</a>
        <?php 

          break;
         case '1':?>
         <a href="<?php echo route('admin.status.inactive',['id'=>$manage_hotel->id])?>" class="btn btn-primary btn-xs delete" data-confirm="Do you want to delete this category?"> <i class="fa fa-trash"></i> Active</a>
        <?php   break;
         case '2':?>
         <a href="<?php echo route('admin.status.active',['id'=>$manage_hotel->id])?>" class="btn btn-danger btn-xs delete" data-confirm="Do you want to delete this category?"> <i class="fa fa-trash"></i> Inactive</a>
        <?php 
          break;
      }?>

               
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
<script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="{{asset('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets')}}/dist/js/demo.js"></script>
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
