
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
            <h1 class="m-0 text-dark">Dashboard - Cities</h1>
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
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Cities</h3>

       
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="post" name="contactForm" onsubmit="return validateForm()" action="{{route('admin.update')}}">
                         {{csrf_field()}}
            <div class="row">
       
                <!-- /.form-group -->
                              <div class="col-md-6">
                <div class="form-group">
                  <label>City</label>
                    <input type="hidden" name="iid" value="<?php echo $edit_cities[0]->id ?>" class="form-control" required>
     <input type="text" name="edit_code" value="<?php echo $edit_cities[0]->city_name ?>" class="form-control" required>
                </div>
                <!-- /.form-group -->
              </div>

              <!-- /.col -->

        
                <!-- /.form-group -->
          
                <!-- /.form-group -->
              </div>

              <div class="row">
                <div class="col-md-6 button-submit">
                    <input class="btn btn-success" type="submit" name="submit" value="Update">
                </div>
              </div>
                          </form>
              </div>
              <!-- /.col -->
  
            </div>
            <!-- /.row -->

           
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        
        </div>
      </div>
    </section>





              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div>
            <div>
            </section>


@endsection

@section('footer')
@include('Admin.site.footer')
@endsection


<script>
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {

    // Retrieving the values of form elements 
    var name = document.contactForm.edit_code.value;

    
    
      // Defining error variables with a default value
    var nameErr = true;
    
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
        if(lenght.name < 3){
          printError("This City name is too Short");
        }
    }
    
 
    
    // Prevent the form from being submitted if there are any errors
    if((nameErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n";
    
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};
</script>