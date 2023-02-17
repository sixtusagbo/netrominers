<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>{{ config('myglobals.app_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="{{ config('myglobals.app_name') }}">
    <meta name="author" content="{{ config('myglobals.app_name') }}">
    <meta name="description" content="{{ config('myglobals.seo.description') }}">
    <meta name="keywords" content="{{ config('myglobals.seo.keywords') }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:title" content="{{ config('myglobals.app_name') }}">
    <meta property="og:description" content="{{ config('myglobals.seo.description') }}">
    <meta property="og:image" content="{{ asset('images/logo.svg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ config('app.url') }}">
    <meta property="twitter:title" content="{{ config('myglobals.app_name') }}">
    <meta property="twitter:description" content="{{ config('myglobals.seo.description') }}">
    <meta property="twitter:image" content="{{ asset('images/logo.svg') }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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
    <div class="wrapper">
        <div class="container">
            <div class="boxs">
                <p style="text-align: center">The most secure marketplace for buying and selling unique crpto
                    assests.
                </p>
                <a href="{{ route('register') }}"><button>Get Started</button></a>
                <a href="#plans"><button id="btn-explore">Explore Plans</button></a>
            </div>
            <div class="boxs">
                <img src="{{ asset('images/illustrations/hero.png') }}" class="illustor">
            </div>
        </div>
    </div>
    <div class="example">
        <div id="cirl" class="abot-holder"></div>
        <div id="about" class="abot-holder">
            <h1>WELCOME TO NETROMINERS</h1>
            <p class="text-pad">We are Netrominers, a VN based company involved with trading in cryptocurrencies. Our
                company was founded
                by a
                group of skilled analysts and experienced traders, to create a secure and highly profitable investment
                opportunities. Our trading department is primarily focused on the trading of Cryptocurrencies such as
                Bitcoin,
                Bitcoin Cash, Ethereum and Litecoin. We help our clients earn money on the volatility of the
                cryptocurrency
                market. Due to the use of high frequency, medium-term and long-term trading strategies our company is
                able to
                consistently generate a high percentage of profits and thereby pay high interests to their investors.
            </p>
            <p id="text-pad">Our success is secured by well-coordinated work of a big team of experts (economists,
                analysts,
                traders) whose interaction leads to the efficient operation of the whole company. Cooperation with us
                means new
                opportunities in obtaining stable passive income, regardless of external factors. Investment security,
                predictability of processes and predictability of profits are the three main advantages of our company
                when it
                comes to cooperation with potential investors based on our online resource.

            </p>
        </div>
    </div>
    <div class="plan-holder" id="plans">
        <div class="pl">
            <h5>PLANS</h5>
            <h1>Cloud pricing plan</h1>
        </div>
        <div class="plans">
            @forelse ($plans as $plan)
                <div class="plan-boxs">
                    <h1 class="plan">{{ $plan->name }}</h1>
                    <div class="plan-details">
                        <h2>ROI: {{ $plan->return }}%</h2>
                        <p class="profit-p">{{ $plan->return }}% <b>profit</b></p>
                        <p class="profit-p"><b>After {{ $plan->mining_period / 24 }}
                                Day(s)</b></p>
                        <p>minimum input: @money($plan->min_deposit)</p>
                        <p>Maximum input: @if ($plan->max_deposit == null)
                                Unlimited
                            @else
                                @money($plan->max_deposit)
                            @endif
                        </p>
                        <p>{{ config('myglobals.ref_worth') }} Referral bonus</p>
                        <h3 class="plan-btn" onclick="window.location = '/deposit'">PURCHASE NOW <i
                                class="fa fa-chevron-right" aria-hidden="true"></i></h3>
                    </div>

                </div>
            @empty
                <div class="alert alert-warning" role="alert">
                    Admin please run your migrations!
                </div>
            @endforelse

        </div>
        <div class="advat">
            <div class="advat-divs" id="maker">
            </div>
            <div id="gif-text" class="advat-divs">
                <div class="text-mover">
                    <h1>Experienced team</h1>
                    <p>We aim on creating risk-free investment environment for our investors. Safety of your investment
                        will be
                        our prime concern. Data-security and anti-theft protection features have been implemented to
                        safeguard the
                        information of all our investors and stakeholders. <strong>NETROMINERS</strong> is an authentic
                        company with
                        good accountability. Our website is very secure and guarantees safety of our investors against
                        all frauds.
                        We have incorporated robust content management system for advanced protection and sustaining
                        fast processes.
                        All the data of the company and its investors is encrypted and protected.</p>
                </div>
            </div>
            <div id="gif-text" class="advat-divs">
                <div class="text-mover">
                    <h1>Steady income</h1>
                    <p>Cryptocurrency Mining is done by specialized computers. The role of miners is to secure the
                        network and to
                        process every Bitcoin transaction. Here in <strong>Netrominers</strong> platform , we achieve
                        this by
                        solving a computational problems which allows us to chain together blocks of transactions. For
                        this service,
                        we are rewarded with newly-created Bitcoins and transaction fees. Mining is popular today and
                        offers
                        excellent opportunities to earn extra money. <strong>Netrominers</strong> has been the reliable
                        address for
                        competitively priced cryptominers. Because we only supply profitable products, our customer base
                        are
                        constantly increasing. We strive to keep our customers happy by offering quick delivery and at
                        the best
                        online prices. offering support after purchase speaks for itself.</p>
                </div>
            </div>
            <div class="advat-divs" id="makers">
            </div>

        </div>
        <div class="all-boxs">
            <center>
                <h2>Latest Transactions</h2>
            </center>
            <center>
                <iframe class="btc_widget-sm"
                    src="https://www.btcwidget.info/widget/liveTx/%23ffffff/%23ffa500/%23ffffff/%234682b4/%23ffffff/400/120/9"
                    width="400" height="250" frameBorder="0" scrolling="no"></iframe>
                <iframe class="btc_widget-md"
                    src="https://www.btcwidget.info/widget/liveTx/%23ffffff/%23ffffff/%23ffffff/%233289b4/%23ffffff/1000/1000/10"
                    width="1000" height="600" frameBorder="0" scrolling="no"></iframe>
            </center>
        </div>
        <footer>
            <div class="padder">
                <div class="foot">
                    <div class="footer-div">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/logo.svg') }}" id="logo"></a>
                        <p>NETROMINERS is a group company of 190, 000+ strong professionals and 5 mega data center’s
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
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="copy">
                    &copy;<p>2023 Netrominers All Right Reserved</p>
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
                s1.src = 'https://embed.tawk.to/62e1086454f06e12d88b91e5/1g8vghoir';
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
