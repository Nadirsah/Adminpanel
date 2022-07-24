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
<body>
<form action="{{route('Upprofil')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ad-Soyad</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['name']}}">  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Dogum tatixi</label>
    <input type="text" name="birthday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['birthday']}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Unvan</label>
    <input type="text" name="adres" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['adres']}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefon</label>
    <input type="text" name="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['tel']}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['email']}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Website</label>
    <input type="text" name="website" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data['website']}}">
  </div>
  <button type="submit" class="btn btn-primary text-danger">Gonder</button>




</form>
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