
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
            <h1 class="m-0 text-dark">Dashboard - Hotel Rooms</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}} ">Home</a></li>
          
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
           <?php if($access){
$aray1=[];
$arraytypes=[];
  ?>
 <?php foreach ($access as $key => $access) {
   if(count($aray1)==0){
 array_push($aray1,$access);
 array_push($arraytypes,$access->Hotel_name);
   }else{
 if(!in_array($access->Hotel_name, $arraytypes)){
array_push($aray1,$access);
array_push($arraytypes,$access->Hotel_name);
      // $cc=count($arraytypes);
      // print_r($cc);
      // exit();

    }
   }
  
}
    ?>
            <tr>
               
 
                <th>Hotel Name</th>
              
                <th>City</th>
               
                 <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
     foreach ($aray1 as $key => $access) {?>
        <tr>
    
            <td> <?php echo $access->Hotel_name  ?> </td>
                        <td> <?php echo $access->city_name;  ?> </td>
     
            <td> <a href="<?php echo route('admin.access.room',['hotel_id'=>$access->hotel_id])?>" class="btn btn-primary btn-xs">  View  Detail</a>
   </td>
         </tr>
             
              
             
  <?php   } }
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

       
