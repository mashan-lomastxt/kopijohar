<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Kedai Kopi Johar</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-default" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand">
          <img src="{{ asset('assets/img/brand/logo.png') }}" class="navbar-brand-img">
          <h3 class="font-weight-bold text-center text-white">Kopi Johar</h3>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/home') }}">
                  <i class="ni ni-tv-2 text-primary"></i>
                  <span class="nav-link-text text-white">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/member/member') }}">
                  <i class="ni ni-single-02 text-primary"></i>
                  <span class="nav-link-text text-white">Member</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/kategori/kategori') }}">
                  <i class="ni ni-ui-04 text-primary"></i>
                  <span class="nav-link-text text-white">Kategori</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/produk/produk') }}">
                  <i class="ni ni-single-copy-04 text-primary"></i>
                  <span class="nav-link-text text-white">Produk</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/order') }}">
                  <i class="ni ni-cart text-primary"></i>
                  <span class="nav-link-text text-white">Pesanan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/transaksi') }}">
                  <i class="ni ni-money-coins text-primary"></i>
                  <span class="nav-link-text text-white">Transaksi</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/laporan/laporan') }}">
                  <i class="ni ni-send text-primary"></i>
                  <span class="nav-link-text text-white">Laporan</span>
                </a>
              </li>
          </ul>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search form -->
            
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center  ml-md-auto ">
              <li class="nav-item d-xl-none">
                <!-- Sidenav toggler -->
                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </div>
              </li>
              <li class="nav-item d-sm-none">
                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                  <i class="ni ni-zoom-split-in"></i>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-5.jpg') }}">
                    </span>
                    <div class="media-body  ml-2  d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right ">
                  <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                  </div>
                  <a href="#!" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                  </a>
                  <div class="dropdown-divider"></div>
                    <form action="{{ route('admin.logout') }}" method="POST">
                    <a href="#!" class="dropdown-item">
                    @csrf
                    </form>
                    <button type="submit" class="btn btn-danger btn-sm btn-lg btn-block">
                      <i class="ni ni-user-run"></i>
                      <span>Logout</span>
                    </button>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Header -->
      @yield('content')
    <!-- Header -->
   
  </div> 
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>

  <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
  </script>

</body>

</html>