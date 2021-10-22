
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
            <h1 class="m-0 text-dark">Dashboard - Hotel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <?php if($hotel_wise){
$aray1=[];
$arraytypes=[];




  ?>


  <?php foreach ($hotel_wise as $key => $hotel_wise) {
   if(count($aray1)==0){
 array_push($aray1,$hotel_wise);
 array_push($arraytypes,$hotel_wise->Hotel_name);

   }else{
    if(!in_array($hotel_wise->Hotel_name, $arraytypes)){
      array_push($aray1,$hotel_wise);
      array_push($arraytypes,$hotel_wise->Hotel_name);
      // $cc=count($arraytypes);
      // print_r($cc);
      // exit();

    }
   }
  
}
    ?>
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
                   <th>Hotel Name</th>
                    <th>Hotel Contact No.</th>
                     <th>Location</th>
                          <th>View Detail</th>
            </tr>
        </thead>
        <tbody>
        <?php
     foreach ($aray1 as $hotel_wise) {?>
        <tr>
      <td> <?php echo $hotel_wise->Hotel_name  ?> </td>
         <td> <?php echo $hotel_wise->contact  ?> </td>
            <td> <?php echo $hotel_wise->city_name  ?> </td>


<td> <a href="<?php echo route('admin.seperate.hotel',['booking_id'=>$hotel_wise->book_hotel_id])?>" class="btn btn-primary btn-xs">  View payment Detail</a>
   </td>
         
                                    </tr>
             
  <?php   }
     ?>
     <?php } ?>

    </tbody>
   
    </table>
      </div>
            </div>
          </div>
          <div>
            <div>
            </section>
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

