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
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100&display=swap"
        rel="stylesheet">

    <!-- Plugin and Vendor CSS Styles -->
    <link href="{{ asset('css/plugin/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/reset.css') }}" rel="stylesheet">

    <!-- Custom CSS Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elements.css')}}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('font/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font/font-awesome-4.7.0/css/all.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="header-section is-sticky section">
        <div class="header-inner">
            <div class="container-custom position-relative">
                <div class="row justify-content-between align-items-center">
                    <!-- Header Logo Start -->
                    <div class="col-xl-2 col-auto order-0">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                <img class="dark-logo" src="../images/logo_sanyo_navbar.png" alt="Logo SMA SANYO">
                                <img class="light-logo" src="../images/logo_sanyo_navbar.png" alt="Logo SMA SANYO">
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
                                        <a href="{{ url('/about') }}"><span
                                                class="menu-text">About Us</span></a>
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
                        <a href="{{ url('/login') }}" class="btn btn-account">Account</a>
                    </div>
                    <!-- Header Right End -->

                </div>
            </div>
        </div>
    </div>

    <main class="py-0 section">

        <div class="guru-section mb-5 section section-padding-150 background-guru">
            <div class="section-title text-center">
                <h2 class="guru-staff-title">Teacher & Staff</h2>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="guru-data">
                    <h2 class="title mb-4">Teacher</h2>
                    <div class="row mt-5">
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/totok.png" alt="">
                            <h2 class="nama">Totok Susiantara</h2>
                            <h3 class="jabatan">Kepala Sekolah</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/untung.png" alt="">
                            <h2 class="nama">Agustinus Untung Puspita</h2>
                            <h3 class="jabatan">Wakasek Kurikulum</h3>
                            <h3 class="jabatan">Guru Seni Budaya</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/julius.png" alt="">
                            <h2 class="nama">Julius Gunawan</h2>
                            <h3 class="jabatan">Guru Bahasa Indonesia</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/andreas.png" alt="">
                            <h2 class="nama">Andreas Ardhianto</h2>
                            <h3 class="jabatan">Wakasek Humas</h3>
                            <h3 class="jabatan">Guru Sejarah</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/paryadi.png" alt="">
                            <h2 class="nama">Paryadi</h2>
                            <h3 class="jabatan">Guru Komputer</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/murgi.png" alt="">
                            <h2 class="nama">AN Murgiyanti</h2>
                            <h3 class="jabatan">Guru Ekonomi</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/murti.png" alt="">
                            <h2 class="nama">Inndhitya Murti</h2>
                            <h3 class="jabatan">Guru Bimbingan Konseling</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/petrus.png" alt="">
                            <h2 class="nama">Petrus Agus Suryana</h2>
                            <h3 class="jabatan">Guru Bahasa Indonesia</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/mr_jo.png" alt="">
                            <h2 class="nama">Anandowa Amajihono</h2>
                            <h3 class="jabatan">Guru Bahasa Inggris</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/adrianus.png" alt="">
                            <h2 class="nama">Adrianus Kusuma Sanjaya</h2>
                            <h3 class="jabatan">Guru Fisika</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/rahel.png" alt="">
                            <h2 class="nama">Rahel Sintadevi Siahaan</h2>
                            <h3 class="jabatan">Guru Matematika</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/yohanes.png" alt="">
                            <h2 class="nama">Yohanes Suyanto</h2>
                            <h3 class="jabatan">Guru Matematika</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/tumpal.png" alt="">
                            <h2 class="nama">Tumpal Sugianto Marpaung</h2>
                            <h3 class="jabatan">Guru Seni Budaya</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/edy.png" alt="">
                            <h2 class="nama">Edy Setiawan</h2>
                            <h3 class="jabatan">Guru PAK dan Budipekerti</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/novi.png" alt="">
                            <h2 class="nama">Novi Eva  Sigalingging</h2>
                            <h3 class="jabatan">Guru Matematika</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/sarjana.png" alt="">
                            <h2 class="nama">Sarjana</h2>
                            <h3 class="jabatan">Guru Penjasorkes</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/piter.png" alt="">
                            <h2 class="nama">Victorius Piter P. Nainggolan</h2>
                            <h3 class="jabatan">Guru PPKN</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/kori.png" alt="">
                            <h2 class="nama">Korri Juita Situmorang</h2>
                            <h3 class="jabatan">Guru Biologi</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/mei.png" alt="">
                            <h2 class="nama">Mei W. Simanjutak</h2>
                            <h3 class="jabatan">Guru Kimia</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/wilda.png" alt="">
                            <h2 class="nama">Wilda Noveliana Tambunan</h2>
                            <h3 class="jabatan">Guru Geografi</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/sesilia.png" alt="">
                            <h2 class="nama">Sesilia Rospita Pasaribu</h2>
                            <h3 class="jabatan">Guru Sosiologi</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <img class="pasfoto" src="../images/teacher/vero.png" alt="">
                            <h2 class="nama">Veronica Hesti Ningtyas</h2>
                            <h3 class="jabatan">Guru Sejarah</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="staff-data">
                    <h2 class="title mb-4">Staff</h2>
                    <div class="row mt-5">
                        <div class="col">
                            <img class="pasfoto" src="../images/staff/elisabeth.png" alt="">
                            <h2 class="nama">Elisabet Eka Lestari Subekti</h2>
                            <h3 class="jabatan">Pustakawati</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/staff/yaskur.png" alt="">
                            <h2 class="nama">Yaskur</h2>
                            <h3 class="jabatan">Tata Usaha</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/staff/deppy.png" alt="">
                            <h2 class="nama">Deppy Haryanto</h2>
                            <h3 class="jabatan">Pegawai</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <img class="pasfoto" src="../images/staff/udit.png" alt="">
                            <h2 class="nama">Agustinus Udit Yusmanto</h2>
                            <h3 class="jabatan">Kebersihan</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/staff/ms_citra.png" alt="">
                            <h2 class="nama">Lilia Citra Setiawan</h2>
                            <h3 class="jabatan">Kepala Perpustakaan</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/staff/lusia_d.png" alt="">
                            <h2 class="nama">Lusia Dwi Anggaryani</h2>
                            <h3 class="jabatan">Tata Usaha</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <img class="pasfoto" src="../images/staff/sugeng.png" alt="">
                            <h2 class="nama">Sugeng Waslim</h2>
                            <h3 class="jabatan">Keamanan</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/staff/widjanarto.png" alt="">
                            <h2 class="nama">Widjiantoro</h2>
                            <h3 class="jabatan">Sopir</h3>
                        </div>
                        <div class="col">
                            <img class="pasfoto" src="../images/staff/lusia_i.png" alt="">
                            <h2 class="nama">Lusia Indrarti</h2>
                            <h3 class="jabatan">Bendahara</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
