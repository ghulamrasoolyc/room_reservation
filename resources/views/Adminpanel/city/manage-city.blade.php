

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
            <h1 class="m-0 text-dark">Dashboard - Cities</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=" {{route('admin.dashboard')}} ">Home</a></li>
          
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

             
  <!--              @if(session()->has('Message'))
                        <div class="alert alert-danger alert-dismissable custom-danger-box" style="margin: 15px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>  {{session()->get('Message') }} </strong>
                            </div>
                        @endif

                              @if(session()->has('msg'))
                        <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>  {{ session()->get('msg') }} </strong>
                            </div>
                                @endif -->
<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
          
                <th>Submitted Time</th>
                     <th>Action</th>
            </tr>
        </thead>
        <tbody>
    
                

    <?php
     foreach ($dataq as $key => $manage_city) {?>
        <tr>
      <td> <?php echo $manage_city->city_name  ?> </td>

            <td> <?php echo $manage_city->submitted_time  ?> </td>
                      <td>
  <a href="<?php echo route('admin.editcity',['id'=>$manage_city->id])?>" class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> Edit</a>
      <a href="<?php echo route('admin.deletecity',['id'=>$manage_city->id])?>" class="btn btn-danger btn-xs delete" data-confirm="Do you want to delete this category?"> <i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                    </tr>
             
  <?php   }
     ?>
   

          
           
        </tbody>
   
    </table>









              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div>
            <div>
            </section>
</div>

@endsection

@section('footer')
@include('Admin.site.footer')
@endsection

       
<!-- 

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css">



<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>

<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="hhttps://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script> -->