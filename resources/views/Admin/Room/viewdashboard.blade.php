
@extends('Admin.Layout.sitelayout')
 @section('content')

 @include('Admin.site.header')


  <!-- Main Sidebar Container -->
 @include('Admin.site.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard - Hotel Room</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          
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
               
 
                <th>Hotel Name</th>
              
                <th>City</th>
               
                 <th>Action</th>
            </tr>
        </thead>
        <tbody>

    </tbody>

   
    </table>

      </div>
            </div>
          </div>
          <div>
            <div>
            </section>


@endsection

@section('footer')
@include('Admin.site.footer')
@endsection


       
