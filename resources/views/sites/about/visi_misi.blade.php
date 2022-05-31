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
<body class="visimisibody">
<div id="app">
    <div class="header-section header-transparent sticky-header section">
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

    <main class="py-0">
        <!-- Image Intro Big Start -->
        <div class="intro-section-vismis section overlay background-sanyo">
            {{--            <div class="col">--}}
            {{--                <div class=""--}}
            {{--                    style="--bs-breadcrumb-divider: '>';"--}}
            {{--                    aria-label="breadcrumb">--}}
            {{--                    <ol class="breadcrumb">--}}
            {{--                        <li class="breadcrumb-item"><a href="{{ url('/about') }}">About Us</a></li>--}}
            {{--                        <li class="breadcrumb-item active" aria-current="page">Sejarah Sekolah St. Yoseph</li>--}}
            {{--                    </ol>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="intro-content mt-xl-8 mt-lg-8 mt-md-8 mt-sm-8 mt-xs-8">
                                <h2 class="title">Visi & Misi</h2>
                                <h3 class="sub-title">SMA St. Yoseph</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image Intro Big End -->

        <div class="new-section">
            <div class="container">
                <div class="row">
                    <h3 class="mini-vismis align-middle">VISI & MISI</h3>
                </div>
            </div>
        </div>

        <div class="container mt-4 mb-4">
            <div class="row">
                <h2 class="vismis-header">VISI</h2>
            </div>
            <div class="row mb-4">
                <div class="col vismis-item">
                    <ul>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;Unggul dalam prestasi berdasarkan iman dan
                            kasih.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <h2 class="vismis-header">MISI</h2>
            </div>
            <div class="row mb-4">
                <div class="col vismis-item">
                    <ul>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;Meningkatkan keimanan terhadap Tuhan Yang Maha
                            Esa.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;Membentuk insan berbudi pekerti luhur,
                            berdisiplin tinggi, berkebangsaan, berbudaya, bijakasana dan mandiri.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;Mengembangkan keunggulan ekstrakulikuler
                            secara intensif dan berkelanjutan.
                        </li>
                        <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;Meningkatkan prestasi akademik sehingga mampu
                            melanjutkan ke perguruan tinggi yang bermutu.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </main>
</div>
</body>
</html>
