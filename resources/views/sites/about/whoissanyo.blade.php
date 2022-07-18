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
            <li class="breadcrumb-item active" aria-current="page">Siapa Santo Yoseph ?</li>
        </ol>
    </div>

    <main class="py-0">
        <div class="container">
            <div class="row">
                <div class="col who-is-content">
                    <h1 class="content-header">Siapa Santo Yoseph ?</h1>
                    <p class="ti-5">St. Yosef adalah seorang santo besar. Ia adalah bapa asuh Yesus dan suami Santa Perawan Maria. Yosef
                        memperoleh hak istimewa untuk merawat Putra Allah sendiri, Yesus, serta BundaNya, Maria. Santo Yosef
                        adalah seorang yang miskin sepanjang hidupnya. Walaupun darah bangsawan yang mengalir dalam tubuhnya
                        dapat ditelusuri sampai pada Raja Daud bapa leluhurnya, kemiskinan membuat ia harus bekerja keras
                        dalam bengkel tukang kayu demi menghidupi Keluarga Kudus yang dipercayakan Allah kepadanya.</p>
                    <p class="ti-5">Ia amat mengasihi Yesus dan Maria. Kesucian dan kesalehannya terlihat di dalam ketaatannya pada
                        kehendak Allah untuk menerima Maria sebagai istrinya serta mendampingi Maria dalam membesarkan
                        Yesus, Putera Allah yang menjadi manusia. Kesederhanaannya terlihat dalam pekerjaannya sebagai
                        seorang tukang kayu, dan cara hidupnya yang biasa-biasa saja di dalam masyarakat.</p>
                    <p class="ti-5">Dalam pribadi Yoseph, pekerjaan tangan memperoleh suatu dimensi Ilahi. Kerja meningkatkan harkat dan
                        martabat manusia sebagai ciptaan Allah dan memungkinkan manusia turut serta di dalam karya
                        penciptaan dan penyelamatan Allah.</p>
                    <p class="ti-5">Banyak negara menyisihkan satu hari dalam setahun khusus untuk menghormati para pekerja/buruh. Hal
                        tersebut guna meningkatkan martabat dan penghargaan atas kerja. Gereja memberikan kepada kita
                        seorang teladan mengagumkan bagi para pekerja, yaitu St. Yoseph.</p>
                    <p class="ti-5">Karena itulah pada tahun 1955, Paus Pius XII memaklumkan pesta St. Yosef Pekerja untuk dirayakan
                        setiap tahun pada tanggal 1 Mei, sekaligus menetapkannya sebagai Hari Pekerja/Buruh. Santo Yoseph
                        selanjutnya ditetapkan sebagai pelindung para buruh yang harus bekerja keras setiap hari untuk
                        memenuhi kebutuhannya.</p>
                </div>
                <div class="col">
                    <img class="image-santo align-items-end" src="../images/patung.png" alt="">
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
