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
    <script src="{{ asset('js/login/animsition.min.js') }}"></script>
    <script src="{{ asset('js/login/select2.min.js') }}"></script>
    <script src="{{ asset('js/login/moment.min.js') }}"></script>
    <script src="{{ asset('js/login/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/login/countdowntime.js') }}"></script>

    <!-- Main Activation JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/login.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100&display=swap"
        rel="stylesheet">

    <!-- Plugin and Vendor CSS Styles -->
    <link href="{{ asset('css/plugin/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/animsition.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom CSS Styles -->
    <link href="{{ asset('css/login/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/login_util.css')}}" rel="stylesheet">
    <link href="{{ asset('font/font-awesome-4.7.0/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('font/Linearicons-Free-v1.0.0/icon-font.min.css') }}" rel="stylesheet">

</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Log In
					</span>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="username">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Username</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt1">
                            Forgot Password?
                        </a>
                    </div>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

            </form>

            <div class="login100-more">
                <div class="col">
                    <h1 class="title-login text-center mb-5">Hello, Student!</h1>
                </div>

                <div class="col">
                    <img class="image-login align-items-center" src="images/login_art.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
