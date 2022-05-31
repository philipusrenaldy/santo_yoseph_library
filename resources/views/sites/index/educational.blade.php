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
                        <a href="#" class="btn btn-account">Account</a>
                    </div>
                    <!-- Header Right End -->

                </div>
            </div>
        </div>
    </div>

    <main class="py-0">
        <!-- Image Intro Big Start -->
        <div class="intro-section-program section overlay background-program-1">
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
                                <h2 class="title">Educational Program</h2>
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
                                <li><a data-content="kurikulum" class="selected" href="#0">Kurikulum</a></li>
                                <li><a data-content="kegiatan_spiritualitas" href="#0">Kegiatan Spiritualitas</a></li>
                                <li><a data-content="osis" href="#0">Osis SMA</a></li>
                                <li><a data-content="bimbingan" href="#0">Bimbingan Karir</a></li>
                                <li><a data-content="campus_tour" href="#0">Campus Tour</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class='container mt-4'>
                <div class='row'>
                    <div class='col-md-12'>
                        <ul class='cd-tabs-content'>
                            <li class='selected' data-content='kurikulum'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Kurikulum</h1>
                                        <p>Kurikulum merupakan seperangkat rencana dan pengaturan mengenai tujuan, isi,
                                            bahan pelajaran, dan cara yang digunakan sebagai pedoman penyelenggaraan
                                            kegiatan pembelajaran untuk mencapai tujuan pendidikan. Tujuan tersebut
                                            meliputi tujuan pendidikan nasional serta kesesuaian dengan kekhasan,
                                            kondisi dan potensi daerah, satuan pendidikan dan peserta didik. Oleh karena
                                            itu, kurikulum disusun oleh satuan pendidikan untuk memungkinkan penyesuaian
                                            program pendidikan dengan kebutuhan dan potensi yang ada di daerah.</p>
                                        <p>Pengembangan Kurikulum Tingkat Satuan Pendidikan yang beragam mengacu pada
                                            standar nasional pendidikan untuk menjamin pencapaian tujuan pendidikan
                                            nasional. Standar nasional pendidikan terdiri atas standar isi, proses,
                                            kompetensi lulusan, tenaga kependidikan, sarana dan prasarana, pengelolaan,
                                            pembiayaan, dan penilaian pendidikan. Dua dari delapan standar nasional
                                            pendidikan tersebut, yaitu standar isi (SI) dan standar kompetensi lulusan
                                            (SKL) merupakan acuan utama bagi satuan pendidikan dalam mengembangkan
                                            kurikulum.</p>
                                        <br>
                                        <h1>Organisasi Kompetensi</h1>
                                        <p>Mata pelajaran adalah unit organisasi terkecil dari Kompetensi Dasar. Untuk
                                            kurikulum SMA, organisasi Kompetensi Dasar dilakukan dengan cara
                                            mempertimbangkan kesinambungan antarkelas dan keharmonisan antarmata
                                            pelajaran yang diikat dengan Kompetensi Inti.
                                            Kompetensi Dasar SMA/MA diorganisasikan atas dasar pengelompokan mata
                                            pelajaran yang wajib diikuti oleh seluruh peserta didik dan mata pelajaran
                                            yang sesuai dengan bakat, minat, dan kemampuan peserta didik (peminatan).
                                            Substansi muatan lokal termasuk bahasa daerah diintegrasikan ke dalam mata
                                            pelajaran Seni Budaya. Substansi muatan lokal yang berkenaan dengan olahraga
                                            serta permainan daerah diintegrasikan ke dalam mata pelajaran Pendidikan
                                            Jasmani, Olahraga, dan Kesehatan. Sedangkan Prakarya dan Kewirausahaan
                                            merupakan mata pelajaran yang berdiri sendiri.</p>
                                        <br>
                                        <h1>Tujuan Satuan Pendidikan</h1>
                                        <h2>Visi</h2>
                                        <p class="panah">>&nbsp;&nbsp;Unggul dalam prestasi berdasarkan iman dan
                                            kasih.</p>
                                        <h2>Misi</h2>
                                        <p class="panah">>&nbsp;&nbsp;Meningkatkan keimanan terhadap Tuhan Yang Maha
                                            Esa.</p>
                                        <p class="panah">>&nbsp;&nbsp;Membentuk Insan berbudi perkerti luhur,
                                            berdisiplin tinggi, berkebangsaan, berbudaya, bijaksana dan mandiri.</p>
                                        <p class="panah">>&nbsp;&nbsp;Mengembangkan keunggulan ekstrakulikuler secara
                                            insentif dan berkelanjutan.</p>
                                        <p class="panah">>&nbsp;&nbsp;Meningkatkan prestasi akademik sehingga mampu
                                            melanjutkan ke perguruan tinggi yang bermutu.</p>
                                        <br>
                                        <h1>Struktur Kurikulum dan Beban Belajar</h1>
                                        <p>Struktur kurikulum menggambarkan konseptualisasi konten kurikulum dalam
                                            bentuk mata pelajaran, posisi konten/mata pelajaran dalam kurikulum,
                                            distribusi konten/mata pelajaran dalam semester atau tahun, beban belajar
                                            untuk mata pelajaran dan beban belajar per minggu untuk setiap peserta
                                            didik. Struktur kurikulum adalah juga merupakan aplikasi konsep
                                            pengorganisasian konten dalam sistem belajar dan pengorganisasian beban
                                            belajar dalam sistem pembelajaran. Pengorganisasian konten dalam sistem
                                            belajar yang digunakan adalah sistem semester sedangkan pengorganisasian
                                            beban belajar dalam sistem pembelajaran berdasarkan jam pelajaran per
                                            semester.
                                            Struktur kurikulum juga gambaran mengenai penerapan prinsip kurikulum
                                            mengenai posisi seorang siswa dalam menyelesaikan pembelajaran di suatu
                                            satuan atau jenjang pendidikan. Lebih lanjut, struktur kurikulum
                                            menggambarkan posisi belajar seorang siswa yaitu apakah mereka harus
                                            menyelesaikan seluruh mata pelajaran yang tercantum dalam struktur ataukah
                                            kurikulum memberi kesempatan kepada peserta untuk menentukan berbagai
                                            pilihan.</p>
                                        <h2>Struktur Kurikulum SMA terdiri atas:</h2>
                                        <p class="panah">>&nbsp;&nbsp;Kelompok mata pelajaran wajib yang diikuti oleh
                                            seluruh peserta didik .</p>
                                        <p class="panah">>&nbsp;&nbsp;Kelompok mata pelajaran peminatan yang diikuti
                                            oleh peserta didik sesuai dengan bakat, minat, dan kemampuannya.</p>
                                        <p class="panah">>&nbsp;&nbsp;Untuk MA dapat menambah dengan mata pelajaran
                                            kelompok peminatan keagamaan.</p>
                                        <br>
                                        <h1>Kelompok Mata Pelajaran Wajib</h1>
                                        <h2 class="text-center">STRUKTUR & MUATAN KURIKULUM SMA Santo Yoseph</h2>
                                        <h3>Kelas X Peminatan Matematika dan Ilmu Pengetahuan Alam (MIPA)</h3>
                                        <br>
                                        <h3>Kelas X Peminatan Ilmu Pengetahuan Sosial (IPS)</h3>
                                        <br>
                                        <h3>Kelas XI Peminatan Matematika dan Ilmu Pengetahuan Alam (MIPA)</h3>
                                        <br>
                                        <h3>Kelas XI Peminatan Ilmu Pengetahuan Sosial (IPS)</h3>
                                        <br>
                                        <h3>Kelas XII Peminatan Matematika dan Ilmu Pengetahuan Alam (MIPA)</h3>
                                        <br>
                                        <h3>Kelas XII Peminatan Ilmu Pengetahuan Sosial (IPS)</h3>
                                        <br>
                                        <h1>Kompetensi Inti</h1>
                                        <p>Kompetensi Inti merupakan terjemahan atau operasionalisasi SKL dalam bentuk
                                            kualitas yang harus dimiliki mereka yang telah menyelesaikan pendidikan pada
                                            satuan pendidikan tertentu atau jenjang pendidikan tertentu, gambaran
                                            mengenai kompetensi utama yang dikelompokkan ke dalam aspek sikap,
                                            pengetahuan, dan keterampilan (afektif, kognitif, dan psikomotor) yang harus
                                            dipelajari peserta didik untuk suatu jenjang sekolah, kelas dan mata
                                            pelajaran. Kompetensi Inti harus menggambarkan kualitas yang seimbang antara
                                            pencapaian hard skills dan soft skills.</p>
                                        <p>Kompetensi Inti berfungsi sebagai unsur pengorganisasi (organising element)
                                            kompetensi dasar. Sebagai unsur pengorganisasi, Kompetensi Inti merupakan
                                            pengikat untuk organisasi vertikal dan organisasi horizontal Kompetensi
                                            Dasar. Organisasi vertikal Kompetensi Dasar adalah keterkaitan antara konten
                                            Kompetensi Dasar satu kelas atau jenjang pendidikan ke kelas/jenjang di
                                            atasnya sehingga memenuhi prinsip belajar yaitu terjadi suatu akumulasi yang
                                            berkesinambungan antara konten yang dipelajari peserta didik. Organisasi
                                            horizontal adalah keterkaitan antara konten Kompetensi Dasar satu mata
                                            pelajaran dengan konten Kompetensi Dasar dari mata pelajaran yang berbeda
                                            dalam satu pertemuan mingguan dan kelas yang sama sehingga terjadi proses
                                            saling memperkuat.</p>
                                        <p>Kompetensi Inti dirancang dalam empat kelompok yang saling terkait, yaitu
                                            berkenaan dengan sikap keagamaan mencakup Kompetensi Indi :</p>
                                        <p>1. Sikap sosial.</p>
                                        <p>2. Pengetahuan.</p>
                                        <p>3. Penerapan Pengetahuan.</p>
                                        <p>Ketiga kelompok itu menjadi acuan dari Kompetensi Dasar dan harus
                                            dikembangkan dalam setiap peristiwa pembelajaran secara integratif.
                                            Kompetensi yang berkenaan dengan sikap keagamaan dan sosial dikembangkan
                                            secara tidak langsung (indirect teaching), yaitu pada waktu peserta didik
                                            belajar tentang pengetahuan (kompetensi kelompok 3) dan penerapan
                                            pengetahuan (kompetensi Inti kelompok 4).</p>
                                        <br>
                                        <h1>Kompetensi Dasar</h1>
                                        <p>Kompetensi Dasar merupakan kompetensi setiap mata pelajaran untuk setiap
                                            kelas yang diturunkan dari Kompetensi Inti. Kompetensi Dasar adalah konten
                                            atau kompetensi yang terdiri atas sikap, pengetahuan, dan ketrampilan yang
                                            bersumber pada Kompetensi Inti yang harus dikuasai peserta didik. Kompetensi
                                            tersebut dikembangkan dengan memperhatikan karakteristik peserta didik,
                                            kemampuan awal, serta ciri dari suatu mata pelajaran.</p>
                                        <p>Mata pelajaran sebagai sumber dari konten untuk menguasai kompetensi bersifat
                                            terbuka dan tidak selalu diorganisasikan berdasarkan disiplin ilmu yang
                                            sangat berorientasi hanya pada filosofi esensialisme dan perenialisme.</p>
                                        <p>Mata pelajaran dapat dijadikan organisasi konten yang dikembangkan dari
                                            berbagai disiplin ilmu atau non disiplin ilmu yang diperbolehkan menurut
                                            filosofi rekonstruksi sosial, progresifisme atau pun humanisme. Karena
                                            filosofi yang dianut dalam kurikulum adalah eklektik seperti dikemukakan di
                                            bagian landasan filosofi, maka nama mata pelajaran dan isi mata pelajaran
                                            untuk kurikulum yang akan dikembangkan tidak perlu terikat pada kaedah
                                            filosofi esensialisme dan perenialisme.</p>
                                        <p>Kompetensi Inti dan Kompetensi Dasar SMA/MA yang merupakan satu kesatuan ide
                                            masing-masing mata pelajaran mencakup:</p>
                                        <p>1. Kompetensi Inti dan Kompetensi Dasar Kelompok Mata Pelajaran Wajib.</p>
                                        <p>2. Kompetensi Inti dan Kompetensi Dasar Kelompok Peminatan Matematika dan
                                            Ilmu-ilmu Alam.</p>
                                        <p>3. Kelompok Inti dan Kompetensi Dasar Peminatan Ilmu-ilmu Sosial, dan
                                            Kelompok Peminatan Ilmu-ilmu Bahasa.dan Budaya.</p>
                                        <p>Penyelenggaraan pendidikan di SMA SANTO YOSEPH JAKARTA TIMUR dinilai berhasil
                                            apabila kegiatan belajar mampu membentuk pola tingkah laku siswa sesuai
                                            dengan visi dan misi sekolah serta dapat dievaluasi melalui pengukuran
                                            dengan menggunakan tes dan nontes.</p>
                                        <p>Proses pembelajaran di SMA SANTO YOSEPH JAKARTA TIMUR akan efektif apabila
                                            dilakukan melalui persiapan yang cukup dan terencana dengan baik. Pendidikan
                                            yang komprehensif dan integral yang mengasah mental siswa yang meliputi
                                            ranah : intelligential, physic, emotional, moral, spiritual, social dengan
                                            model :</p>
                                        <p>> Program Pendalaman Materi untuk kelas X, XI dan XII.</p>
                                        <p>> Pendampingan persiapan olimpiade sains maupun olah raga.</p>
                                        <p>> Program Ekstrakurikuler untuk meningkatkan bakat & prestasi (bulutangkis,
                                            band, paduan suara, seni tari tradusional, basket dan futsal).</p>
                                        <p>> Program Character Building (Latihan Dasar Kepemimpinan) untuk kelas X.</p>
                                        <p>> Wisata Industri dan Study Tour untuk kelas XI.</p>
                                        <p>> Retret kelas XII.</p>
                                        <p>> Studi lapangan.</p>
                                        <p style="font-weight: 700">Pelaksanaan Kurikulum :</p>
                                        <p>1. Kelas X : Kurikulum 2013</p>
                                        <p>2. Kelas XI : Kurikulum 2013</p>
                                        <p>3. Kelas XII : Kurikulum 2013</p>
                                        <p>Waktu Belajar : Senin – Selasa : 07.00 – 15.00, Rabu – Jumat : 07.00 –
                                            14.15</p>
                                        <p>Alokasi Waktu setiap jam pelajaran : 45 Menit</p>
                                        <br>
                                        <h1>Kurikulum khusus selama masa Pandemi Covid-19</h1>
                                        <p>Waktu Belajar : Senin – Selasa, Kamis-Jumat : 07.15 – 13.15, Rabu : 07.15 –
                                            14.15</p>
                                    </div>
                                </div>
                            </li>
                            <li data-content='kegiatan_spiritualitas'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Pengembangan Spiritualitas</h1>
                                        <p>Konsep Spiritualitas Diri dalam doa bentuk yang dijalankan oleh individu agar
                                            mampu melakukan hubungan secara horisontal dengan sesama dan interaksi
                                            vertikal dengan Tuhan serta mewujudkan secara terus menerus antara jiwa
                                            dengan Tuhan dalam setiap perbuatan, pemikiran ataupun perasaan seperti pada
                                            upacara agama katolik, setiap hari minggu mereka menjalankan ibadah yang
                                            disebut misa.</p>
                                        <p>Pengembangan Spiritualitas bertujuan untuk meningkatkan spiritualitas
                                            Kristiani yang dipahami bukan sebagai teori, tetapi sebagai jalan hidup yang
                                            ditempuh dengan penuh kesadaran. Untuk berbagi, melayani para peserta didik
                                            SMA Santo Yoseph dalam bimbingan membantu gereja serta masyarakat luas dalam
                                            pengembangan spiritualitas dan ketrampilan pelayanan antara lain:</p>
                                        <p class="panah">>&nbsp;&nbsp;Pembiasaan melakukan Doa Malaikat Tuhan (Angelus)
                                            setiap pukul 12.00 siang</p>
                                        <p class="panah">>&nbsp;&nbsp;Pembiasaan doa pagi sebelum aktivitas belajar
                                            dimulai</p>
                                        <p class="panah">>&nbsp;&nbsp;Pembiasaan ibadah JUMAT PERTAMA setiap awal
                                            bulan</p>
                                        <p class="panah">>&nbsp;&nbsp;Pembiasaan perayaan Ekaristi pada setiap awal
                                            tahun pembelajaran</p>
                                        <p class="panah">>&nbsp;&nbsp;Pembiasaan perayaan Ekaristi pada setiap perayaan
                                            hari Santo Pelindung</p>
                                        <p class="panah">>&nbsp;&nbsp;Pembiasaan Retreat setahun satu kali</p>
                                        <p>Berdasarkan hakikat pembiasaan tersebut, maka perkembangan memandang manusia
                                            sebagai mahluk yang holistik membentuk aspek fisiologis, psikologis,
                                            sosiologis, kultural dan spiritual. Tidak terpenuhinya kebutuhan manusia
                                            pada salah satu dimensi tersebut di atas akan menyebabkan ketidaksejahteraan
                                            atau keadaan tidak sehat. Kondisi tersebut dapat dipahami mengingat dimensi
                                            fisik, psikologis, sosial, spiritual, dan kultural merupakan satu kesatuan
                                            yang saling berhubungan.</p>
                                        <p>Spiritual berasal dari bahasa latin “spiritus” yang berarti nafas atau udara,
                                            spirit memberikan hidup, menjiwai seseorang. Spirit memberikan arti penting
                                            ke hal apa saja yang sekiranya menjadi pusat dari seluruh aspek kehidupan
                                            seseorang. Spiritual adalah sesuatu yang dipengaruhi oleh budaya,
                                            perkembangan, pengalaman hidup kepercayaan dan nilai kehidupan.
                                            Spiritualitas mampu menghadirkan cinta, kepercayaan, dan harapan, melihat
                                            arti dari kehidupan dan memelihara hubungan dengan sesama.</p>
                                        <p>Kajian tentang spiritualitas adalah suatu kajian yang sangat penting karena
                                            beberapa penelitian menunjukkan bahwa adanya hasil korelasi yang negatif
                                            antara spiritualitas dengan tingkat stres, psikososial, kecemasan dan
                                            depresi (Ellison & Fan, 2008) dan berkorelasi positif dengan penilaian
                                            optimisme, dukungan sosial yang dirasakan, dan kepuasan dalam menjalani
                                            kehidupan (Kalkstein & Tower, 2009). Hasil penelitian lain dilakukan oleh
                                            Maselko & Kubzansky (2006) yang menemukan bahwa kegiatan keagamaan dan
                                            pengalaman spiritual berkorelasi secara signifikan dengan tingkat kesehatan
                                            mental dan kebahagiaan. Artinya semakin sering kegiatan keagamaan dilakukan
                                            maka semakin tinggi kemungkinan subjek tersebut untuk menjadi bahagia dalam
                                            hidupnya.</p>
                                        <p class="panah">>&nbsp;&nbsp;Kemampuan berkomunikasi yang baik</p>
                                        <p class="panah">>&nbsp;&nbsp;Kemampuan mengenali pertemuan lintas-budaya
                                            (kesadaran tinggi)</p>
                                        <p class="panah">>&nbsp;&nbsp;Kemampuan menemukan kompromi kreatif untuk
                                            mencapai solusi yang memuaskan semua pihak</p>
                                        <p>Sebagai pendidik dan konselor, Wintz & Cooper (2001) menegaskan kepada kita
                                            perlunya memiliki kompetensi dan sensitifitas budaya. Ada tiga hal yang
                                            perlu diingat ketika menyajikan sensitifitas budaya di bidang pelayanan
                                            klinik, diantaranya:</p>
                                        <p class="panah">>&nbsp;&nbsp;Berbeda ialah berbeda, bukan mengenai benar dan
                                            salah</p>
                                        <p class="panah">>&nbsp;&nbsp;Saya tidak takut untuk bertanya, ketika saya
                                            merasa tidak nyaman</p>
                                        <p class="panah">>&nbsp;&nbsp;Ini bukan tentang saya, sehingga kita tidak bisa
                                            menggunakan ukuran kita</p>
                                        <p>Oleh karena itu, dapat dipahami bahwa kompetensi budaya perlu dimiliki oleh
                                            pendidik dan juga peserta didik sebagai karakteristik dasar yang dimiliki
                                            oleh seorang individu yang berhubungan secara kausal dalam memenuhi kriteria
                                            yang diperlukan pada saat menduduki suatu jabatan.</p>
                                        <p>Becker and Ulrich dalam Suparno (2005, p. 24) mengatakan bahwa kompetensi
                                            mengandung aspek-aspek pengetahuan, keterampilan (keahlian) dan kemampuan
                                            ataupun karakteristik kepribadian yang mempengaruhi kinerja. Powell (1997,
                                            p. 142) mengartikan kompetensi sebagai berikut:</p>
                                        <p class="panah">>&nbsp;&nbsp;Kecakapan, kemampuan, dan kompetensi.</p>
                                        <p class="panah">>&nbsp;&nbsp;Kemampuan (ability) atau kapasitas seseorang untuk
                                            mengerjakan berbagai tugas dalam suatu pekerjaan, dimana kemampuan ini
                                            ditentukan oleh 2 (dua) faktor yaitu kemampuan intelektual dan kemampuan
                                            fisik.</p>
                                        <p>Spencer, McClelland, & Spencer (1994) menyebut ada lima karakteristik yang
                                            membentuk kompetensi yakni :</p>
                                        <p class="panah">>&nbsp;&nbsp;Pengetahuan meliputi masalah teknis,
                                            administratif, proses kemanusiaan, dan sistem.</p>
                                        <p class="panah">>&nbsp;&nbsp;Keterampilan merujuk pada kemampuan sesorang untuk
                                            melakukan suatu kegiatan.</p>
                                        <p class="panah">>&nbsp;&nbsp;Konsep diri dan nilai-nilai merujuk pada sikap,
                                            nilai-nilai dan citra diri seseorang, seperti kepercayaan seseorang bahwa
                                            dia bisa berhasil
                                            dalam suatu sulit.</p>
                                        <p class="panah">>&nbsp;&nbsp;Karakteristik pribadi merujuk pada karakteristik
                                            fisik dan konsentrasi tanggapan terhadap situasi atau informasi, seperti
                                            pengendalian
                                            diri dan kemampuan untuk tetap tenang dibawah tekanan.</p>
                                        <p class="panah">>&nbsp;&nbsp;Motif merupakan emosi, hasrat, kebutuhan
                                            psikologis atau dorongan-dorongan lain yang memicu tindakan.</p>
                                        <p>Berdasarkan pendapat-pendapat tersebut, dapat disimpulkan bahwa kompetensi
                                            meliputi aspek kognitif, afektif dan psikomotor individu.</p>
                                        <br>
                                        <h1>Gallery Kegiatan</h1>
                                    </div>
                                </div>
                            </li>
                            <li data-content='osis'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Program OSIS SMA Santo Yoseph</h1>
                                        <p>Langkah-langkah kegiatan OSIS di SMA Santo Yoseph</p>
                                        <p>> Membuat rancangan rencana kegiatan OSIS, melibatkan semua murid dan guru,
                                            agar terlaksana dengan sesuai prosedur.</p>
                                        <p>> Melakukan dokumentasi antara lain; pembuatan video, foto, dan notulen.</p>
                                        <p>> Evaluasi hasil kegiatan.</p>
                                        <p>> Mengirimkan artikel kegiatan ke website sekolah dengan kategori berita,
                                            dokumen pendukung, video, atau foto.</p>
                                        <p>> Artikel yang dipublikasikan adalah artikel asli (bukan bentuk kegitan
                                            plagiarisme).</p>
                                        <br>
                                        <h1>Program Harian Pengurus OSIS</h1>
                                        <p>Tugas Keanggotan OSIS antara lain:</p>
                                        <p>> Membentuk staff OSIS.</p>
                                        <p>> Membentuk jadwal piket OSIS.</p>
                                        <p>> Pengajuan sarana dan prasarana pendukung administrasi.</p>
                                        <p>> Penerbitan administrasi.</p>
                                        <p>> Keaktifan kegiatan sekolah dan dana usaha.</p>
                                        <p>> Laporan pertanggung jawaban.</p>
                                        <br>
                                        <h1>Program Bulanan Pengurus OSIS</h1>
                                        <p>> Berkoordinasi dengan Wakasek kesiswaan, dalam merancang pelaksanaan
                                            kegiatan yang akan dilakukan.</p>
                                        <p>> Melaporkan hasil kegiatan bulanan dan menindak lanjuti kegiatan bulan
                                            berikutnya.</p>
                                        <p>> Meningkatkan tumbuhnya sikap kepemimpinan konsultatif yang mengarah pada
                                            partisipatif yang aktif dalam kepengurusan kegiatan OSIS.</p>
                                        <p>> Membangun kerjasama yang baik, kompak dan terciptanya hubungan lintas
                                            bidang.</p>
                                        <br>
                                        <h1>Program Tahunan Pengurus OSIS</h1>
                                        <p>> Memperingati hari-hari besar keagamaan.</p>
                                        <p>> Memperingati hari-hari besar nasional.</p>
                                        <p>> Mengadakan Masa Orientasi Peserta Didik Baru.</p>
                                        <p>> Mengadakan kegiatan LDKS.</p>
                                        <p>> Mengaktifkan kegiatan ekstrakulikuler.</p>
                                        <p>> Mengadakan Edu-fair.</p>
                                        <p>> Mengadakan PORKELAS.</p>
                                        <p>> Mengadakan Bazar.</p>
                                        <p>> Mengadakan kerjasama yang baik, kompak, dan terciptanya hubungan lintas
                                            bidang.</p>
                                        <p>> Mengadakan rapat kerja sama antar OSIS dengan lembaga atau organisasi
                                            terkait.</p>
                                        <p>> Melakukan evaluasi monitoring kegiatan dibawah naungan OSIS.</p>
                                        <br>
                                        <h1>Gallery Kegiatan</h1>
                                    </div>
                                </div>
                            </li>
                            <li data-content='bimbingan'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>BImbingan Karir Peserta Didik</h1>
                                        <p>Konsep Spiritualitas Diri dalam doa bentuk yang dijalankan oleh individu agar
                                            mampu melakukan hubungan secara horisontal dengan sesama dan interaksi
                                            vertikal dengan Tuhan serta mewujudkan secara terus menerus antara jiwa
                                            dengan Tuhan dalam setiap perbuatan, pemikiran ataupun perasaan seperti pada
                                            upacara agama katolik, setiap hari minggu mereka menjalankan ibadah yang
                                            disebut misa.</p>
                                        <p>Konsep bimbingan karir lahir bersamaan dengan bimbingan jabatan di Amerika
                                            Serikat pada awal abad keduapuluh, yang dilatari oleh berbagai kondisi
                                            obyektif pada waktu itu (1850-1900), di antaranya :</p>
                                        <p>> Keadaan Ekonomi.</p>
                                        <p>> Keadaan Sosial, seperti urbanisasi.</p>
                                        <p>> Keadaan ideologis, seperti adanya kegelisahan untuk membentuk kembali dan
                                            menyebarkan pemikiran tentang kemampuan sesorang
                                            dalam rangka meningkatkan kemampuan diri dan statusnya.</p>
                                        <p>> Perkembangan ilmu (scientific), khususnya dalam bidang ilmu psiko-fisik dan
                                            psikologis eksperimental yang dipelopori oleh Freechner,
                                            Helmotz dan Wundt, psikometrik yang dikembangkan oleh Cattel, Binnet, dan
                                            yang lainnya. Atas desakkan kondisi tersebut, maka muncul
                                            gerakkan bimbingan jabatan yang tersebar ke seluruh negara (Bahrul Falah,
                                            1987).</p>
                                        <p>Dalam perspektif pendidikan nasional, pentingnya bimbingan karir sudah mulai
                                            dirasakan bersamaan dengan lahirnya gerakan bimbingan dan konseling di
                                            Indonesia pada pertengahan tahun 1950-an, berawal dari kebutuhan penjurusan
                                            siswa di SMA pada waktu itu. Selanjutnya, pada tahun 1984 bersamaan dengan
                                            diberlakukannya Kurikulum 1984, bimbingan karir cukup terasa mendominasi
                                            dalam layanan bimbingan dan penyuluhan dan pada tahun 1994, bersamaan dengan
                                            perubahan nama bimbingan penyuluhan menjadi bimbingan dan konseling. Dalam
                                            Kurikulum 1994, bimbingan karir ditempatkan sebagai salah bidang bimbingan
                                            konseling.</p>
                                        <p>> Bimbingan Karier di sekolah Santo Yoseph, selain tertuang dalam program
                                            kerja Bimbingan Konseling juga terealisasi melalui kegiatan sekolah yang
                                            diselenggarakan setiap tahunnya, diantaranya melalui kegiatan Career Day
                                            maupun Career day Virtual pada masa pandemi yang didalamnya berupa kegiatan
                                            pameran pendidikan, campus tour, tes minat bakat, talk show (menghadirkan
                                            alumni), serta seminar bina dewasa (baik berkaitan bedah jurusan, lapangan
                                            pekerjaan dll), yang tentunya diharapkan dapat menjadi salah satu sarana
                                            peserta didik menggapai cita, mendapatkan beasiswa, memperoleh pengetahuan,
                                            wawasan dan pengembangan karier.</p>
                                        <p>> Selain itu kegiatan seperti LDKS (latihan dasar kepemimpinan sekolah), dan
                                            perlombaan baik akademis maupun non akademis juga olimpiade dan beragamnya
                                            kegiatan ekstrakurikuler di sekolah juga merupakan salah satu sarana
                                            pengembangan karier siswa yang diharapakan dapat menggali dan mengembangkan
                                            minat dan bakat siswa menuju masa depannya secara pribadi.</p>
                                        <br>
                                        <h1>Gallery Kegiatan</h1>
                                    </div>
                                </div>
                            </li>
                            <li data-content='campus_tour'>
                                <div class='row mb-4 content'>
                                    <div class="row">
                                        <h1>Campus Tour</h1>
                                        <p>Keliling Kampus , Observsi Kampus (Campus Tour) adalah merupakan salah satu
                                            tahapan yang terpenting untuk menentukan calon mahasiswa baru dalam memilih
                                            kampus. Tujuan keliling kampus merupakan masa-masa yang paling menyenangkan
                                            dan akan menjadi nostalgia sepanjang hidup. Namun masa di penghujung SMA
                                            umumnya juga menimbulkan kebingungan menentukan langkah dan arah masa depan.
                                            Berbagai pertimbangan, seperti akan melanjutkan ke perguruan tinggi yang
                                            mana dan jurusan apa yang akan diambil, menjadi tantangan yang perlu
                                            dipertimbangkan dengan matang. Untuk itu, sebelum mengambil keputusan
                                            sebaiknya kita perlu mencari informasi yang akurat, terutama tentang
                                            berbagai pilihan jurusan yang sesuai dengan minat dan bakat untuk membawa
                                            kita ke karir yang akan ditekuni di masa depan. Melalui kegiatan keliling
                                            kampus ini, peserta didik SMA Santo Yoseph punya kesempatan untuk belajar
                                            dan mengetahui berbagai kerja sama yang dimiliki di kampus tersebut, untuk
                                            mengetahui program-program pada universitas dengan universitas yang lain dan
                                            perusahaan/industri terkait. Kerja sama ini dimaksud untuk memberikan
                                            peluang bagi para peserta didik untuk mendapatkan pengalaman berdasarkan
                                            minat, serta juga untuk memperoleh pengalaman magang untuk mendapatkan
                                            pengalaman dan peluang kerja terbaik. Para peserta didik juga dapat
                                            menggunakan kesempatan ini untuk berdiskusi langsung dengan para mahasiswa
                                            atau alumni yang telah sukses berkarir di tingkat nasional maupun
                                            internasional dengan prestasi yang membanggakan.</p>
                                        <p>Perlu diketahui satuan pendidikan yang menyelenggarakan pendidikan tinggi ini
                                            dikenal dengan nama Perguruan Tinggi (PT), baik itu Perguruan Tinggi Negeri
                                            (PTN) maupun Perguruan Tinggi Swasta (PTS). Perguruan Tinggi ini terdiri
                                            dari beberapa bentuk, yaitu: universitas, institut, sekolah tinggi,
                                            politeknik, akademi, dan akademi komunitas. Dengan adanya keliling kampus
                                            inilah peserta didik Sekolah SMA Santo Yoseph diajak untuk mempersiapkan
                                            dirinya, dalam menentukan pilihan berdasarkan minat dan bakat kemapuan,
                                            intelektual, serta materi.</p>
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
