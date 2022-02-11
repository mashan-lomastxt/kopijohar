<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Kopi Johar</title>
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
                    <a class="nav-link nav-link-icon" href="{{ url('user/login') }}">
                        <i>Login</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ url('about') }}">
                        <i>About</i>
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7"></div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-body px-lg-5 py-lg-5">
                @if(Session::has('Success'))
                <div class="alert alert-success">{{ Session::get('Success') }}</div>
                @endif
                @if(Session::has('Error'))
                <div class="alert alert-danger">{{ Session::get('Error') }}</div>
                @endif
              <form action="{{ route('user.create') }}" method="POST">
                @csrf
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nama" type="text" name="name" id="name" value="{{ old('name') }}">
                  </div>
                  <span class="text-danger">@error('name')
                    {{ $message }}
                @enderror</span>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email" id="email" value="{{ old('email') }}">
                  </div>
                  <span class="text-danger">@error('email')
                    {{ $message }}
                @enderror</span>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password" id="password" value="{{ old('password') }}">
                  </div>
                  <span class="text-danger">@error('password')
                    {{ $message }}
                @enderror</span>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Password Ulang" type="password" name="cpassword" id="cpassword" value="{{ old('cpassword') }}">
                    </div>
                    <span class="text-danger">@error('cpassword')
                        {{ $message }}
                    @enderror</span>
                  </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-2">DAFTAR</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12 text-left">
                sudah punya Akun ? <a href="{{ route('user.login') }}">Loginnya disini</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="text-center text-white bg-default" id="footer-main">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Social media -->
      <section>
        <!-- Facebook -->
        <a
          class="btn btn-link btn-floating btn-lg text-white m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a
          class="btn btn-link btn-floating btn-lg text-white m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google 
        <a
          class="btn btn-link btn-floating btn-lg text-white m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-google"></i
        ></a> -->
  
        <!-- Instagram -->
        <a
          class="btn btn-link btn-floating btn-lg text-white m-1"
          href="https://www.instagram.com/kopijoharjogja/?hl=en"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Youtube -->
        <a
          class="btn btn-link btn-floating btn-lg text-white m-1"
          href="https://youtu.be/osvMSwBA84E"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-youtube"></i
        ></a>
  
        <!-- Linkedin 
        <a
          class="btn btn-link btn-floating btn-lg text-white m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-linkedin"></i
        ></a> -->
  
        <!-- Github 
        <a
          class="btn btn-link btn-floating btn-lg text-white m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-github"></i
        ></a> -->
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center text-white" style="background-color: rgba(0, 0, 0, 0.2);">
      <div class="copyright text-center text-xl-center text-muted">
        &copy; 2021 <a href="{{ url('/') }}" class="font-weight-bold ml-1">Kopi Johar</a>
        &hearts; Developed by Mashan <a class="btn btn-link btn-floating btn-lg text-white m-1" role="button" data-mdb-ripple-color="dark" href="https://github.com/mashan-lomastxt"><i class="fab fa-github"></i></a>
      </div>
    </div>
  </footer>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>