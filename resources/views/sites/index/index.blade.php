<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>I-YES &mdash; "Integrated Sanyo Yoseph Education System</title>

    <!-- Scripts -->
    <!-- Vendors JS -->
    <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.4.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- plugin JS -->
    <script src="{{ asset('js/plugin/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/plugin/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/plugin/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/plugin/parallax.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugin/swiper.min.js') }}"></script>
    <script src="{{ asset('js/plugin/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('js/plugin/vivus.min.js') }}"></script>

    <!-- Main Activation JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100&display=swap"
        rel="stylesheet">

    <!-- Plugin and Vendor CSS Styles -->
    <link href="{{ asset('css/plugin/animate.min.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/plugin/aos.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/plugin/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/bootstrap-utilities.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/swiper.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elements.css')}}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="header-section header-transparent sticky-header section">
        <div class="header-inner">
            <div class="container-custom position-relative">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo Start -->
                    <div class="col-xl-2 col-auto order-0">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                <img class="dark-logo" src="images/logo_sanyo_navbar.png" alt="Logo SMA SANYO">
                                <img class="light-logo" src="images/logo_sanyo_navbar.png" alt="Logo SMA SANYO">
                            </a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Main Menu Start -->
                    <div class="col-auto col-xl d-flex justify-content-xl-end justify-content-end order-2 order-xl-1">
                        <div class="menu-column-area d-none d-xl-block position-static">
                            <nav class="site-main-menu">
                                <ul>
                                    <li>
                                        <a class="active" href="{{ url('/') }}"><span class="menu-text">Home</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/about') }}"><span class="menu-text">About Us</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/enroll') }}"><span class="menu-text">Enroll</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Header Mobile Menu Toggle Start -->
                        <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                            <button class="toggle">
                                <i class="icon-top"></i>
                                <i class="icon-middle"></i>
                                <i class="icon-bottom"></i>
                            </button>
                        </div>
                        <!-- Header Mobile Menu Toggle End -->
                    </div>
                    <!-- Header Main Menu End -->

                    <!-- Header Right Start -->
                    <div class="col-xl-2 col d-none d-sm-flex justify-content-end order-1 order-xl-2">
                        <a href="#" class="btn btn-account">Account</a>
                    </div>
                    <!-- Header Right End -->

                </div>
            </div>
        </div>
    </div>

    <main class="py-0">
        <!-- Image Intro Big Start -->
        <div class="intro-section section overlay background-sekolah">
            <div class="container">
                <div class="row row-cols-lg-1 row-cols-1">
                    <div class="col align-bottom">
                        <div class="intro-content mt-xl-8 mt-lg-8 mt-md-8 mt-sm-8 mt-xs-8">
                            <h2 class="title">Welcome to SMA St. Yoseph</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image Intro Big End -->

        <!-- Three Point Section Start -->
        <div class="section">
            <div class="container p-4">
                <div class="row mb-6">
                    <!-- Icon Box Start -->
                    <div class="col mb-6">
                        <div class="icon-box text-center" data-vivus-hover>
                            <div class="icon">
                                <img class="image-icon rounded-top" src="images/live_in.svg" alt="">
                            </div>
                            <div class="content mb-4">
                                <h3 class="title">Educational Program</h3>
                                <div class="desc">
                                    <p>SMA Santo Yoseph memberikan materi pelajaran yang berguna untuk meningkatkan
                                        kemampuan intelektual dan karakter siswa.</p>
                                </div>
                                <a href="{{ url('/home/educational') }}" class="btn btn-more">More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Box End -->

                    <!-- Icon Box Start -->
                    <div class="col mb-6">
                        <div class="icon-box text-center" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject rounded-top" src="images/live_in.svg" alt="">
                            </div>
                            <div class="content mb-4">
                                <h3 class="title">Extracurricular Program</h3>
                                <div class="desc">
                                    <p>SMA Santo Yoseph menyediakan berbagai macam ekstrakulikuler yang menarik untuk
                                        menyalurkan bakat dan hobi siswa.</p>
                                </div>
                                <a href="{{ url('/home/ekskul') }}" class="btn btn-more">More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Box End -->

                    <!-- Icon Box Start -->
                    <div class="col mb-6">
                        <div class="icon-box text-center" data-vivus-hover>
                            <div class="icon">
                                <img class="svgInject rounded-top" src="images/live_in.svg" alt="">
                            </div>
                            <div class="content mb-4">
                                <h3 class="title">Live In Program</h3>
                                <div class="desc">
                                    <p>Merupakan program untuk menanamkan kepekaan sosial, membentuk karakter positif,
                                        dan resiliensi.</p>
                                </div>
                                <a href="{{ url('/home/live_in') }}" class="btn btn-more">More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Box End -->
                </div>
            </div>
        </div>
        <!-- Three Point  End -->

        <!-- Service Section Start -->
        <div class="section section-padding-t90-b100">
            <div class="container py-4">
                <div class="section-title text-center mb-12">
                    <h2 class="sanyo-title">Kenapa SMA St. Yoseph ?</h2>
                </div>
            </div>

            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <img class="image-sma align-items-center" src="images/salib.svg" alt="">
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="information-heading dark">
                            <h3 class="secondary-heading">Berasaskan Nilai - Nilai Kristiani</h3>
                            <p>Proses pembelajaran akan berasaskan pada nilai-nilai kristiani, dengan tujuan untuk
                                membangun
                                karakter baik untuk para siswa. Nilai-nilai tersebut adalah keberanian, rendah hati,
                                kejujuran, penguasaan diri, kebaikkan, kesopanan, ketekunan, ketaatan, kepedulian,
                                kesetiaan, dan murah hati.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-6 text-center">
                        <div class="information-heading dark">
                            <h3 class="secondary-heading">Quality & Reliability</h3>
                            <p>SMA Santo Yoseph telah berdiri sejak tahun 1985, sehingga memiliki pengalaman kualiatas
                                pembelajaran yang sangat baik, hal ini didukung dengan tim pengajar yang berkompeten
                                serta fasilitas sekolah yang menunjang.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-push-1">
                        <img class="image-sma align-items-center" src="images/ngajar.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-6 col-md-push-1">
                        <img class="image-sma align-items-center" src="images/senang.svg" alt="">
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="information-heading dark">
                            <h3 class="secondary-heading">Fun Outdoor Activities</h3>
                            <p>SMA Santo Yoseph memiliki kegiatan pembelajaran di luar kelas yang bertujuan untuk
                                membangun karakter dan kemampuan sosialiasi siswa, beberapa kegiatannya adalah Live in,
                                Retreat, dan Classmeet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-6 text-center">
                        <div class="information-heading dark">
                            <h3 class="secondary-heading">Live In Program</h3>
                            <p>Live In Program adalah program dari SMA Santo Yoseph dimana siswa akan mengenali,
                                menggali, serta mengalami nilai kehidupan masyarakat pedesaan. Kegiatan ini diharapkan
                                akan meningkatkan kepekaan sosial, membentuk karakter positif, ataupun sarana pendidikan
                                multikultural dan plural. </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-push-1">
                        <img class="image-sma align-items-center" src="images/live_in.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Section End -->

        <!-- Teacher $ Staff Section Start -->
        <div class="guru-section mb-5 section section-padding-150 background-guru">
            <div class="container text-center">
                <!-- Section Title Start -->
                <div class="section-title color-light text-center mb-lg-14 mb-md-8 mb-6">
                    <h2 class="guru-staff-title">Teacher & Staff</h2>
                </div>
                <!-- Section Title End -->
                <a href="{{url('/home/teacher')}}" class="btn btn-view">View More</a>
            </div>
        </div>
        <!-- Teacher $ Staff Section End -->

        <div class="footer-dark">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1">
                    <div class="col-6 col-md-4">
                        <div class="container contact-map-area">
                            <iframe class="contact-map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d589.641869127203!2d106.96956138427804!3d-6.181337432723031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698baf8d1c04a5%3A0x37cdfb6e4126e89b!2sSekolah%20Santo%20Yoseph%20(SD-SMP-SMU)!5e0!3m2!1sen!2sid!4v1651292531875!5m2!1sen!2sid"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="row mt-4 align-items-start">
                            <div class="col col-sm-6 item">
                                <h3>Services</h3>
                                <ul>
                                    <li>Perumahan Metland Menteng
                                        Kav. F/4, Ujung Menteng
                                        Cakung-Jakarta Timur,
                                        Kode Pos 13960
                                    </li>
                                </ul>
                            </div>
                            <div class="col col-sm-6 item">
                                <h3>About</h3>
                                <ul>
                                    <li><i class="fab fa-whatsapp"></i><a href="tel:0214604716" target="_blank">&nbsp;&nbsp;(021) 4604716</a><a href="tel:02146836922" target="_blank">&nbsp;(021) 46836922</a>
                                    </li>
                                    <li><i class="far fa-envelope"></i><a href="mailto:admin-info@smasantoyoseph.sch.id" target="_blank">&nbsp;
                                            admin-info@smasantoyoseph.sch.id</a></li>
                                    <li><i class="fab fa-instagram"></i><a
                                            href="https://www.instagram.com/smasantoyoseph" target="_blank">&nbsp;&nbsp;@smasantoyoseph</a>
                                    </li>
                                    <li><i class="fab fa-facebook-square"></i><a
                                            href="https://www.facebook.com/smasantoyoseph/" target="_blank">&nbsp;
                                            @smasantoyoseph</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row ps-2 location-clicker">
                            <ul>
                                <li>
                                    <i class="fa-regular fa-square-caret-left"></i><a target="_blank" href="https://goo.gl/maps/TEbvp3bh7bmtUveT9">&nbsp; Location</a>
                                </li>
                            </ul>
                        </div>
                        <p class="copyright">© 2022 SMA Santo Yoseph. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
