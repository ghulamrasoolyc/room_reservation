
        <!--=============== basic  ===============-->
@extends('User.site.layout')
 
 @section('content')

 @include('User.layout.header')
 
    <body>
      <div class="booking-sections">
        <div class="inner-booking-details">
          <div class="container justify-contents">
        
            <div class="back-dashboards"><a href="{{route('vandor.dashboard')}}">
              Back</a></div>
         
            {{-- <div class="right-side pull-right">
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
            </div> --}}
          </div>
        </div>
      </div>
    
  

   <div class="booking-deaai">                 
<div class="container">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Your hotel room booking detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                     <th>Phone</th>
             
        
                    <th>Quantity</th>
                        <th>Room Type</th>
                    <th>Check in</th>
                      <th>checkOut</th>
                        <th>Amount</th>

                
                  </tr>
                  </thead>
                  <tbody>
               
                    @foreach($selecteddata as $selecteddata)
                       <tr>
                    <td>{{$selecteddata->fname}}</td>
                    
                      <td>{{$selecteddata->phone}}</td>
                  
                      <td>{{$selecteddata->sumroom}}</td>
                        <td>{{$selecteddata->room_types}}</td>
                     <td>{{$selecteddata->checkin}}</td>
                       <td>{{$selecteddata->checkOut}}</td>
                       <td>{{$selecteddata->sumPrice}}</td>


                          </tr>
                
                       @endforeach
                       
                  </tbody>
                    <tr>
                        <td   class="text-center" colspan="6">Total Amount</td>
                        <td><?php echo $sumtotal ?></td>
                    </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
   </div>

                    <div class="limit-box fl-wrap"></div>
                </div>
                <!-- content end-->
            </div>
    
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->



   @endsection

@section('footer')

@endsection



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


<style>
.booking-sections {
    margin-top: 110px;
}

.inner-booking-details {
    background: #3aaced;
    /* padding: 0 0 30px; */
    padding: 30px 0 30px 0;
}

.container.justify-contents {
    display: flex;
}

.back-dashboards a {
    border: 1px solid white;
    width: 115px;
    /* width: 200px; */
    cursor: pointer;
    /* padding: 10; */
    padding: 10px 20px 10px 20px;
    color: white;
    text-decoration: none;
}

.booking-deaai {
    margin-top: 30px;
}
</style>