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
            <li class="breadcrumb-item active" aria-current="page">Pedoman Umum Pembelajaran</li>
        </ol>
    </div>

    <main class="py-0">
        <div class="container">
            <div class="row">
                <h1 class="content-header-pedoman">Pedoman Umum Pembelajaran</h1>
                <h2 class="sub-content-header">(Berdasarkan Lampiran IV, Permendikbud No 81A Tahun 2013)</h2>
            </div>
            <div class="row mb-4 paragraf-item">
                <p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pendahuluan</p>
                <p>Mencakup Kerangka Konseptual dan operasional tentang:</p>
                <p>Strategi Pembelajaran Sistem Kredit Semester (SKS) Strategi penilaian substansi bimbingan dan
                    konseling.</p>
                <p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tujuan</p>
                <p class="ti-5">Memfasilitasi guru dalam mengembangkan RPP dan melaksanakan pembelajaran dalam berbagai modus,
                    strategi, dan model untuk muatan dan/atau mata pelajaran yang diampunya; memfasilitasi satuan
                    pendidikan dalam merintis atau melanjutkan pengelolaan kurikulum dengan menerapkan SKS sebagai
                    perwujudan konsep belajar tuntas sesuai dengan kesiapan masing-masing;memfasilitasi guru dalam
                    mengembangkan teknik dan instrumen penilaian hasil belajar dengan pendekatan otentik untuk muatan
                    dan/atau mata pelajarannya memfasilitasi satuan pendidikan dalam mewujudkan proses pendidikan sesuai
                    dengan kemampuan, kebutuhan, dan minat sesuai karakteristik peserta didik dan dalam memfasilitasi
                    peserta didik untuk memilih dan menetapkan program peminatan, serta memfasilitasi guru BK atau
                    konselor sekolah untuk menangani dan membantu peserta didik yang secara individual mengalami masalah
                    psikologis atau psikososial.</p>
                <p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengguna</p>
                <p class="ti-5">Guru secara individual atau kelompok guru (guru mata pelajaran, guru kelas, dan guru pembina kegiatan
                    ekstrakurikuler);Pimpinan satuan pendidikan (kepala sekolah, wakil kepala sekolah, wali kelas);Guru
                    bimbingan dan konseling atau konselor sekolah; danTenaga kependidikan (pengawas, pustakawan sekolah,
                    pembina pramuka).</p>
                <p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cakupan Pedoman</p>
                <p>Konsep dan strategi pembelajaran</p>
                <p class="ti-5">Konsep dan strategi penerapan Sistem Kredit Semester Konsep dan strategi penilaian Konsep dan
                    strategi pembimbingan dan konsultasi. Kegiatan pembelajaran diarahkan untuk memberdayakan semua
                    potensi peserta didik menjadi kompetensi yang diharapkan.Diarahkan untuk memfasilitasi pencapaian
                    kompetensi yang telah dirancang dalam dokumen kurikulum agar setiap individu mampu menjadi pebelajar
                    mandiri sepanjang hayat. Kualitas lain yang dikembangkan dalam proses pembelajaran antara lain
                    kreativitas, kemandirian, kerja sama, solidaritas, kepemimpinan, empati, toleransi dan kecakapan
                    hidup peserta didik guna membentuk watak serta meningkatkan peradaban dan martabat bangsa.</p>
                <p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prinsip Pembelajaran</p>
                <p class="p-40">a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kegiatan pembelajaran perlu menggunakan prinsip
                    yang:</p>
                <p class="p-60">(1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;berpusat pada peserta didik,</p>
                <p class="p-60">(2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mengembangkan kreativitas peserta didik,</p>
                <p class="p-60">(3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;menciptakan kondisi menyenangkan dan menantang,</p>
                <p class="p-60">(4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bermuatan nilai, etika, estetika, logika, dan
                    kinestetika, dan</p>
                <p class="p-60">(5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;menyediakan pengalaman belajar yang beragam melalui
                    penerapan berbagai strategi dan metode pembelajaran yang menyenangkan, kontekstual, efektif,
                    efisien, dan bermakna.</p>
                <p class="p-60 ti-5">Di dalam pembelajaran, peserta didik didorong untuk menemukan sendiri dan
                    mentransformasikan informasi kompleks, mengecek informasi baru dengan yang sudah ada dalam
                    ingatannya,
                    dan melakukan pengembangan menjadi informasi atau kemampuan yang sesuai dengan lingkungan dan jaman
                    tempat dan
                    waktu ia hidup. Pandangan dasarnya bahwa pengetahuan tidak dapat dipindahkan begitu saja dari guru
                    ke peserta didik. Peserta didik adalah subjek yang memiliki kemampuan untuk secara aktif mencari,
                    mengolah, mengkonstruksi, dan menggunakan pengetahuan. Untuk itu pembelajaran harus berkenaan dengan
                    kesempatan yang diberikan kepada peserta didik untuk mengkonstruksi pengetahuan dalam proses
                    kognitifnya. Agar benar-benar memahami dan dapat menerapkan pengetahuan, peserta didik perlu
                    didorong untuk bekerja memecahkan masalah, menemukan segala sesuatu untuk dirinya, dan berupaya
                    keras mewujudkan ide-idenya. Guru memfasilitasi dan mengembangkan kesempatan belajar kepada peserta
                    didik untuk meniti anak tangga yang membawa peserta didik kepemahaman yang lebih tinggi, yang semula
                    dilakukan dengan bantuan guru tetapi semakin lama semakin mandiri. Bagi peserta didik, pembelajaran
                    harus bergeser dari “diberi tahu” menjadi “aktif mencari tahu”.</p>
                <p class="p-405">b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peserta didik mengkonstruksi pengetahuan bagi
                    dirinya.</p>
                <p class="p-60 ti-5">Sebagai manusia yang sedang berkembang, peserta didik telah, sedang, dan/atau akan
                    mengalami empat
                    tahap perkembangan intelektual, yakni sensori motor, pra-operasional, operasional konkrit, dan
                    operasional formal.Dalam suatu kegiatan belajar dapat terjadi pengembangan sikap, pengetahuan, dan
                    keterampilan dalam kombinasi dan penekanan yang bervariasi.</p>
                <p class="p-40">c.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pembelajaran Langsung dan Tidak Langsung.</p>
                <p class="p-60 ti-5">Proses pembelajaran langsung adalah proses pendidikan di mana peserta didik
                    mengembangkan
                    pengetahuan, kemampuan berpikir dan keterampilan psikomotorik melalui interaksi langsung dengan
                    sumber belajar yang dirancang dalam silabus dan RPP berupa kegiatan-kegiatan pembelajaran.Peserta
                    didik melakukan kegiatan belajar mengamati, menanya, mengumpulkan informasi, mengasosiasi atau
                    menganalisis, dan mengkomunikasikan apa yang sudah ditemukannya dalam kegiatan analisis. Proses
                    pembelajaran langsung menghasilkan pengetahuan dan keterampilan langsung atau yang disebut dengan
                    instructional effect. Pembelajaran tidak langsung adalah proses pendidikan yang terjadi selama
                    proses pembelajaran langsung tetapi tidak dirancang dalam kegiatan khusus Berkenaan dengan
                    pengembangan nilai dan sikap.Pembelajaran langsung berkenaan dengan pembelajaran yang menyangkut KD
                    yang dikembangkan dari KI-3 dan KI-4. Keduanya, dikembangkan secara bersamaan dalam suatu proses
                    pembelajaran dan menjadi wahana untuk mengembangkan KD pada KI-1 dan KI-2. Pembelajaran tidak
                    langsung berkenaan dengan pembelajaran yang menyangkut KD yang dikembangkan dari KI-1 dan KI-2.
                    Proses pembelajaran terdiri atas lima pengalaman belajar pokok yaitu:a. mengamati;b. menanya;c.
                    mengumpulkan informasi;d. mengasosiasi; dane. mengkomunikasikan.</p>
                <p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kompetensi yang dikembangkan</p>
                <p class="ti-5">Langkah pembelajaran Kegiatan belajar kompetensi yang dikembangkan : Mengamati, Membaca, mendengar,
                    menyimak, melihat (tanpa atau dengan alat) kesungguhan, ketelitian, mencari informasi, Menanya,
                    Mengajukan pertanyaan tentang informasi yang tidak dipahami utk mendapatkan informasi tambahan
                    tentang apa yang diamati, kreativitas, rasa ingin tahu, kritis dan cerdas. Mengumpulkan informasi/
                    eksperimen eksperimen , membaca sumber lain mengamati , wawancara teliti, jujur, sopan, menghargai
                    pendapat , komunikatif, mencari informasi. Mengasosiasikan/mengolah informasi, jujur, teliti,
                    disiplin, taat aturan, kerja keras , induktif, deduktif, menyimpulkan, mengkomunikasikan,
                    menyampaikan hasil secara lisan, tertulis atau media lainnya, jujur, teliti, toleransi, kemampuan
                    berpikir sistematis, mengemukakan pendapat dengan bahasa yang tepat.</p>
                <p class="p-40">a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perencanaan Pembelajaran</p>
                <p class="p-60">Rencana pelaksanaan pembelajaran (RPP) adalah rencana pembelajaran yang dikembangkan
                    secara rinci dari suatu materi pokok atau tema tertentu yang mengacu pada silabus. RPP mencakup:</p>
                <p class="p-60">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data sekolah, matapelajaran, dan kelas/semester;</p>
                <p class="p-60">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;materi pokok;</p>
                <p class="p-60">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alokasi waktu;</p>
                <p class="p-60">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tujuan pembelajaran, KD dan indikator pencapaian
                    kompetensi;</p>
                <p class="p-60">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;materi pembelajaran; metode pembelajaran;</p>
                <p class="p-60">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media, alat dan sumber belajar;</p>
                <p class="p-60">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;langkah-langkah kegiatan pembelajaran; dan</p>
                <p class="p-60">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;penilaian.</p>
                <p class="p-60">Pengembangan RPP dapat dilakukan pada setiap awal semester atau awal tahun pelajaran,
                    dengan maksud
                    agar RPP telah tersedia terlebih dahulu dalam setiap awal pelaksanaan pembelajaran. Pengembangan RPP
                    dapat dilakukan secara mandiri atau secara berkelompok.Pengembangan RPP yang dilakukan oleh guru
                    secara mandiri dan/atau secara bersama-sama melalui musyawarah guru MATA pelajaran (MGMP) di dalam
                    suatu sekolah tertentu difasilitasi dan disupervisi kepala sekolah atau guru senior yang ditunjuk
                    oleh kepala sekolah.Pengembangan RPP yang dilakukan oleh guru secara berkelompok melalui MGMP
                    antarsekolah atau antarwilayah dikoordinasikan dan disupervisi oleh pengawas atau dinas
                    pendidikan.</p>
                <p class="p-40">b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prinsip-Prinsip Pengembangan RPP.</p>
                <p class="p-60">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RPP disusun guru sebagai terjemahan dari ide kurikulum
                    dan berdasarkan silabus yang telah dikembangkan di tingkat nasional ke dalam bentuk rancangan proses
                    pembelajaran untuk direalisasikan dalam pembelajaran.</p>
                <p class="p-60">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RPP dikembangkan guru dengan menyesuaikan apa yang
                    dinyatakan dan silabus dengan
                    kondisi di satuan
                    pendidikan baik kemampuan awal peserta didik, minat, motivasi belajar, bakat, potensi, kemampuan
                    sosial, emosi, gaya belajar, kebutuhan khusus, kecepatan belajar, latar belakang budaya, norma,
                    nilai, dan/atau lingkungan peserta didik.Mendorong partisipasi aktif peserta didik.</p>
                <p class="p-60">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Proses pembelajaran dalam RPP dirancang dengan berpusat
                    pada peserta didik untuk
                    mengembangkan
                    motivasi, minat, rasa ingin tahu, kreativitas, inisiatif, inspirasi, kemandirian, semangat belajar,
                    keterampilan belajar dan kebiasaan belajar, mengembangkan budaya membaca dan menulis.</p>
                <p class="p-60">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Proses pembelajaran dalam RPP dirancang untuk
                    mengembangkan kegemaran membaca,
                    pemahaman beragam
                    bacaan, dan berekspresi dalam berbagai bentuk tulisan, memberikan umpan balik dan tindak lanjut.</p>
                <p class="p-60">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RPP memuat rancangan program pemberian umpan balik
                    positif, penguatan, pengayaan, dan
                    remedi.
                    Remedi dilakukan setiap saat setelah suatu ulangan atau ujian dilakukan, hasilnya dianalisis, dan
                    kelemahan setiap peserta didik dapat teridentifikasi.</p>
                <p class="p-60">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keterkaitan dan keterpaduan.</p>
                <p class="p-60">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memperhatikan keterkaitan dan keterpaduan antara KI dan
                    KD, materi pembelajaran,
                    kegiatan
                    pembelajaran, penilaian, dan sumber belajar dalam satu keutuhan pengalaman belajar. Menerapkan
                    teknologi informasi dan komunikasi.</p>
                <p class="p-60">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RPP disusun dengan mempertimbangkan penerapan teknologi
                    informasi dan komunikasi
                    secara
                    terintegrasi, sistematis, dan efektif sesuai dengan situasi dan kondisi.</p>
                <p class="p-40">c.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Konsep dan Strategi Penerapan SKS</p>
                <p class="p-60">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peserta didik menentukan sendiri beban belajar dan mata
                    pelajaran yang diikuti pada setiap
                    semester. Peserta didik yang berkemampuan dan berkemauan tinggi dapat mempersingkat waktu
                    penyelesaian studinya, Peserta didik didorong untuk memberdayakan dirinya, Peserta didik dapat
                    menentukan dan mengatur strategi belajar, Peserta didik memiliki kesempatan untuk memilih kelompok
                    peminatan, lintas minat, dan pendalaman minat, Peserta didik dapat pindah ke sekolah lain yang
                    sejenis Sekolah menyediakan sumber daya pendidikan yang lebih memadai. Penjadwalan kegiatan
                    pembelajaran diupayakan dapat memenuhi kebutuhan untuk pengembangan potensi peserta didik. Guru
                    memfasilitasi kebutuhan akademik peserta didik.</p>
                <p class="p-60">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERSYARATAN Satuan pendidikan SMA Santo Yoseph yang
                    terakreditasi A dari Badan
                    Akreditasi Nasional
                    Sekolah/Madrasah (BAN-S/M) dapat menyelenggarakan SKS. Penyelenggaraan SKS pada setiap satuan
                    pendidikan dilakukan dengan tetap mempertimbangkan ketuntasan minimal dalam pencapaian setiap
                    kompetensi.</p>
                <p class="p-60">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BEBAN BELAJAR Kegiatan Sistem Paket Sistem SKS Tatap
                    muka 45 menit; Penugasan
                    terstruktur 27 menit
                    Kegiatan mandiri Jumlah 72 menit 135 menit</p>
                <p class="p-60">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BEBAN BELAJAR MINIMAL Beban belajar yang harus ditempuh
                    oleh peserta didik SMA/MA
                    yaitu minimal
                    130 sks, yang dapat ditempuh paling cepat 2 tahun (4 semester) dan paling lama 5 tahun (10
                    semester).Beban belajar yang harus ditempuh oleh peserta didik SMK/MAK yaitu minimal 144 sks, yang
                    dapat ditempuh paling cepat 2 tahun (4 semester) dan paling lama 5 tahun (10 semester).</p>
                <p class="p-40">d.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Komposisi Beban Belajar</p>
                <p class="p-60 ti-5">Komposisi beban belajar untuk peserta didik SMP/MTs terdiri atas kelompok A (wajib) dan
                    B (wajib) .Komposisi beban belajar untuk peserta didik SMA/MA terdiri atas kelompok A (wajib), B
                    (wajib), dan
                    salah satu dari kelompok C (peminatan), serta lintas minat dan/atau pendalaman minat.Komposisi beban
                    belajar untuk peserta didik SMK/MAK terdiri atas kelompok A (wajib), B (wajib), C1 (kelompok mata
                    pelajaran bidang keahlian), C2 (kelompok mata pelajaran dasar program keahlian), dan salah satu dari
                    C3 (kelompok mata pelajaran paket keahlian).</p>
                <p class="p-60">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KONVERSI PAKET KE SKS Sistem Paket SKS 1.88 jam
                    pembelajaran 1 sks</p>
                <p class="p-60">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PENILAIAN PREDIKAT PENGETAHUAN KETRAMPILAN SIKAP A 4 SB
                    A- 3.66 B+ 3.33B 3
                    B-2.66C+2.33C 2 C-1.66D+1.33K D 1</p>
                <p class="p-60">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KETUNTASAN DAN REMEDIAL; Ketuntasan minimal untuk seluruh
                    kompetensi dasar pada
                    kompetensi
                    pengetahuan dan kompetensi keterampilan yaitu 2.66 (B-)Pencapaian minimal untuk kompetensi sikap
                    adalah B.</p>
                <p class="p-60">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KETUNTASAN DAN REMEDIAL (Lanjutan.....); Untuk kompetensi
                    yang belum tuntas,
                    kompetensi tersebut
                    dituntaskan melalui pembelajaran remedial sebelum melanjutkan pada kompetensi berikutnya.Untuk mata
                    pelajaran yang belum tuntas pada semester berjalan, dituntaskan melalui pembelajaran remedial
                    sebelum memasuki semester berikutnya.</p>
                <p class="p-60">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KONSEP DAN STRATEGI PENILAIAN HASIL BELAJAR; Konsep
                    Penilaian Hasil BelajarKomponen
                    Penilaian Hasil
                    BelajarStrategi Penilaian Hasi Belajar</p>
                <p class="p-40">e.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Konsep Penilaian Hasil Belajar</p>
                <p class="p-60 ti-5">Pengukuran adalah kegiatan membandingkan hasil pengamatan dengan suatu kriteria atau
                    ukuran.Penilaian adalah proses mengumpulkan informasi/bukti melalui pengukuran, menafsirkan,
                    mendeskripsikan, dan
                    menginterpretasi bukti-bukti hasil pengukuran.Evaluasi adalah proses mengambil keputusan berdasarkan
                    hasil-hasil penilaian. Cakupan PenilaianKD pada KI-1: aspek sikap spiritual (untuk matapelajaran
                    tertentu bersifat generik, artinya berlaku untuk seluruh materi pokok).KD pada KI-2: aspek sikap
                    sosial (untuk matapelajaran tertentu bersifat relatif generik, namun beberapa materi pokok tertentu
                    ada KD pada KI-3 yang berbeda dengan KD lain pada KI-2). KD pada KI-3: aspek pengetahuanKD pada
                    KI-4: aspek keterampilan</p>
                <p class="p-60">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prinsip Penilaian Sahih Objektif Adil Terpadu Terbuka
                    Menyeluruh.; Sistematis beracuan
                    kriteria akuntabel, edukatif, pendekatan penilaian semua kompetensi perlu dinilai dengan menggunakan
                    acuan
                    patokan berdasarkan pada indikator hasil belajar. Sekolah menetapkan acuan patokan sesuai dengan
                    kondisi dan kebutuhannya.</p>
                <p class="p-60">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SKALA PENILAIAN PREDIKAT PENGETAHUAN KETERAMPILAN SIKAP;
                    A 4 A- 3.66 - 3.33 B 3 B-
                    2.66 C+ 2.33 C 2 C- 1.66 D+ 1.33 D 1</p>
                <p class="p-60">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KETUNTASAN DAN REMEDIAL; Untuk KD pada KI-3 dan KI-4,
                    seorang peserta didik dinyatakan
                    belum tuntas belajar untuk menguasai KD yang dipelajarinya apabila menunjukkan indikator nilai <
                    2.66 dari hasil
                    tes formatif.b) Untuk KD pada KI-3 dan KI-4, seorang peserta didik dinyatakan sudah tuntas belajar
                    untuk menguasai KD yang dipelajarinya apabila menunjukkan indikator nilai ≥ 2.66 dari hasil tes
                    formatifc) Untuk KD pada KI-1 dan KI-2, ketuntasan seorang peserta didik dilakukan dengan
                    memperhatikan aspek sikap pada KI-1 dan KI-2 untuk seluruh matapelajaran, yakni jika profil sikap
                    peserta didik secara umum berada pada kategori baik (B) menurut standar yang ditetapkan satuan
                    pendidikan yang bersangkutan.</p>
                <p class="p-60">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMPLIKASI KETUNTASAN Untuk KD pada KI-3 dan KI-4:
                    diberikan remedial individual sesuai
                    dengan kebutuhan kepada peserta didik yang memperoleh nilai kurang dari 2.66;Untuk KD pada KI-3 dan
                    KI-4:
                    diberikan kesempatan untuk melanjutkan pelajarannya ke KD berikutnya kepada peserta didik yang
                    memperoleh nilai 2.66 atau lebih dari 2.66; dan Untuk KD pada KI-3 dan KI-4: diadakan remedial
                    klasikal sesuai dengan kebutuhan apabila lebih dari 75% peserta didik memperoleh nilai kurang dari
                    2.66. Untuk KD pada KI-1 dan KI-2, pembinaan terhadap peserta didik yang secara umum profil sikapnya
                    belum berkategori baik dilakukan secara holistik (paling tidak oleh guru matapelajaran, guru BK, dan
                    orang tua).</p>
                <p class="p-60">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALTERNATIF KONVERSI SKALA 0 - 100; SKALA 1 - 40 – 54 D
                    (1.00) 55 – 59 60 – 64 C-
                    (1.66) 65 – 69 C (2.00) 70 – 74 C+ (2.33) B- (2.66) 81 – 85 B (3.00) 86 – 90 B+ (3.33) 91 – 95 A-
                    (3.66) 96 – 100 A (4.00)</p>
            </div>
        </div>
    </main>
</div>
</body>
</html>
