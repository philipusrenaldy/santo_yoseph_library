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
            <li class="breadcrumb-item active" aria-current="page">Sambutan Kepala Sekolah</li>
        </ol>
    </div>

    <main class="py-0">
        <div class="container">
            <div class="row sambutan">
                <h1 class="content-header">Sambutan Kepala Sekolah</h1>
                <p>Salam Damai Sejahtera Dalam Tuhan</p>
                <p>Puji syukur kami panjatkan kehadirat Tuhan Yang Maha Esa, karena oleh perkenaanNYa maka website ini
                    dapat terus hadir untuk menginformasikan perkembangan pendidikan di SMA Santo Yoseph bagi orang tua
                    dan siswa pada khususnya serta masyarakat pada umumnya.</p>
                <p>Tuntutan masyarakat terhadap mutu pelayanan pendidikan dari waktu ke waktu makin tinggi. Oleh karena
                    itu SMA Santo Yoseph dengan segenap tenaga berusaha meningkatkan mutu pelayanan pendidikan agar bisa
                    menjawab tuntutan masyarakat tersebut.</p>
                <p>Seiring dengan perkembangan ilmu dan teknologi yang semakin pesat, maka SMA Santo Yoseph melakukan
                    inovasi perubahan dalam berbagai aspek agar tidak ditinggalkan oleh masyarakat yang hidup dalam era
                    globalisasi. Menyadari hal tersebut, sekolah sebagai agen perubahan di masyarakat harus senantiasa
                    melakukan perubahan sesuai dengan derap dinamika perkembangan masyarakat dalam perkembangan
                    IPTEK.</p>
                <p>Teknologi Informasi berbasis komputer adalah salah satu media yang cukup efektif dalam mengelola
                    sistem informasi akademik sekolah. Penggunaan internet dewasa ini juga mulai meningkat di dunia
                    pendidikan. Penggunaan internet ini tidak hanya sekedar mencari informasi di internet saja, tetapi
                    juga sudah menerapkan teknologi internet ini sebagai media publikasi sekolah dalam meningkatkan mutu
                    dan kualitas sekolah.</p>
                <p>Mensikapi perkembangan tersebut, SMA Santo Yoseph setiap tahun mencoba memperbarui website yang
                    dimiliki agar lebih bermanfaat bagi kemajuan sekolah, serta semua warga sekolah.</p>
                <p>Semoga melalui website ini Instansi Pendidikan yang bertujuan untuk menghasilkan manusia yang Unggul
                    Dalam Prestasi Berlandaskan Iman dan Kasih dapat terwujud. Saya mengajak para penanggung jawab
                    website, Guru, Siswa dan Masyarakat untuk lebih bijak memanfaatkan website ini. Mari kita gunakan
                    website ini sebagai media yang mendidik, dan semuanya semata-mata demi kemuliaaan nama Tuhan.</p>
                <p>Salam damai,</p>
                <p>Totok Susiantara M.M</p>
            </div>
            <div class="row align-items-center justify-content-md-end mt-5 mb-5">
                <div class="col-md-auto">
                    <img class="image-totok align-items-end" src="../images/kepsek.png" alt="">
                </div>
                <div class="col col-4">
                    <h3 class="nama_kepsek">Drs. Totok Susiantara M.M</h3>
                    <p class="jabatan">Kepala Sekolah</p>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
