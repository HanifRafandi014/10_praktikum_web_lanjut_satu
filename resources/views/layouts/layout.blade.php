<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/icons/favicon.png') }}"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- font awesome -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Custom styles for template -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/antonio-exotic/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
</head>
<body>
    <div id="page">
        <!---HEADER---->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- <a href="#"> </a>
                           <div class="info-block"><i class="fa fa-map"></i>701 Old York Drive Richmond USA.</div>-->
                       </div>
                       <div class="col-md-6">
                        <div class="social-grid">
                            <ul class="list-unstyled text-right">
                                <li><a><i class="fa fa-facebook"></i></a></li>
                                <li><a><i class="fa fa-twitter"></i></a></li>
                                <li><a><i class="fa fa-linkedin"></i></a></li>
                                <li><a><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--NAVBAR--->
        <header class="header-container">
            <div class="container">
                <div class="top-row">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <div id="logo">
                                <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                <a href="/"><span>vacay</span>home</a>
                            </div>                       
                        </div>
                        <div class="col-md-10 col-sm-6 col-xs-12">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header page-scroll d-flex justify-content-end align-items-end">
                                    <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div>
                                <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                    <ul class="list-unstyled nav1 cl-effect-10">
                                        <li><a data-hover="Login" href="/login" class="{{ (request()->is('login')) ? 'active' : '' }}"><span>Login</span></a></li>
                                        <li><a data-hover="Register" href="/register" class="{{ (request()->is('register')) ? 'active' : '' }}"><span>Register</span></a></li>
                                    </ul>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        

        <!-- CONTENT -->
        <main class="py-4">
            @yield('content')
        </main>

        
        <!---FOOTER--->
        <footer class="fixed-bottom" style="padding: 0 0 25px;">
            <div class="copyright">
                &copy; 2017 All right reserved. Designed by <a href="http://www.themevault.net/" target="_blank">ThemeVault.</a>
            </div>
        </footer>

        <!--BACK TO TOP BUTTON--->
        <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
            <span>Top</span>
        </a>
    </div>       
</body>
</html>

<!-- script template -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.imagesloaded.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/lightbox-plus-jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/instafeed.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>