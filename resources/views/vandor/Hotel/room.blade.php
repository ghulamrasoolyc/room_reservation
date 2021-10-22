
        <!--=============== basic  ===============-->
@extends('User.site.layout')
 
 @section('content')

 @include('User.layout.header')
 
    <body>
    
  
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!-- section-->
                    <section class="flat-header color-bg adm-header">
                        <div class="wave-bg wave-bg2"></div>
                             <div class="container">
                            <div class="dasboard-wrap fl-wrap">
        
                                <!--dasboard-sidebar-->
                                <div class="dasboard-sidebar">
                            <div style="display: none; width: 250px; height: 448px; float: left;"></div>
                                </div>
                           











                                <div class="dasboard-menu">
                                    <div class="dasboard-menu-btn color3-bg">Dashboard Menu <i class="fal fa-bars"></i></div>
                                    <ul class="dasboard-menu-wrap vishidelem">
                                     

                                         
                                        </li>
                                          </li> <li><a href="{{route('vandor.dashboard')}}" style="color: rgb(255, 255, 255); background: none;">
                                            <i class="fa fa-home"></i> Home </a></li>
           

                        
                                    </ul>
                                </div>
                        <div class="vandor-logout">
                                  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout

                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                      </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                    <!-- section  -->

         <div class="container">
                    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Your Hotel Rooms</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <!-- <th>S.no</th> -->
                
                    <th>Room No(s)</th>
                    <th>Room Types</th>
                    <th>Action</th>
      
                
                  </tr>
                  </thead>
                  <tbody>
               
                    @foreach($selecteroomddata as $selecteddata)

              <?php 
                 $num=1;
              
                    
               ;?>
                  

                       <tr>
                  <!-- <td><?php echo $num++; ?> </td> -->
                    <td>{{$selecteddata->room_no}}</td>
                      <td>{{$selecteddata->room_types}}</td>
                    <td>
                  <?php 
                  switch ($selecteddata->status) {
                    case '0':?>
            <a href="<?php echo route('selecteddata.reserved.vandor.city',['id'=>$selecteddata->id])?>"
            class="btn btn-avail "> Available</a>
            <?php 
            break;
                case '1': 
                ?>
                 <a href="<?php echo route('selecteddata.avail.vandor.city',['id'=>$selecteddata->id])?>"
            class="btn btn-danger "> Reserved</a>
            <?php 
                      break;?>
                    
              
             <?php      }
                ?>
              </td> 
                

                          </tr>
                
                       @endforeach
                       
                  </tbody>
         
                </table>
              </div>
              <!-- /.card-body -->
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