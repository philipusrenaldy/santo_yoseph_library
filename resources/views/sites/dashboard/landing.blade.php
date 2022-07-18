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
    <link href="{{ asset('css/dashboard/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('font/font-awesome-4.7.0/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">


</head>
<body>

<!-- Page Wrapper -->
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-text mx-3">
                I-YES
            </div>
        </a>
        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="bi bi-pie-chart"></i>
                <span>Overview</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-book"></i>
                <span>Library</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="bi bi-search"></i>
                <span>Full Search</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-box-arrow-left"></i>
                <span>Log Out</span>
            </a>
        </li>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-lg-inline text-gray-600 small" id="profileTag"></span>
                            <img class="img-profile rounded-circle"
                                 src="{{ asset('images/teacher/adrianus.png') }}">
                        </a
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h5 class="h3 mb-0 text-gray-800">Overview</h5>
                </div>

                <!-- Area Chart -->
                <div>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                            style="background-color: #8BC43F;">
                            <h6 class="m-0 font-weight-bold ml-3 text-white" id="clinicName"></h6>
                            <div class="dropdown no-arrow">
                                <button data-toggle="modal" data-target="#editProfileModal" class="btn"
                                        style="background-color: white; color: #8BC43F; font-weight: bold;">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <form>
                                <div class="row justify-content-center">
                                    <div class="form-group row col-sm-6">
                                        <label class="col-md-6 col-form-label"> Kode Perusahaan </label>
                                        <div class="col-sm-6">
                                            <input type="text" readonly class="form-control-plaintext" id="cCode">
                                        </div>
                                    </div>
                                    <div class="form-group row col-sm-6">
                                        <label class="col-md-6 col-form-label"> Nomor Telepon Perusahaan</label>
                                        <div class="col-sm-6">
                                            <input type="text" readonly class="form-control-plaintext"
                                                   id="cPhoneNumber">
                                        </div>
                                    </div>
                                    <div class="form-group row col-sm-6">
                                        <label class="col-md-6 col-form-label"> Nomor Izin Perusahaan</label>
                                        <div class="col-sm-6">
                                            <input type="text" readonly class="form-control-plaintext"
                                                   id="cPermitNumber">
                                        </div>
                                    </div>
                                    <div class="form-group row col-sm-6">
                                        <label class="col-md-6 col-form-label"> Alamat Perusahaan</label>
                                        <div class="col-sm-6">
                                            <input type="text" readonly class="form-control-plaintext" id="cAddress">
                                        </div>
                                    </div>
                                    <div class="form-group row col-sm-6">
                                        <label class="col-md-6 col-form-label"> Nama Penanggung Jawab</label>
                                        <div class="col-sm-6">
                                            <input type="text" readonly class="form-control-plaintext" id="rName">
                                        </div>
                                    </div>
                                    <div class="form-group row col-sm-6">
                                        <label class="col-md-6 col-form-label"> Nomor Telepon Penanggung Jawab</label>
                                        <div class="col-sm-6">
                                            <input type="text" readonly class="form-control-plaintext"
                                                   id="rPhoneNumber">
                                        </div>
                                    </div>
                                    <div class="form-group row col-sm-6">
                                        <label class="col-md-6 col-form-label">Email</label>
                                        <div class="col-sm-6">
                                            <input type="text" readonly class="form-control-plaintext" id="email">
                                        </div>
                                    </div>
                                    <div class="form-group row col-sm-6">
                                        <label class="col-md-6 col-form-label">NPWP</label>
                                        <div class="col-sm-6">
                                            <input type="text" readonly class="form-control-plaintext" id="npwp">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; SMA Santo Yoseph 2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
</body>
</html>
