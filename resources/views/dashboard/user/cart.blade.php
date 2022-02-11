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
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-default">
    <div class="container">
        <div class="row">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('assets/img/brand/logo.png') }}" alt="logo">
            </a>
            <h2 style="color: white">kopi Johar</h2>
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" href="{{ url('/user/home') }}">
                    <i>Dashboard</i>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                      <i>User</i>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
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
                      <form action="{{ route('user.logout') }}" method="POST">
                        <a href="#" class="dropdown-item">
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
  <!-- Main content -->
  <div class="mt-4 pl-3 pr-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body shadow mb-4">
                    <h2 class="font-weight-bold mb-4">Keranjang</h2>
                    <div class="table-responsive">
                        <table class="table table-stripped  table-bordered text-center" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Footer -->
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>

  <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
  </script>

</body>

</html>