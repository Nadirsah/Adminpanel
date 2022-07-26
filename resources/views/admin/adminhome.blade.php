<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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

@include("admin.content")




</div>

@include("admin.footer")
</div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
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