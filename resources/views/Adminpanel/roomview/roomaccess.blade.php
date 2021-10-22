  

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
            <h1 class="m-0 text-dark">Room Access Detail:<strong>&nbsp;<?php echo $manageroom[0]->Hotel_name?></strong></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
          
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
         
              <!-- /.card-header -->
              <div class="card-body">
<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Room No</th>
                <th>Room Type</th>
              
                <th>Price</th>
      
                  <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
        <?php
     foreach ($manageroom as $key => $manageroom) {?>
        <tr>
      <td> <?php echo $manageroom->room_no  ?> </td>
         <td> <?php echo $manageroom->room_types  ?> </td>
            <td> <?php echo $manageroom->price  ?> </td>
                <td>
                <?php switch ($manageroom->status) {
                      case '0':?>
                   
                  <a href="<?php echo route('update.status.reserved', ['room_id'=> $manageroom->room_id])?>" class="btn btn-primary btn-xs delete">Availble</a>
                  <?php 
                  break;
                      case '1' :?>
                  <a href="<?php echo route('update.status.availible', ['room_id'=>$manageroom->room_id])?>" class="btn btn-danger btn-xs delete">Reserved</a>
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
            </div>
          </div>
          <div>
            <div>
            </section>




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
