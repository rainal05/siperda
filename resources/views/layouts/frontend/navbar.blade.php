<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pengaduan Perda Satpol-PP Kota Jambi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('daftar/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('daftar/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('daftar/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v2.2.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="/">siperda</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <!-- <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>

                </ul>
            </nav>
            <a href="{{ url('daftar-akun', []) }}" class="get-started-btn scrollto">Daftar</a> -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="heroi" class="d-flex align-items-center">
        <div class="row">
        </div>
    </section><!-- End Hero -->
    <br>
    @if (\Session::has('notif'))
        <div class="alert alert-primary">
            {!! \Session::get('notif') !!}
        </div>
    @endif
    {{-- <br><br><br><br><br> --}}
    @yield('content')
    <br>
    <!-- End #main -->
    {{-- <br><br><br><br><br><br><br><br> --}}
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Pengaduan Perda Satpol-PP Kota Jambi</span></strong>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('daftar/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('daftar/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('daftar/assets/js/main.js') }}"></script>

</body>

</html>
