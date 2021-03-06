<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Resurs Admin</title>
    <!-- START CSS -->
    @include('admin.admincss')
    <!-- END CSS -->
    
    <x-app-layout>
    
    </x-app-layout>
  </head>
  <body>
   
    
    <div class="container-scroller">
   
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
     
      <!-- partial -->
      
      <div class="container-fluid page-body-wrapper">
          
        <!-- partial:partials/_sidebar.html -->
       @include('admin.adminnavbar')
       
        <!-- partial -->
        <div class="main-panel">
       <div class="content-wrapper">
            
       <h1 class="text-center m-2">Tizim adminstrator</h1>
            
           
            
       <table class="table table-bordered">

<tr class="text-center table-primary">
  <th>T/r</th>
    <th>Name</th>
    <th >Email</th>
    <th >Action</th>
</tr>
@foreach($data as $data)
<tr class="text-center">
    <th>{{($loop->index+1)}}</th>
    <td>{{$data->name}}</td>
    <td >{{$data->email}}</td>              
     @if($data->usertype=='0')
     <td ><a class="btn btn-danger" href="{{{url('/deleteuser', $data->id)}}}"><i class="bi bi-trash"></i></a></td>
     @else
      <td><a>Not Allowed</a></td>    
     @endif           
</tr>
 @endforeach
</table>
          </div>
        
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">© 2022 | JDPI — Raqamli ta’lim texnologiyalari markazi</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        
      </div>
      
    </div>
    
    <!-- START SCRIPT -->
    @include('admin.adminscript')
    <!-- END SCRIPT -->

  </body>
</html>