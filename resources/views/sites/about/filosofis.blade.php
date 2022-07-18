!doctype html>
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
            <li class="breadcrumb-item active" aria-current="page">Kebijakkan Sekolah</li>
        </ol>
    </div>

    <main class="py-0">
        <div class="container">
            <div class="row">
                <h1 class="content-header">Filosofis Pendidikan</h1>
            </div>
            <div class="row mb-4 paragraf-item">
                <p>A.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PENGERTIAN CIMPLICITAS, EFFITIT</p>
                <p class="ti-5">Visi Unggul Dalam Prestasi Berlandaskan Iman dak Kasih Dari bahasa Yunani, kata philos yang artinya
                    cinta dan Sophia yang artinya kebijaksanaan atau kebenaran. Jadi, filosofis adalah cinta akan
                    kebijaksanaan atau kebenaran yang menyatakan suatu pandangan secara sistematis tentang alam semesta
                    serta segala macam ilmu pengetahuan.</p>
                <p class="mt-4">B.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LANDASAN</p>
                <p class="ti-5">Pendidikan adalah upaya mengembangkan potensi-potensi manusiawi peserta didik baik potensi fisik,
                    potensi cipta, rasa, maupun karsanya, agar potensi itu menjadi nyata dan dapat berfungsi dalam
                    perjalanan hidup. Pendidikan adalah cita-cita kemanusiaan bertujuan menyiapkan pribadi dalam
                    keseimbangan, kesatuan, organis, harmonis, dinamis. guna mencapai tujuan hidup kemanusiaan.</p>
                <p>Landasan filosofis pendidikan berisi tentang konsep-konsep pendidikan yang seharusnya atau yang
                    dicita-citakan :</p>
                <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Idealisme</p>
                <p class="p-40">Bahwa idealisme pada hakikatnya bersifat spiritual. Karena manusia itu adalah makhluk yang berpikir,
                    yang memiliki tujuan hidup, dan yang hidup dalam aturan moral yang diperoleh dengan cara mengingat
                    kembali melalui intuisi, dan diperintah melalui nilai moral imperatif yang bersumber dari realitas
                    yang mutlak.</p>
                <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Realisme</p>
                <p class="p-40">Bahwa dunia ini adalah materi yang hadir dengan sendirinya, yang tertata dalam hubungan-hubungan di
                    luar campur tangan manusia. Realisme diperoleh dari pengalaman dan penggunaan akalnya, serta tingkah
                    laku manusianya diatur oleh hukum alam dan pada taraf yang rendah diatur oleh kebijaksanaan yang
                    teruji secara konvensional.</p>
                <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pragmatisme</p>
                <p class="p-40">Pada dasarnya, pragmatisme merupakan suatu sikap hidup, suatu metode dan suatu kebijakan yang
                    digunakan dalam mempertimbangkan nilai sesuatu ide dan kebenaran sesuatu keyakinan secara praktis.
                    Esensi diri pragmatisme ini terletak pada metodenya yang sangat manuasiawi dimana sangat menekankan
                    pada metode dan sikap dan menggunakan ilmu pengetahuan modern sebagai dasar dari suatu
                    kebijakan.</p>
                <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pancasila</p>
                <p class="p-40">Pancasila sebagai falsafah Negara, patut menjadi jiwa bangsa Indonesia, menjadi semangat dalam
                    berkarya pada segala bidang kehidupan</p>
                <p class="p-40">Pasal 2 UU-RI No. 2 Tahun 1989 menetapkan bahwa pendidikan Nasional berdasarkan Pancasila dan
                    Undang-Undang Dasar 1945. Penjelasan UU-RI No. 2 Tahun 1989, yang menegaskan bahwa pembangunan
                    nasioanal termasuk dibidang pendidikan adalah pengamalan pancasila, dan untuk itu pendidikan
                    nasional mengusahakan antara lain: ” Pembentukan manusia Pancasila sebagai manusia pembangunan yang
                    tinggi kualitasnya dan mampu mandiri”.</p>
                <p class="p-40">TAP MPR-RI No.II/MPR/1978 tentang Pedoman Penghayatan Pengamalan Pancasila menegaskan pula bahwa
                    pancasila itu adalah jiwa seluruh rakyat Indonesia, kepribadian bangsa Indonesia, pandangan hidup
                    bangsa Indonesia, dan dasar Negara Republik Indonesia. Pancasila sebagai sumber dari segala gagasan
                    mengenai wujud bangsa manusia dan masyarakat yang dianggap baik, sumber dari segala sumber nilai
                    yang menjadi pangkal serta bermuara dari setiap keputusan dan tindakan dalam pendidikan dengan kata
                    lain, Pancasila sebagai sumber sistem nilai dalam pendidikan.</p>
                <p class="mt-4">C.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pendidikan Katolik</p>
                <p class="ti-5">Pihak Vatikan melalui Kongregasi untuk Pendidikan Katolik mengeluarkan suatu dokumen yang berjudul
                    The Catholic School (Sekolah Katolik), yang menjabarkan tentang garis-garis besar sehubungan dengan
                    pendidikan Katolik. Secara mendasar, ciri Katolik dari suatu sekolah Katolik nampak dalam konsep
                    Kristiani tentang hidup yang terpusat pada Kristus. <em>((Sacred Congregation for Catholic Education,
                    The Catholic School, 10))</em> Maksudnya adalah, Kristus menjadi pondasi dari kegiatan pendidikan di
                    sekolah Katolik, dan Kristus memberikan arti yang baru bagi hidup dan membantu semua pihak yang
                    terlibat dalam kegiatan belajar mengajar untuk mengarahkan diri mereka kepada Kristus, sesuai ajaran
                    Injil. Sekolah-sekolah Katolik mempunyai tugas untuk melengkapi pembentukan Kristiani dari para
                    muridnya. Tugas ini menjadi penting dewasa ini, karena tugas pembentukan anak-anak tidak lagi dapat
                    secara memadai diberikan oleh keluarga dan masyarakat. <em>((Lih. The Catholic School, 12))</em></p>
                <p>Ciri-ciri sekolah Katolik, oleh Tahta Suci ((lih. Archbishop J. Michael Miller CSB, The Holy See’s
                    Teaching on Catholic Schools)), yaitu sekolah yang:</p>
                <p class="p-40">1. Diinspirasikan oleh visi adikodrati</p>
                <p class="p-40">2. Didirikan atas dasar antropologi Kristiani</p>
                <p class="p-40">3. Dihidupi oleh kesatuan persekutuan dan komunitas</p>
                <p class="p-40">4. Diresapi oleh pandangan Katolik di seluruh kurikulumnya</p>
                <p class="p-40">5. Didukung oleh kesaksian Injil</p>
                <p class="ti-5">Paus Yohanes Paulus II di tahun 2004 menyatakan bahwa setiap institusi Katolik menjadi benar-benar
                    Katolik, artinya semakin Katolik dalam pemahamannya dan semakin Katolik dalam identitasnya. Maka
                    sekolah-sekolah Katolik, yang mengemban tugas penting dalam mewujudkan misi Gereja untuk
                    memperkenalkan Kristus kepada dunia dan untuk menyampaikan Terang Kristus kepada semua orang.</p>
                <p class="mt-4">D.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Holistika Fokus kepada manusia secara keseluruhan</p>
                <p class="ti-5">“Proses pendidikan SMA Santo Yoseph berfokus pada pribadi manusia dalam keseluruhannya, transenden,
                    dalam identitas historisnya. Dengan proyek pendidikan yang diinspirasikan oleh Injil, SMA Santo
                    Yoseph dipanggil menanggapi tantangan ini [yaitu kecenderungan anggapan bahwa pendidikan dikatakan
                    harus terlepas dari agama], dengan keyakinan bahwa “hanya dalam misteri Sang Fiman yang menjadi
                    manusia-lah, misteri manusia sungguh-sungguh menjadi jelas.” <em>((Sacred Congregation for Catholic
                    Education, The Catholic School, 10))</em></p>
                <p class="ti-5">“Karena itu, sekolah Katolik berkomitmen untuk perkembangan manusia seutuhnya, sebab di dalam
                    Kristus, manusia yang sempurna, semua manusia menemukan kepenuhannya dan kesatuannya. Di sini
                    terletak secara khusus sifat Katolik dari sekolah itu. Tugas sekolah Katolik untuk menumbuhkan
                    nilai-nilai manusiawi… dalam kesesuaian dengan misi khususnya untuk melayani semua manusia,
                    mempunyai asalnya dari figur Kristus. Ia adalah Seseorang yang menghormati manusia, memberikan makna
                    bagi hidup manusia, dan adalah teladan yang ditawarkan oleh sekolah Katolik kepada para muridnya.
                    <em>((Sacred Congregation for Catholic Education, The Catholic School, 35))</em></p>
                <p class="p-40">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hak-hak azasi manusia, martabat sebagai anak Tuhan, solidaritas dan kasih</p>
                <p class="p-40 ti-5">“Dalam dunia yang beraneka ragam, para pendidik Katolik harus dengan sadar mendorong aktivitasnya
                    dengan konsep Kristiani tentang pribadi manusia, dalam persatuan dengan Magisterium Gereja. Konsep
                    itu termasuk konsep untuk mempertahankan hak-hak azasi manusia, bahwa pribadi manusia mempunyai
                    martabat sebagai anak Tuhan. Konsep ini memberikan kemerdekaan yang sepenuhnya, [yaitu] dimerdekakan
                    dari dosa oleh Kristus sendiri, melalui kasih. Konsep ini menghasilkan kepastian akan hubungan
                    solidaritas di antara semua manusia; melalui sikap saling mengasihi dan komunitas gerejawi. Konsep
                    ini mencanangkan pengembangan yang sepenuhnya dari semua yang bersifat manusiawi, sebab kita telah
                    dijadikan penguasa dunia oleh Sang Penciptanya. Akhirnya, konsep ini memperkenalkan Kristus, Putera
                    Allah yang menjelma dan Manusia yang sempurna, sebagai baik teladan maupun sarana. Bagi semua orang,
                    meneladani Kristus adalah sumber yang tak pernah habis, untuk mencapai kesempurnaan pribadi maupun
                    kesempurnaan kelompok.” <em>((The Sacred Congregation for Catholic Education, Lay Catholics in Schools:
                    Witnesses to Faith, 18)) </em></p>
                <p class="p-40">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Spiritualitas Kesahajaan dan Kerendahatian</p>
                <p class="p-40 ti-5">Spiritualitas berkaitan dengan kata spirit atau roh yakni sesuatu yang menggerakkan seseorang dalam
                    melaksanakan sebuah tugas, tanggung jawab atau fungsi tertentu di dalam kehidupan bersama.
                    Spiritualitas sekolah menjadi semangat bersama yang dihayati dan dihidupi oleh orang tua murid untuk
                    melangkah bersama sebagai perwujudan suatu tujuan sekolah. Spiritualitas sekolah St. Yoseph adalah
                    St. Yoseph. Dalam perayaan Gerejawi, Hari Raya St. Yoseph selalu jatuh pada tanggal 19 Maret.
                    Peristiwa yang berdekatan dengan Hari Raya St Maria menerima Kabar Sukacita (25 Maret) memiliki
                    kaitan yang penting. Paroki memilih nama ini juga karena ada semangat yang bisa dipetik darinya.
                    Pokok semangat pelindung dapat ditelusuri dari riwayat hidup maupun dari kisah St. Yoseph dalam
                    Injil. Dari kisah Injil dapat disebutkan bahwa Yoseph adalah tokoh yang prasaja dan rendah hati
                    serta berani bekerja dan mempunyai integritas (mengambil resiko, konsekuen dengan imannya). Marilah
                    kita belajar dari dan meneladani Bapa Yoseph.</p>
            </div>
        </div>
    </main>
</div>
</body>
</html>
