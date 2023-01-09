<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bagian Kesra</title>
  @yield('header')
  <!-- Custom fonts for this template-->
  <link href="{{asset('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template-->
  <link href="{{asset('sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  

</head>

<body id="page-top" >

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">Bagian Kesra</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
     
          
     
     
    
      
          
      @if (Auth::user()->role == "ADMIN")
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard.index')}}">
          <i class="fa-solid fa-chart-line"></i>
          <span>Dashboard</span></a>
      </li>
      @endif
      <!-- Divider -->
      <hr class="sidebar-divider">
      @if (Auth::user()->role == "USER" || Auth::user()->role == "ADMIN" ||  Auth::user()->role == "Verifikator")
      <div class="sidebar-heading">
       Permohonan Proposal
      </div>
      <li class="nav-item">
      <a class="nav-link" href="{{route('proposallembaga.index')}}">
        <i class="fa-solid fa-file-circle-plus"></i>
            <span>Permohonan Ormas Keagamaan</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('proposalibadah.index')}}">
            <i class="fa-solid fa-file-circle-plus"></i>
                <span>Permohonan Rumah Ibadah/Ponpes/Klompok Swadaya</span></a>
            </li>
        <hr class="sidebar-divider">
        @endif

        @if (Auth::user()->role == "Creator" || Auth::user()->role == "ADMIN")
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa-solid fa-newspaper"></i>
            <span>Content</span>
          </a>
          <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Content</h6>
            <a class="collapse-item " href="{{route('berita.index')}}">Berita</a>
            <a class="collapse-item " href="{{route('video.index')}}">Video Kegiatan</a>
           
            </div>
          </div>
        </li>
        @endif

        @if (Auth::user()->role == "ADMIN")
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa-solid fa-circle-info"></i>
            <span>Informasi</span>
          </a>
          <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Informasi :</h6>
            <a class="collapse-item " href="{{route('pengumuman.index')}}">Pengumuman</a>
            <a class="collapse-item " href="{{route('datalembaga.index')}}">Data lembaga Keagamaan</a>
            <a class="collapse-item" href="{{route('rumahibadah.index')}}">Data Rumah Ibadah</a>
            <a class="collapse-item" href="{{route('gurungaji.index')}}">Data Guru Al-Quran</a>
            </div>
          </div>
        </li>
        @endif

        @if (Auth::user()->role == "ADMIN")
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities7" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa-solid fa-envelope"></i>
            <span>E-Surat Kesra</span>
          </a>
          <div id="collapseUtilities7" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Surat :</h6>
            <a class="collapse-item " href="{{route('suratmasuk.index')}}">Surat Masuk</a>
            <a class="collapse-item " href="{{route('suratkeluar.index')}}">Surat Keluar</a>
            <a class="collapse-item" href="{{route('datafile.index')}}">Data FIle</a>
            </div>
          </div>
        </li>
        @endif
      @if (Auth::user()->role == "ADMIN")
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Utilities :</h6>
          <a class="collapse-item" href="{{route('user.index')}}">Master User</a>
          <a class="collapse-item" href="{{route('opd.index')}}">Master OPD</a>
          <a class="collapse-item" href="{{route('kegiatan.index')}}">Master Kegiatan</a>
          
          </div>
        </div>
      </li>
     
      <!-- Nav Item - Utilities Collapse Menu -->
     

     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      @endif
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if (\auth::user())
                <span class="mr-2 text-gray-600 small"><i class="fa-regular fa-user fa-beat text-gray-300" style="--fa-animation-duration: 2s;"></i> {{auth::user()->name}}</span>
                @endif
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <a class="dropdown-item" href="{{route('user.password')}}">
                  <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ganti Password
                </a>
             
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">@yield('tittle')</h1>
         @yield('content')
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Bagian Kesra Kabupaten Penajam Paser Utara </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <form action="{{route("logout")}}" method="POST">
                @csrf
              <input type="submit" class="btn btn-primary" value="Logout">
              </form>
            </div>
        </div>
    </div>
  </div>
  

  <!-- Bootstrap core JavaScript-->
  
  <script src="{{asset('sbadmin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://kit.fontawesome.com/83fe09b92c.js" crossorigin="anonymous"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('sbadmin/js/sb-admin-2.min.js')}}"></script>

  

  @yield('footer')
</body>

</html>
