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
                        <a href="{{ url('/login') }}" class="btn btn-account">Account</a>
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
            <li class="breadcrumb-item active" aria-current="page">Sejarah Sekolah St. Yoseph</li>
        </ol>
    </div>

    <main class="py-0">
        <div class="container">
            <div class="row content-sejarah">
                <h1 class="content-header">Sejarah Sekolah St Yoseph</h1>
                <p>Yayasan Santo Yoseph secara formal berdiri pada 31 Agustus 1985. Awal dibuka unit SMA, yang berlokasi
                    di Jalan Dwiwarna No 1-3 Jakarta Pusat. Berdiri di Perumahan Metland Ujung Tahun 2000 Berlokasi di
                    Blok F4.</p>
            </div>
            <div class="row mb-5">
                <div class="col ps-4">
                    <div class="row content-sejarah">
                        <p>1.&nbsp;Nama Sekolah</p>
                        <p>2.&nbsp;Nomor Identitas Sekolah (NIS)</p>
                        <p>3.&nbsp;Nomor Statistik Sekolah (NSS)</p>
                        <p>4.&nbsp;Nomor Pokok Sekolah Nasional</p>
                        <p>5.&nbsp;Alamat Sekolah</p>
                        <p>&emsp;Kecamatan</p>
                        <p>&emsp;Kotamadya</p>
                        <p>&emsp;Propinsi</p>
                        <p>&emsp;Kode Pos</p>
                        <p>&emsp;Telepon/Faks</p>
                        <p>&emsp;E-mail</p>
                        <p>6.&nbsp;Status Sekolah</p>
                        <p>7.&nbsp;Nama Yayasan</p>
                        <p>8.&nbsp;Berdiri Sekolah</p>
                        <p>9.&nbsp;Luas Tanah</p>
                        <p>10.Luas Bangunan</p>
                        <p>11.&nbsp;Status Tanah & Bangunan</p>
                    </div>
                </div>
                <div class="col pe-4">
                    <div class="row content-sejarah">
                        <p>: SANTO YOSEPH</p>
                        <p>: 3020164080010</p>
                        <p>: 302016406202</p>
                        <p>: 20103196</p>
                        <p>: Perumahan Metland Blok F-4 Ujung Menteng</p>
                        <p>: Cakung</p>
                        <p>: Jakarta Timur</p>
                        <p>: DKI Jakarta</p>
                        <p>: 13960</p>
                        <p>: 021-4604716</p>
                        <p>: smasantoyoseph2000@gmail.com</p>
                        <p>: Swasta</p>
                        <p>: Santo Yoseph Jaya</p>
                        <p>: 1985</p>
                        <p>: 2850 M<sup>2</sup></p>
                        <p>: 3187 M<sup>2</sup></p>
                        <p>: Milik Sendiri</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
