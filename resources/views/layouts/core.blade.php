<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>{{ config('myglobals.app_name') }}</title>
    <meta property="og:title" content="{{ config('myglobals.app_name') }}">
    <meta property="og:description" content="Advance Crypto Mining Service.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="{{ config('myglobals.app_name') }} Platform is a group company of 190, 000+ strong professionals and 5
    mega data center’s parent feature with experience of over 15+ years in Data Center Industry
    serving 32 million Customers and generating best returns for investors with high efficiency.">
    <meta name="keywords" content="crypto, mining, service, bitcoin, ethereum">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('js/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- My Stylesheets -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        html,
        body {
            overflow-x: hidden;
            width: 100% !important;
        }
    </style>
</head>

<body>

    @if (!Request::is('/'))
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
        </div>
        <!-- Top Bar End -->
    @endif

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('images/logo.png') }}" alt="" draggable="false">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="{{ url('/') }}"
                        class="nav-item nav-link @if (Request::is('/')) active @endif">Home</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Company
                        </a>
                        <div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item @if (Request::is('about')) active @endif" id="about-us"
                                href="{{ route('about') }}">About us</a>
                            <a class="dropdown-item @if (Request::is('why_us')) active @endif" id="why-us"
                                href="{{ route('why_us') }}">Why Choose us</a>

                            <a class="dropdown-item @if (Request::is('forex_trading')) active @endif" id="forex_trading"
                                href="{{ route('forex_trading') }}">Forex Trading</a>
                            <a class="dropdown-item @if (Request::is('commitments')) active @endif" id="commitments"
                                href="{{ route('commitments') }}">Commitments</a>
                            <a class="dropdown-item @if (Request::is('stratagies')) active @endif" id="stratagies"
                                href="{{ route('stratagies') }}">Strategies</a>
                        </div>
                    </li>
                    <li class="nav-item @if (Request::is('affiliate')) active @endif" id="affiliate">
                        <a class="nav-link" href="{{ route('affiliate') }}">Affiliate</a>
                    </li>

                    <li class="nav-item @if (Request::is('faq')) active @endif" id="faq">
                        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item @if (Request::is('contact')) active @endif" id="contact">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a href="{{ route('home') }}" id="" class="nav-link">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" id="" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>

                            <script src="//code.tidio.co/bqwkfaba7sy6a2zlvrdxiwbzmz0bsjmw.js" async></script>
                        </li>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-contact">
                                <img src="{{ asset('images/logo.png') }}" alt="" class="w-50">
                                <p>{{ config('myglobals.app_name') }} Platform is a group company of 190, 000+ strong
                                    professionals
                                    and 5
                                    mega data center’s parent Cyfuture with experience of over 15+ years in Data Center
                                    Industry
                                    serving 32 million Customers and generating best returns for investors with high
                                    efficiency.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-link">
                                <h2>Quick Links</h2>
                                <a href="{{ route('affiliate') }}">Affiliate</a>
                                <a href="{{ route('faq') }}">FAQ</a>
                                <a href="{{ route('contact') }}">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="footer-link">
                        <h2>Legal</h2>
                        <a href="{{ route('security') }}">Security Information</a>
                        <a href="{{ route('terms') }}">Terms &amp; Conditions</a>
                        <div class="mt-3">
                            <img src="{{ asset('images/dmca.png') }}" alt="DMCA.com Protection Status"
                                width="100px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-light">&copy; 2022 <a href="{{ url('/') }}">bit-fin.co</a> All Right
                        Reserved</p>
                </div>
                <div class="col-md-6">
                    <p class="text-light"><img src="{{ asset('images/envelope.png') }}" alt="">
                        support@bit-fin.co</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('js/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/lib/counterup/counterup.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('js/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('js/mail/contact.js') }}"></script>

    <!-- My Javascript -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
