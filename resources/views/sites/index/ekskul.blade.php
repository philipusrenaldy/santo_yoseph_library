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
        <div class="intro-section-program section overlay background-program-2">
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
                                <h2 class="title">Extracurricular Program</h2>
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
                                <li><a data-content="basket" class="selected" href="#0">Basket</a></li>
                                <li><a data-content="badminton" href="#0">Badminton</a></li>
                                <li><a data-content="futsal" href="#0">Futsal</a></li>
                                <li><a data-content="musik" href="#0">Musik</a></li>
                                <li><a data-content="dance" href="#0">Dance</a></li>
                                <li><a data-content="desain" href="#0">Desain Grafis</a></li>
                                <li><a data-content="martial" href="#0">Martial Arts</a></li>
                                <li><a data-content="mandarin" href="#0">Mandarin</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class='container mt-4'>
                <div class='row'>
                    <div class='col-md-12'>
                        <ul class='cd-tabs-content'>
                            <li class='selected' data-content='basket'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Bola Basket</h1>
                                        <p>Bola basket adalah salah satu olah raga yang paling digemari oleh penduduk
                                            Amerika Serikat dan penduduk di belahan bumi lainnya, antara lain di Amerika
                                            Selatan, Eropa Selatan, Lithuania, dan juga di Indonesia tidak terkecuali di
                                            SMA Santo Yoseph. Bola Basket merupakan salah satu ekstrakurikuler unggulan
                                            di SMA Santo Yoseph, diharapkan dengan adanya ekstrakulikuler ini siswa
                                            dapat mengembangkan bakatnya dalam bidang olahraga. </p>
                                        <br>
                                        <h1>Gallery Kegiatan</h1>
                                    </div>
                                </div>
                            </li>
                            <li data-content='badminton'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Badminton</h1>
                                        <p>Bulutangkis atau lebih dikenal badminton merupakan salah satu cabang olahraga
                                            yang paling digemari oleh masyarakat Indonesia. Lewat cabang olah raga
                                            Badminton dapat mengangkat Indonesia di dunia Internasional. Mengetahui hal
                                            ini, SMA Santo Yoseph menyediakan ekstrakulikuler badminton sebagai wadah
                                            bagi siswa yang memiliki bakat dan minat tinggi pada olahraga ini untuk
                                            dapat menyalurkan hobi mereka dan diharapkan dapat membuat prestasi
                                            non-akamdeik.</p>
                                        <br>
                                        <h1>Gallery Kegiatan</h1>
                                    </div>
                                </div>
                            </li>
                            <li data-content='futsal'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Futsal</h1>
                                        <p>Futsal adalah salah satu olahraga paling populer di kalangan anak muda
                                            sekarang, dikarenakan olahraga ini merupakan turunan dari olahraga sepak
                                            bola dengan jumlah pemain yang lebih sedikit dan luas lapangan yang lebih
                                            kecil. Ekstrakurikuler futsal diadakan dengan tujuan menyediakan wadah untuk
                                            siswa menyalurkan hobinya dan menghadirkan corak positif kepada para siswa
                                            yaitu sifat-sifat sportifitas serta mencetak bibit-bibit baru olahragawan
                                            yang akan berprestasi di tingkat lokal, nasional maupun internasional.</p>
                                        <br>
                                        <h1>Gallery Kegiatan</h1>
                                    </div>
                                </div>
                            </li>
                            <li data-content='musik'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Musik (Kolintang)</h1>
                                        <p>Musik (Kolintang) merupakan estrakulikuler kesenian yang didirikan oleh SMA
                                            Santo Yospeh yang menggunakan alat musik kolintang. Para siswa akan dilatih
                                            untuk memainkan alat musik ini dengan tujuanuntuk memlakukan peformance pada
                                            beberapa perayaan penting. Alat musik kolintang ini tidak hanya dijadikan
                                            sebagai suatu ekskul, tetapi juga sebagai media pembelajaran bagi siswa
                                            dalam mempelajari mata pelajaran kesenian. Hal ini dilakukan dengan harapan,
                                            siswa mampu mengenal alat-alat musik tradisonal indonesia.</p>
                                        <br>
                                        <h1>Gallery Kegiatan</h1>
                                    </div>
                                </div>
                            </li>
                            <li data-content='dance'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Modern Dance</h1>
                                        <p>Pada eksrakulikuler modern dance, siswa akan diajarkan berbagai macam gerakan
                                            menari dari berbagai genre. Siswa tidak hanya belajar gerakan dance saja,
                                            tetapi siswa akan diajarkan untuk menjadi seorang dancer yang baik, yang
                                            tidak hanya dapat mengikuti lagu dan menghafal gerakan, tetapi memerlukan
                                            teknik, mental, dan fisik yang kuat. Siswa juga akan diikutsertakan dalam
                                            lomba-lomba dance di luar sekolah. Hal ini bisa memberikan banyak pelajaran
                                            dan pengalaman bagi siswa agar siswa terpacu untuk menjadi lebih baik
                                            lagi.</p>
                                        <br>
                                        <h1>Gallery Kegiatan</h1>
                                    </div>
                                </div>
                            </li>
                            <li data-content='desain'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Desain Grafis</h1>
                                        <p>Perkembangan Information dan Teknologi saat ini sangat cepat sekali, oleh
                                            karena itu perlu adanya pembekalan bagi para pelajar di SMA Santo Yoseph.
                                            Ekstrakurikuler Desain Grafis merupakan ekstrakulikuler yang membahas dan
                                            mempelajari bidang multimedia seperti membuat desain logo, poster, dan
                                            lain-lain. Melalui ekstrakurikuler Desain Grafis ini di harapkan pelajar
                                            yang mengikuti ekstrakurikuler ini dapat meningkatkan kreatifitas mereka dan
                                            dapat bersaing dalam perlombaan desain tingat nasional maupun
                                            internasional.</p>
                                        <br>
                                        <h1>Gallery Kegiatan</h1>
                                    </div>
                                </div>
                            </li>
                            <li data-content='martial'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Martial Arts</h1>
                                        <p>Pada eksrakulikuler martial arts, siswa akan diajarkan beberapa macam
                                            beladiri, seperti karate, taekwondo, dll. Ekstrakulikuler ini akan mewadahi
                                            para siswa dan siswi yang memiliki ketertarikan pada bidang olahraga bela
                                            diri. Ekstrakulikuler ini tidak hanya mengajarkan gerakkan bela diri,
                                            melainkan nilai kedisiplinan dan nilai tanggung jawab. Adapun tujuan lain
                                            dari diselenggarakannya ekstrakulikuler ini adalah untuk pembinaan prestasi
                                            pada bidang non-akademik.</p>
                                        <br>
                                        <h1>Gallery Kegiatan</h1>
                                    </div>
                                </div>
                            </li>
                            <li data-content='mandarin'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Bahasa Mandarin</h1>
                                        <p>Ekstrakulikuler Bahasa Mandarin bertujuan agar siswa dan siswi SMA Santo
                                            Yoseph dapat menggunakan bahasa mandarin secara lisan dan tulisan. Adapun
                                            beberapa pembelajaran yang dilakukan adalah mendengarkan dialog percakapan,
                                            melatih penulisan hanzi, melatih pelafalan aksara mandarin (shengdiao), dan
                                            lain-lain. Selain itu, siswa dan sisiwi tidak hanya belajar mengnai bahasa
                                            tetapi kebudayaan, seperti mengenal lokasi-lokasi bersejarah, objek-objek
                                            wisata, dan makanan khas.</p>
                                        <br>
                                        <h1>Gallery Kegiatan</h1>
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
