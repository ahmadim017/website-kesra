<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="192x192" href="{{asset('img/apple-icon.png')}}">
  <title>Sekretariat Daerah Bagian Kesra - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <style>
    .bg-success-1{
      background: linear-gradient(90deg, #047857 0%, #374151 100%);
    }
   
  </style>
</head>

<body class="bg-success-1">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-4">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            
              
                 @yield('content')
                  
                
              
           
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('sbadmin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  @yield('script')
  <!-- Custom scripts for all pages-->
  <script src="{{asset('sbadmin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
