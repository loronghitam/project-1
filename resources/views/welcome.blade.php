
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MyResume Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('asset/landingpage/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('asset/landingpage/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('asset/landingpage/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/landingpage/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/landingpage/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('asset/landingpage/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: MyResume - v4.10.0
    * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
<i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Product</span></a></li>
            <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Profile Perusahaan</span></a></li>
            <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="{{url('/login')}}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Login</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1>UAS PEMROGRAMAN WEB</h1>
        <p>I'm <span class="typed" data-typed-items="Perbankan, Syariah, 19354015, Devi, Nuryanti"></span></p>
    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Product</h2>
                <p>Product Devi Nuryanti dibuat dari bahan-bahan alami pilihan tanpa menggunakan bahan kimia tambahan dan bebas dari MSG atau pengawet. Cita rasa khas rempah Indonesia akan membuat masakan Anda seperti masakan restoran. Ada banyak pilihan Makanan yang bisa Anda coba untuk makan di rumah.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".Makanan_Berat">Makan Berat</li>
                        <li data-filter=".Makanan_Penutup">Makan Penutup</li>
                        <li data-filter=".Minuman">Minuman</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach($product as $data)
                    <div class="col-lg-4 col-md-6 portfolio-item {{$data->category}}">
                        <div class="portfolio-wrap">
                            <img src="{{asset('images/product/'. $data->image)}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $data->title }}</h4>
                                <p>{{ $data->category }}</p>
                                <div class="portfolio-links">
                                    <a href="{{asset('images/product/'. $data->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $data->title }}"><i class="bx bx-plus"></i></a>
                                    <a href="{{url('/product/'. $data->slug)}}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Product Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Profile Perushaan</h2>
                <p>Selamat datang di toko Devi Nuryanti Platform digital terpadu untuk mengelola kebutuhan makanan sehari-hari Anda</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <i class="bx bxl-dribbble"></i>
                        </div>
                        <h4><a href="#">Diskon Tetap</a></h4>
                        <p>Toko Devi menyediakan Voucher digital yang menawarkan diskon nilai tetap untuk Makanan sehari anda.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <i class="bx bx-file"></i>
                        </div>
                        <h4><a href="#">Hadiah praktis</a></h4>
                        <p>Senangkan pelanggan setia, akuisisi pelanggan baru, datangkan pengunjung ke acara dan bahkan sebagai rewards bagi karyawan Anda!</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                            </svg>
                            <i class="bx bx-tachometer"></i>
                        </div>
                        <h4><a href="">Fleksibilitas</a></h4>
                        <p>Tentukan nilai dan validitas (hingga 6 bulan) per voucher, dan tentukan pengaturan penggunaan dengan melakukan kontrol waktu atau lokasi.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Me</h2>
                <p>“Lulusan S1 dengan spesialisasi di Perbankan Syariah. Memiliki pengalaman dalam Perbankan selama 4 tahun dengan waktu magang dan mengimplementasikan pengetahuan melalui magang di bank terkenal. Mencari peluang kerja yang memberi kesempatan untuk semakin berkembang.”
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img src="{{asset('profile.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <h3>Perbankan Syariah.</h3>
                    <p class="fst-italic">
                        Devi Nuryanti pekerja keras dan rajin menabun
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>14 Maret 2001</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>081-222-693-185</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Rancaekek</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>S1</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>devinuryantips2019@gmail.com</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        “Mahasiswa Ekonomi yang antusias dan bermotivasi tinggi dengan kemampuan kepemimpinan, inisiatif, dan mencari tantangan baru. Berpengalaman dalam berbagai organisasi internal maupun eksternal kampus.”
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>Devi Nuryanti</h3>
        <p>Pengumpulan tugas UAS WEB PROGRAMING.</p>
        <div class="copyright">
            &copy; Copyright <strong><span>DeviNuryanti</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('asset/landingpage/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('asset/landingpage/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('asset/landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('asset/landingpage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('asset/landingpage/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('asset/landingpage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('asset/landingpage/assets/vendor/typed.js/typed.min.js')}}"></script>
<script src="{{asset('asset/landingpage/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('asset/landingpage/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('asset/landingpage/assets/js/main.js')}}"></script>

</body>

</html>
