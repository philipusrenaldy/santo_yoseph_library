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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elements.css')}}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">

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
                                        <a href="{{ url('/') }}"><span class="menu-text">Home</span></a>
                                    </li>
                                    <li>
                                        <a class="active_about" href="{{ url('/about') }}"><span
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
                        <a href="#" class="btn btn-account">Account</a>
                    </div>
                    <!-- Header Right End -->

                </div>
            </div>
        </div>
    </div>

    <div
        style="--bs-breadcrumb-divider: '>';"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/about') }}">About Us</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kebijakkan Sekolah</li>
        </ol>
    </div>

    <main class="py-0">
        <div class="container">
            <div class="row">
                <h1 class="content-header">Kebijakkan Sekolah</h1>
            </div>
            <div class="row">
                <h2 class="policy-header">MEWUJUDKAN SEKOLAH YANG BERWAWASAN LINGKUNGAN</h2>
            </div>
            <div class="row mb-4">
                <div class="col policy-item">
                    <ul>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Memberikan kebebasan kepada guru pengajar
                            untuk mengembangkan dan mengintegrasikan isue tentang lingkungan hidup dalam kurikulum dan
                            mata pelajaran sekolah.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Menggunakan isue lingkungan hidup sebagai
                            materi mata pelajaran dan studi kasus.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dapat menggunakan metode secara variatif.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Mengembangkan dan mendayagunakan fasilitas
                            sekolah yang berbudaya ramah lingkungan hidup.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Menciptakan suasana sekolah yang nyaman,
                            bersih dan sehat.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Guru/karyawan menjadi panutan bagi siswa dalam
                            kepedulian lingkungan.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Menerapkan managemen peduli dalam penghematan
                            sumber energi, dan sumber daya air.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Mengurangi polusi udara dan polusi suara.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Menjadikan sekolah sebagai lingkungan yang
                            bebas dari rokok.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Menghemat ATK (alat tulis kantor), kertas,
                            dll.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Menggunakan white board dan penghematan board
                            marker.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Memberdayakan kelompok kerja (Pokja) siswa
                            dalam pengelolaan lingkungan.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Menjaga keindahan lingkungan.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Memanfaatkan barang bekas dan mengelola sampah
                            sekolah.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
