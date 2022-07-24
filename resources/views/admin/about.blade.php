<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('front_style/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('front_style/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<div id="wrapper">

@include("admin.sidebar")

<div id="content-wrapper" class="d-flex flex-column">

<div id="content">
@include("admin.header")

<div class="container" style="position:absolute;top:100px">
    <div class="row">
    <div class="col-4">

<form action="{{route('StoreAbout')}}" method="post" enctype="multipart/form-data">
    @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Vezife</label>
    <input type="text" name="position" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tesvir</label>
    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Haqqinda</label>
    <input type="text" name="about" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary text-danger">Gonder</button>




</form>
</div>

<div class="col-4">
<table class="table">
  <thead>
    <tr>
     
     
      <th scope="col">Vezife</th>
      <th scope="col">Haqqinda</th>
      <th scope="col">Tesvir</th>
      <th scope="col">Duzelis et</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>{{$data->position}}</th>
      <td>{{$data->about}}</td>
      <td>{{$data->image}}</td>
      
      <td><a href="{{'EditAbout/'.$data['id']}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a></td>
    </tr>
   
  </tbody>
</table>

<!-- Button trigger modal -->



          
					
				
</div>

    </div>
</div>




</div>

@include("admin.footer")
</div>
</div>









    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('front_style/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front_style/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   

    <!-- Core plugin JavaScript-->
   
    <script src="{{asset('front_style/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
   
    <script src="{{asset('front_style/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
   
    <script src="{{asset('front_style/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
   
   
    <script src="{{asset('front_style/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('front_style/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>