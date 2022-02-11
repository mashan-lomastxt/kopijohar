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
<div class="container">
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
</div>


  <!-- Main content -->

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <img src="../assets/img/theme/kopi.jpeg" class="img-fluid" alt="img">
    </div>
    <div class="col-md-6 mt-2">
      <h2 class="text-white text-center mt-2">WELCOME TO KOPI JOHAR</h2> <br>
      <h4 class="text-white">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi optio earum facere porro dolorem veritatis modi deleniti repellendus excepturi et voluptate est perspiciatis, unde officiis quisquam maiores autem quidem, odit, eum mollitia nihil saepe perferendis. Explicabo provident, quas iure inventore quidem animi officiis quis asperiores quasi dolorem. Ab, nam pariatur dolore quos, exercitationem asperiores rerum quis vero unde fuga accusantium?
      </h4>
    </div>
  </div>
</div>

<!-- OFF 
<div class="container mt-4 text-white text-center">
  <h2 class="text-white">OUR SERVICES</h2> <br>
  <div class="row">
    <div class="col-md-4">
      <div class="card-header bg-default" style="width: 15rem;">
        <img src="../assets/img/services/1.jpg" class="rounded-circle" alt="img-services">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-header bg-default" style="width: 15rem;">
        <img src="../assets/img/services/1.jpg" class="rounded-circle" alt="img-services">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-header bg-default" style="width: 15rem;">
        <img src="../assets/img/services/1.jpg" class="rounded-circle" alt="img-services">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title.</p>
        </div>
      </div>
    </div>
  </div>
</div> -->

<div class="container mt-4 text-white text-center">
  <h2 class="text-white">CUSTOMER REVIEW</h2> <br>
  <div class="row">
    <div class="col-md-3">
      <div class="card bg-default">
        <div class="card-body">
          <p class="card-text">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, distinctio eveniet dolorum harum fugiat dolor."</p>
        </div>
      </div>
      <div class="card text-dark text-center">
        Lorem, ipsum.
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-default">
        <div class="card-body">
          <p class="card-text">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, distinctio eveniet dolorum harum fugiat dolor."</p>
        </div>
      </div>
      <div class="card text-dark text-center">
        Lorem, ipsum.
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-default">
        <div class="card-body">
          <p class="card-text">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, distinctio eveniet dolorum harum fugiat dolor."</p>
        </div>
      </div>
      <div class="card text-dark text-center">
        Lorem, ipsum.
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-default">
        <div class="card-body">
          <p class="card-text">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, distinctio eveniet dolorum harum fugiat dolor."</p>
        </div>
      </div>
      <div class="card text-dark text-center">
        Lorem, ipsum.
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center text-white bg-default" id="footer-main">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
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