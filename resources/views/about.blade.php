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

<body class="bg-light">
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
                    <a class="nav-link nav-link-icon" href="{{ url('/') }}">
                        <i>Home</i>
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

<div class="header pb-6 d-flex align-items-center" style="min-height: 490px; background-image: url(../assets/img/theme/kopi.jpeg); background-size: contain; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-md-6">
        <h2 class="display-3 text-white">Tentang Kami</h2>
        <h4 class="text-white mb-4 mt-2">
          Johar1/Jo·har/  n /  pohon yang tumbuh di daerah tropis, tingginya mencapai 20 m, biasa ditanam sebagai pohon peneduh atau tanaman pagar, berbunga sepanjang tahun, bunganya malai, kuntumnya berwarna kuning, buahnya polong pipih dan panjang berwarna cokelat, daunnya dipergunakan sebagai ramuan obat sakit malaria; Cassia siamea 
        </h4>
        <button class="btn btn-lg btn-primary">
          <a class="text-white" href="https://kbbi.web.id/johar-2">KBBI - Johar</a>
        </button>
      </div>
      <div class="col-md-6">
        <h1 class="display-4 text-white">Lokasi</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2331087868047!2d110.4090890144854!3d-7.765086094403605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59dd9e1387d3%3A0x9d83be451e6413c5!2sKopi%20Johar%2C%20Kedai%20Kopi%20Yogyakarta!5e0!3m2!1sen!2sid!4v1641286456845!5m2!1sen!2sid" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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