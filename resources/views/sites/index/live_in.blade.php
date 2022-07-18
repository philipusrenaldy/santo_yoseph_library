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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elements.css')}}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/program.css') }}" rel="stylesheet">
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

    <main class="py-0">
        <!-- Image Intro Big Start -->
        <div class="intro-section-program section overlay background-program-3">
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
                                <h2 class="title">Live In Program</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image Intro Big End -->
        <div class='cd-tabs'>
            <div class='container-no-mp'>
                <div class='row'>
                    <div class='col-md-12'>
                        <nav>
                            <ul class='cd-tabs-navigation'>
                                <li><a data-content="about" class="selected" href="#0">Tentang Program</a></li>
                                <li><a data-content="tujuan" href="#0">Tujuan Program</a></li>
                                <li><a data-content="contoh" href="#0">Contoh Kegiatan</a></li>
                                <li><a data-content="gallery" href="#0">Gallery</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class='container mt-4'>
                <div class='row'>
                    <div class='col-md-12'>
                        <ul class='cd-tabs-content'>
                            <li class='selected' data-content='about'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Tentang Program</h1>
                                        <p>Live in merupakan kegiatan yang bermanfaat untuk mengenali dan menggali serta
                                            mengalami nilai kehidupan masyarakat pedesaan. Kegiatan ini diharapkan dapat
                                            meningkatkan kepekaan sosial, meningkatkan hardiness, resiliensi, membentuk
                                            karakter positif, ataupun sarana pendidikan multikultural dan plural.
                                            Catatan ini akan menggambarkan manfaat kegiatan live in sebagai bentuk
                                            pendidikan multikultural yang menjadi pedoman utama bagi terwujudnya
                                            masyarakat multikultural, selain itu menjadikan idiologi yang mengagumkan
                                            dalam bentuk perbedaan dan kesederajatan antar individu. Dari sinilah kita
                                            secara bersama bisa membentuk tatalaksana kehidupan masyarakat yang damai
                                            dan harmonis, meskipun terbentuk dari beraneka ragam latar belakang
                                            kehidupan dan kebudayaan. Sebagai pelaksanaan live in yang sudah dilakukan
                                            peserta SMA Santo Yoseph Jakarta Timur meliputi desa:</p>
                                        <p>> Girikerto Turi, Sleman.</p>
                                        <p>> Jargen Argomulyo, Bandul (2 kali).</p>
                                        <p>> Boro Kalibawang, Kulon Progo.</p>
                                        <p>> Gubung Selo Merapi, Muntilan, Magelang (3 kali).</p>
                                        <p>Hasil penelitian menunjukkan live in sebagai salah satu sarana pembelajaran
                                            multikultural cukup efektif mengkonfirmasi stereotipe (keseimbangan) yang
                                            dimiliki individu, dan dapat membentuk stereotipe yang lebih positif, ketika
                                            individu memiliki kemauan dan keinginan berinteraksi dengan multi etnis lain
                                            di dalam aktivitasnya.</p>
                                    </div>
                                </div>
                            </li>
                            <li data-content='tujuan'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Tujuan Program</h1>
                                        <p>Adapun tujuan dari program live di pedesaan antara lain:</p>
                                        <p>> Menumbuhkan sikap hidup sederhana, bekerja keras, gotong royong,
                                            bertanggung jawab, tolong menolong, peduli dengan lingkungan, bekerjasama,
                                            sikap hidup mandiri, saling menghormati dan sikap hidup jujur.</p>
                                        <p>> Menanamkan semangat kepedulian dalam diri peserta untuk membentuk karakter,
                                            menjalani hidup apa adanya dengan beradaptasi dengan masyarakat di
                                            lingkungan alam pedesaan.</p>
                                        <p>> Memaknai rasa toleransi dan untuk beradaftasi rasa kekeluargaan, belajar
                                            tatacara hidup bermasyarakat di pedesaan, dan keharmonisan kebersamaan, dan
                                            menghargai perjuangan para orang tua yang telah menyediakan segala fasilitas
                                            bagi mereka.</p>
                                        <p>> Merasakan suasana baru yang belum pernah mereka rasakan dalam mendapatkan
                                            pelajaran untuk bisa mandiri, bertanggung jawab dan menghormati orang
                                            lain.</p>
                                        <p>> Menerima kesederhanaan, kejujuran dan juga kebersamaan masyarakat pedesaan
                                            juga diharapkan dapat menginspirasi para peserta setelah selesai kegiatan
                                            Live in di desa.</p>
                                    </div>
                                </div>
                            </li>
                            <li data-content='contoh'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Contoh Kegiatan Program</h1>
                                        <p>Aktivitas Selama Live in, peserta diajak hidup bersama warga desa, mengikuti
                                            kegiatan dalam hidup kesehariannya di setiap keluarga selama peserta berada
                                            di pondokkan. Kreatifitas dan aktifitas antara keluarga yang satu dengan
                                            yang lainnya tentunya berbeda-beda. Dengan demikian di dalam kegiatan Live
                                            in ini diharapkan peserta bisa mengkuti, mempelajari, memahami, mengenal,
                                            merasakan dan merefleksikan kegiatan keluarga yang ditinggali. Program Live
                                            in merupakan proses pembelajaran untuk mengenal lingkungan bersama penduduk
                                            di sekitar hidup peserta, dengan mengikuti semua kegiatan mereka sejak dari
                                            rumah maupun di tempat orang tua ampu bekerja di luar rumah. Sebagai pelajar
                                            semestinya bisa menempatkan diri dalam pola kehidupan dan nilai-nilai budaya
                                            masyarakat setempat, melalui bimbingan orang tua ampu di mana peserta
                                            berinteraksi bersama keluarga.</p>
                                        <p>Contoh Kegiatannya program Live in di desa antara lain:</p>
                                        <p>> Kegiatan Pertanian seperti: Tanam padi, menjemur padi, memandikan kerbau,
                                            sapi selesai bajak sawah, berkebun, menyiangi rumput.</p>
                                        <p>> Kegiatan Perkebunan: tanam pohon kopi, tanam palawija, mencari kayu bakar,
                                            dan lain-lain</p>
                                        <p>> Kegiatan Seni Budaya seperti belajar menari, membatik, membuat anyaman,
                                            belajar gamelan, membuat kerajinan.</p>
                                        <p>> Kegiatan Kemadirian seperti: belajar memasak, belajar membuat makanan,
                                            belajar membuat makanan tradisional.</p>
                                        <p>> Kegiatan Peternakan: budidaya ikan, beternak kambing, babi, kelinci, ayam,
                                            dan lain-lain.</p>
                                        <p>> Kegiatan fun Game seperti: tangkap ikan, sepak bola lumpur, tangkap bebek,
                                            fun game utbound, tracking pedesaan</p>
                                    </div>
                                </div>
                            </li>
                            <li data-content='gallery'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Gallery</h1>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
