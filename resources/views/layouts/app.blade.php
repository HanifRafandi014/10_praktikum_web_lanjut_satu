<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/icons/favicon.png') }}" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
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
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <div id="logo">
                                <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                <a href="/"><span>vacay</span>home</a>
                            </div>
                        </div>
                        <div class="col-sm-6 visible-sm">
                            @guest
                            <div class="text-right"><button type="button" class="book-now-btn"><a href="/login">Login</a></button></div>
                            @endguest
                            @auth
                            <div class="text-right"><button type="button" class="book-now-btn">{{ Auth::user()->name }}</button></div>
                            @endauth
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header page-scroll">
                                    <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div>
                                <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                    <ul class="list-unstyled nav1 cl-effect-10">
                                        <li><a data-hover="Home" href="/" class="{{ (request()->is('/')) ? 'active' : '' }}"><span>Home</span></a></li>
                                        <li><a data-hover="About" href="/about" class="{{ (request()->is('about'))  ? 'active' : '' }}"><span>About</span></a></li>
                                        <li><a data-hover="Rooms" href="/rooms" class="{{ (request()->is('rooms'))  ? 'active' : '' }}"><span>Rooms</span></a></li>
                                        <li><a data-hover="Gallery" href="/gallery" class="{{ (request()->is('gallery'))  ? 'active' : '' }}"><span>Gallery</span></a></li>
                                        <li><a data-hover="Dinning" href="/dinning" class="{{ (request()->is('dinning'))  ? 'active' : '' }}"><span>Dinning</span></a></li>
                                        <li><a data-hover="News" href="/news" class="{{ (request()->is('news'))  ? 'active' : '' }}"><span>News</span></a></li>
                                        <li><a data-hover="Contact Us" href="/contact" class="{{ (request()->is('contact'))  ? 'active' : '' }}"><span>contact Us</span></a></li>
                                    </ul>

                                </div>
                            </nav>
                        </div>
                        <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                            @guest
                            <div class="text-right"><button type="button" class="book-now-btn"><a href="/login">Login</a></button></div>
                            @endguest
                            @auth
                            <div class="text-right"><button type="button" class="book-now-btn">{{ Auth::user()->name }}</button>
                                <div class="" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        @endauth
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
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                    <div class="footer-details">
                        <h4>Get in touch</h4>
                        <ul class="list-unstyled footer-contact-list">
                            <li>
                                <i class="fa fa-map-marker fa-lg"></i>
                                <p>701 Old York Drive Richmond USA.</p>
                            </li>
                            <li>
                                <i class="fa fa-phone fa-lg"></i>
                                <p><a href="tel:+1-202-555-0100"> +1-202-555-0100</a></p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o fa-lg"></i>
                                <p><a href="mailto:demo@info.com"> demo@info.com</a></p>
                            </li>
                        </ul>
                        <div class="footer-social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <div class="input-group" id="subscribe">
                            <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                            <span class="input-group-btn">
                                <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                    <div class="footer-details">
                        <h4>explore</h4>
                        <ul class="list-unstyled footer-links">
                            <li class="{{ (request()->is('/')) ? 'active' : ''}}"><a href="/">Home</a></li>
                            <li class="{{ (request()->is('about')) ? 'active' : ''}}"><a href="/about">About</a></li>
                            <li class="{{ (request()->is('rooms')) ? 'active' : ''}}"><a href="/rooms">Rooms</a></li>
                            <li class="{{ (request()->is('gallery')) ? 'active' : ''}}"><a href="/gallery">Gallery</a></li>
                            <li class="{{ (request()->is('dinning')) ? 'active' : ''}}"><a href="/dinning">Dinning</a></li>
                            <li class="{{ (request()->is('news')) ? 'active' : ''}}"> <a href="/news">News</a></li>
                            <li class="{{ (request()->is('contact')) ? 'active' : ''}}"> <a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="footer-details">
                        <h4>Now On Instagram</h4>
                        <div class="row">
                            <div class="instagram-images">
                                <div id="instafeed"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright">
                &copy; 2017 All right reserved. Designed by <a href="http://www.themevault.net/" target="_blank">ThemeVault.</a>
            </div>

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