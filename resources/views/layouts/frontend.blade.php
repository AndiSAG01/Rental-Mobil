<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYAL CARS - Car Rental HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/cs1/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/cs1/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/cs1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/cs1/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>081366553200</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>Rentcarjambi@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">HF Rent Car</h1>
                </a>
                <img src="/assets/images/logos/logo.jpeg" alt="asdas" width="200px">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ route('homepage')}}" class="nav-item nav-link">Beranda</a>
                        <div class="nav-item">
                            <a href=" {{ route ('listing') }}" class="nav-link">Cars</a>
                        </div>
                        <div class="nav-item">
                            <a href="{{ route ('frontend.transaksi')}}" class="nav-link">Transaksi</a>
                        </div>
                        @auth
                        <li class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                          <form action="{{ route('logout') }}" method="post" >
                              @csrf
                              <button type="submit"><strong>Logout</strong></button>
                          </form>
                        </li>
                        @else
                        <li><a href="{{ Route('login') }}" class="nav-link"><strong>Login</strong></a></li>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <br>


    <!-- About Start -->
    @yield('content')
    <!-- About End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/cs1/easing/easing.min.js"></script>
    <script src="/assets/cs1/waypoints/waypoints.min.js"></script>
    <script src="/assets/cs1/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/cs1/tempusdominus/js/moment.min.js"></script>
    <script src="/assets/cs1/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/assets/cs1/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/cs1/js/main.js"></script>
</body>

</html>
