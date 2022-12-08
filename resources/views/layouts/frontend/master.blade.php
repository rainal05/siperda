{{-- <!DOCTYPE html> --}}
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

            <h1 class="logo mr-auto"><a href="/">SIPERDA</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <a href="{{ route('login') }}" class="get-started-btn scrollto">Login</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>SISTEM INFORMASI PENGADUAN PERDA
                        {{-- <span class="badge badge-light"><u>10</u></span> --}}
                    </h1>
                    <h2>Jika anda belum memiliki akun, silakan Registrasi terlebih dahulu.</h2>
                    {{-- <div class="alert alert-primary" role="alert">
                        This is a primary alert—check it out!
                    </div> --}}
                    <!-- End batas 1 -->
                    @if (\Session::has('notif'))
                        <div class="alert alert-dark" role="alert">
                            {!! \Session::get('notif') !!}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <!-- error -->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- end error -->
                    <div class="d-lg-flex">
                        <a href="" data-toggle="modal" data-target="#keluar"
                            class="btn-get-started scrollto">Registrasi</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('daftar/assets/img/front.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Panduan ======= -->
        <!-- End Services Section -->

        <!-- ======= Kegiatan Belajar ======= -->
        @yield('content')
        <!-- End Frequently Asked Questions Section -->

    </main>
    <!-- End #main -->

    <!-- Modal Register -->
    <div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }} <br />
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ url('daftar-akun/store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{-- <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"> --}}
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk" class="form-control ">
                                <option value="">-- Pilih --</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" id="" cols="2" rows="2"></textarea>
                            {{-- <input type="text" class="form-control" name="jabatan" placeholder="Jabatan Anggota"> --}}
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-6 col-sm-6">
                                <label>Kecamatan</label>
                                <select name="kec" class="multisteps-form__select form-control">
                                    <option value="">-- PILIH --</option>
                                    <option value="Kota Baru">Kota Baru</option>
                                    <option value="Alam Barajo">Alam Barajo</option>
                                    <option value="Jambi Selatan">Jambi Selatan</option>
                                    <option value="Paal Merah">Paal Merah</option>
                                    <option value="Jelutung">Jelutung</option>
                                    <option value="Pasar Jambi">Pasar Jambi</option>
                                    <option value="Talanaipura">Talanaipura</option>
                                    <option value="Danau Sipin">Danau Sipin</option>
                                    <option value="Pelayangan">Pelayangan</option>
                                    <option value="Jambi Timur">Jambi Timur</option>
                                </select>
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="inputEmailAddress">Kelurahan</label>
                                <select name="kel" class="multisteps-form__select form-control">
                                    <option value="">-- PILIH --</option>
                                    <option value="Bagan Pete">Bagan Pete</option>
                                    <option value="Beliung">Beliung</option>
                                    <option value="Kenali Besar">Kenali Besar</option>
                                    <option value="Mayang Mangurai">Mayang Mangurai</option>
                                    <option value="Rawasari">Rawasari</option>
                                    <option value="Legok">Legok</option>
                                    <option value="Murni">Murni</option>
                                    <option value="Telanaipura">Telanaipura</option>
                                    <option value="Solok Sipin">Solok Sipin</option>
                                    <option value="Sungai Putri">Sungai Putri</option>
                                    <option value="Olak Kemang">Olak Kemang</option>
                                    <option value="Pasir Putih">Pasir Putih</option>
                                    <option value="Tanjung Pasir">Tanjung Pasir</option>
                                    <option value="Ulu Gedong">Ulu Gedong</option>
                                    <option value="Budiman">Budiman</option>
                                    <option value="Kasang">Kasang</option>
                                    <option value="Kasang Jaya">Kasang Jaya</option>
                                    <option value="Tambak Sari">Tambak Sari</option>
                                    <option value="Pakuan Baru">Pakuan Baru</option>
                                    <option value="The Hok">The Hok</option>
                                    <option value="Sejinjang">Sejinjang</option>
                                    <option value="Tanjung Sari">Tanjung Sari</option>
                                    <option value="Paal Lima">Paal Lima</option>
                                    <option value="Teluk Kenali">Teluk Kenali</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hp</label>
                            <input type="number" class="form-control" name="hp" placeholder="No Telephone">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-0">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--stop modal-->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                {{-- &copy; Copyright <strong><span>Pengaduan Perda Satpol-PP Kota Jambi</span></strong> --}}
                <strong><span>Wa : 0811-5200-1552</span></strong>
                <br>
                <strong><span>Ig : satpolpp_kotajambi</span></strong>
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
