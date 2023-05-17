<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>{{ config('myglobals.app_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-16x16.png') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <style>
        html,
        body {
            overflow-x: hidden;
            width: 100% !important;
        }
    </style>

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'fc8eacf3d4954fb01620e09f6dee9e50d4d356c9';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</head>

<body>
    <header class="header">
        <div id="google_translate_element"></div>
        <nav class="navigation">
            <div class="header-divs">
                <a href="{{ url('/') }}"><img src="{{ asset('images/logo.svg') }}" id="logo"></a>
            </div>
            <div class="header-divs" id="toper">
                <ul class="nav-sub">
                    <li class="shifter"><a href="#" id="link-colored">Home</a>
                        <div id="line"></div>
                    </li>
                    <li class="shifter"><a href="#about">About</a></li>
                    <li class="shifter"><a href="#plans">Plans</a></li>
                    <li class="shifter"><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}" id="hide-log">Log in</a></li>
                </ul>
            </div>
            <div class="ham">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
            </div>
            <div class="header-divs" id="shift-small"><a href="{{ route('login') }}" id="btn">
                    <button>Log in</button>
            </div>
        </nav>
    </header>
    <div class="header-divs" id="btn" class="nav-sub">
        <a href="{{ route('login') }}"><button>Log in</button></a>
    </div>

    @yield('content')

    <footer>
        <div class="padder">
            <div class="foot">
                <div class="footer-div">
                    <a href="{{ url('/') }}"><img src="{{ asset('images/logo.svg') }}" id="logo"></a>
                    <p>Smart Protocol is a group company of 190, 000+ strong professionals and 5 mega data center’s
                        parent Cyfuture
                        with experience of over 15+ years in Data Center Industry serving 32 million Customers and
                        generating best
                        returns for investors with high efficiency.</p>
                </div>
                <div class="footer-div">
                    <h2>Quick-links</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#plans">Plans</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('login') }}" id="hide-log">Log in</li>
                        <li><a href="{{ asset('images/certificate.jpeg') }}" target="_blank">Certificate</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="copy">
                &copy;<p>2023 Smart Protocol. All Right Reserved.</p>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element'
            );
        }
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/63f18f4e4247f20fefe15cbf/1gpjpfiqs';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script src="{{ asset('js/core.js') }}"></script>
</body>

</html>
