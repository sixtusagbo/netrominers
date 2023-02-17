@extends('layouts.core')

@section('content')
    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('images/slider-usa.jpg') }}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Start Mining With {{ config('myglobals.app_name') }} Platform</h1>
                        <div class="carousel-btn">
                            <a class="btn" href="{{ route('register') }}"><i class="fa fa-link"></i>Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('images/slider-5.jpg') }}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>We Are The Highest Paying Mining Company Globally</h1>
                        <div class="carousel-btn">
                            <a class="btn" href="{{ route('register') }}"><i class="fa fa-link"></i>Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('images/slider-bman.jpg') }}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>We Serve Many Happy Customers Globally</h1>
                        <div class="carousel-btn">
                            <a class="btn" href="{{ route('register') }}"><i class="fa fa-link"></i>Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trading View Widget Start -->
        <div class="market-ticker">
            <div class="tradingview-widget-container cs-con" style="width: 100%; height: 104px;">
                <iframe scrolling="no" allowtransparency="true" frameborder="0"
                    src="https://s.tradingview.com/embed-widget/ticker-tape/?locale=in#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX%3AEURUSD%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX%3AUSDJPY%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX%3AEURGBP%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX_IDC%3AINGEUR%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX_IDC%3AAUGUSD%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX_IDC%3AINIEUR%22%7D%5D%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Atrue%2C%22displayMode%22%3A%22adaptive%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A76%2C%22utm_source%22%3A%22richnetfunds.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22ticker-tape%22%7D"
                    style="box-sizing: border-box; height: 72px; width: 100%;" class="bg-dark"></iframe>
                <div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span
                            class="blue-text"></span></a>
                </div>
            </div>
        </div>
        <!-- Trading View Widget End -->
    </div>
    <!-- Carousel End -->

    <!-- Fact Start -->
    <div class="fact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item" data-aos="fade-right">
                        <img src="{{ asset('images/new/icon-4.png') }}" alt="Icon">
                        <h2>Qualified Team</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item" data-aos="fade-up">
                        <img src="{{ asset('images/new/icon-1.png') }}" alt="Icon">
                        <h2>Individual Approach</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item" data-aos="fade-up">
                        <img src="{{ asset('images/new/icon-8.png') }}" alt="Icon">
                        <h2>100% Success</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item" data-aos="fade-left">
                        <img src="{{ asset('images/new/icon-6.png') }}" alt="Icon">
                        <h2>100% Satisfaction</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Start -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-img">
                        <div class="about-img-1" data-aos="fade-right">
                            <img src="{{ asset('images/abour-page-2.jpg') }}" alt="Image">
                        </div>
                        <div class="about-img-2" data-aos="fade-up">
                            <img src="{{ asset('images/bitcoin-2.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-header">
                        <p>Learn About Us</p>
                        <h2>Cloud Mining Service Providers</h2>
                    </div>
                    <div class="about-text" data-aos="fade-left">
                        <p>
                            {{ config('myglobals.app_name') }} Platform is a group company of 190, 000+ strong
                            professionals and 5 mega data center’s parent Cyfuture with experience of over 15+ years
                            in Data Center Industry serving 32 million Customers. Our crypto mining team comes from
                            different scientific disciplines and constantly monitor latest innovations and implement
                            them in order to benefit our investors.
                        </p>
                        <p>
                            At {{ config('myglobals.app_name') }}, we’re using
                            world’s best ASIC (Application specific integrated circuit) and GPU (Graphics processing
                            unit) machines to generate best returns for investors with high efficiencies.
                        </p>
                        <a class="btn" href="#plans">Our Plans</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Plans Start -->
    <section class="plans" id="plans">
        <div class="container">
            <div class="section-header">
                <p>Plans</p>
                <h2>Cloud Pricing Plan</h2>
            </div>
            <div class="row d-flex justify-content-center">

                @forelse ($plans as $plan)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card bg-dark text-light" data-aos="fade-up">
                            <div class="card-body">
                                <div class="card-header bg-yellow-green-yellow">
                                    <h4 class="text-uppercase">{{ $plan->name }}</h4>
                                    <h1>ROI: {{ $plan->return . '%' }}</h1>
                                </div>

                                <div class="text-center pt-2">

                                    <p><strong><em>{{ $plan->return . '%' }} Profit</em></strong>
                                    </p>

                                    <p><strong><em>After {{ $plan->mining_period / 24 }}
                                                Day(s)</em></strong></p>
                                    <ul class="list-unstyled">
                                        <li>
                                            Minimum Input: <strong>
                                                @if ($plan->min_deposit == 1)
                                                    1 BTC
                                                @else
                                                    @money($plan->min_deposit)
                                                @endif
                                            </strong>
                                        </li>
                                        <hr>
                                        <li>
                                            Maximum Input: <strong>
                                                @if ($plan->max_deposit == null)
                                                    Unlimited
                                                @else
                                                    @money($plan->max_deposit)
                                                @endif
                                            </strong>
                                        </li>
                                        <hr>
                                        <li>Capital Return:<strong> YES</strong></li>
                                    </ul>
                                </div>

                                <div class="card-footer"
                                    style="background: linear-gradient(90deg,#fbf5ae,#00803727 30%,#ece76e 60%,#00803752 70%,#ece76e);">
                                    <a href="{{ route('login') }}" class="text-light">Purchase Now <i
                                            class="fa fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning" role="alert">
                        Admin please run your migrations!
                    </div>
                @endforelse

            </div>

            <div class="main-plan-in mt-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="ref-min-notice" data-aos="fade-right">
                            <img src="{{ asset('images/refer/change.svg') }}" width="30px">
                            <h4>{{ config('myglobals.ref_worth') }} Direct Referral</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-3">
                        <div class="ref-min-notice" data-aos="fade-left">
                            <img src="{{ asset('images/refer/money-bag.svg') }}" width="30px">
                            <h4>@money(config('myglobals.min_withdrawal')) Minimum Withdrawal</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="keypoints keypoints-fist mt-4" data-aos="fade-up">
                <div class="section-title">
                    <h5 class="text-light">Plan Key Points</h5>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="pay-m">
                            <ul style="list-style-type: none;">
                                <li><img src="{{ asset('images/tick.svg') }}" alt=""> Return on
                                    Investment:
                                    After
                                    Complete Mining Cycle</li>
                                <li><img src="{{ asset('images/tick.svg') }}" alt=""> Direct Referral
                                    Bonus: <strong class="ml-1"> {{ config('myglobals.ref_worth') }}</strong>
                                </li>
                                <li><img src="{{ asset('images/tick.svg') }}" alt=""> Withdrawal Charges:
                                    <strong class="ml-1">
                                        {{ config('myglobals.withdrawal_charge') . '%' }}</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pay-m">
                            <ul style="list-style-type: none;">
                                <li><img src="{{ asset('images/tick.svg') }}" alt=""> Internal transfer:
                                    No
                                    Charges</li>
                                <li><img src="{{ asset('images/tick.svg') }}" alt=""> Minimum Investment:
                                    <strong class="ml-1"> @money(config('myglobals.min_investment'))</strong>
                                </li>
                                <li><img src="{{ asset('images/tick.svg') }}" alt=""> Minimum Withdrawal:
                                    <strong class="ml-1"> @money(config('myglobals.min_withdrawal'))</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="section-header">
                    <p>Calculate the returns</p>
                    <h2>Calculator</h2>
                </div>
                <div data-aos="fade-up">
                    <!-- CryptoRival Calculator Widget BEGIN -->
                    <script type="text/javascript" src="{{ asset('js/cryptorival_calcwidget.js') }}"></script>
                    <a id="cr-copyright" href="https://cryptorival.com/" target="_blank" rel="nofollow">Powered
                        by CryptoRival</a>
                    <script type="text/javascript">
                        showCalc('bitcoin', '500', false, '0', 'f93', 'f93', 'f93', '4e9f15', '09c', 'f0ad4e', 'd9534f', 'f5f5f5', 'eee');
                    </script>
                    <!-- CryptoRival Calculator Widget END -->
                    </center>
                </div>
            </div>
    </section>
    <!-- Plans End -->

    <!-- Mining Farm Start -->
    <section class="mining" id="mining">
        <div class="container">
            <div class="section-header">
                <p>Mining</p>
                <h2>Our Mining Farm</h2>
            </div>
            <div class="row clearfix">
                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img
                            src="{{ asset('images/team/team2.jpg') }}" class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img
                            src="{{ asset('images/team/team3.jpg') }}" class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img
                            src="{{ asset('images/team/team14.jpg') }}" class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img
                            src="{{ asset('images/team/team5.jpg') }}" class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img
                            src="{{ asset('images/team/team6.jpg') }}" class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img
                            src="{{ asset('images/team/team7.jpg') }}" class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img
                            src="{{ asset('images/team/team10.jpg') }}" class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img
                            src="{{ asset('images/team/team11.jpg') }}" class="img-fluid"></a>
                </div>



                <div class="col-6 col-md-3 col-lg-3 mb-3 offset-md-3 offset-lg-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img
                            src="{{ asset('images/team/team12.jpg') }}" class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img
                            src="{{ asset('images/team/team13.jpg') }}" class="img-fluid"></a>
                </div>

            </div>
        </div>
    </section>
    <!-- Mining Farm End -->

    <!-- Commitments Start -->
    <section class="commitments mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6" data-aos="fade-right">
                    <div class="section-header">
                        <p>Commitment</p>
                        <h2>Commitment To Our Investors</h2>
                    </div>
                    <p>
                        {{ config('myglobals.app_name') }} appreciate the trust the investors have in us all throughout
                        the
                        world. Even at
                        difficult times when other businesses are suffering due to pandemics, war, economic and
                        social unrest, we on the other hand have been able to support our investors and our
                        employees and even support their families as w
                        ell. We are grateful to our clients in keeping
                        trust in us and investing in us and we promise to keep the trust and pay back the profits
                        along
                        with the other bonuses promptly and diligently.
                    </p>
                    <p> Our success in balancing out the multiple
                        businesses and reaping profits, and then supporting the community back even when most of
                        the governments have failed makes us very proud.</p>
                    <div class="btn-g">
                        <a href="{{ route('register') }}" class="btn btn-success">Get Started <i
                                class="fa fa-arrow-alt-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 pr-3" data-aos="fade-left">
                    <div class="">
                        <a href="#" data-toggle="modal" data-target="#vtCertModelUSA">
                            <img src="{{ asset('images/certificate/cert-scrshot-usa.jpg') }}" alt=""
                                class="w-100">
                        </a>

                        <div class="modal fade" id="vtCertModelUSA" tabindex="-1" role="dialog"
                            aria-labelledby="vtCertModelUSALabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <div class="vt-modl__crt">
                                            <img src="{{ asset('images/certificate/cert-scrshot-usa.jpg') }}"
                                                alt="" width="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="com-dtl gp-tp-2 mt-3">
                            <h3>ASIC ID</h3>
                            <p>90 763 781 563</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3" data-aos="fade-left">
                    <div class="">
                        <a href="#" data-toggle="modal" data-target="#vtCertModel">
                            <img src="{{ asset('images/certificate/cert-scrshot-01.jpg') }}" alt=""
                                class="w-100">
                        </a>

                        <div class="modal fade" id="vtCertModel" tabindex="-1" role="dialog"
                            aria-labelledby="vtCertModelLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <div class="vt-modl__crt">
                                            <img src="{{ asset('images/certificate/cert-scrshot-01.jpg') }}"
                                                alt="" width="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="com-dtl gp-tp-2 mt-3">
                            <h3>Your Funds Are Fully Insured</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Commitments End -->

    <!-- Advantages Start -->
    <section class="mt-5">
        <div class="container">
            <div class="section-header">
                <p>Advantages</p>
                <h2>Advantages Of Investing In {{ config('myglobals.app_name') }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 p-4" data-aos="fade-right">
                    <div class="">
                        <h1>High Standard Security</h1>
                        <p>We aim on creating risk-free investment environment for our investors. Safety of your
                            investment will be our prime concern. Data-security and anti-theft protection features have
                            been implemented to safeguard the information of all our investors and stakeholders. Bitcoin
                            Financial Company is an authentic company with EV SSL Certificate. Our website is very
                            secure and guarantees safety of our investors against all frauds. We have incorporated
                            robust content management system for advanced protection and sustaining fast processes. All
                            the data of the company and its investors is encrypted and protected.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 p-4" data-aos="fade-left">
                    <img src="{{ asset('images/security.jpg') }}" alt="" class="w-100">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 p-4 order-sm-12" data-aos="fade-right">
                    <div class="">
                        <h1>Guaranteed Income</h1>
                        <p>{{ config('myglobals.app_name') }} has a much diversified business portfolio. All the portfolios
                            of {{ config('myglobals.app_name') }} have been highly profitable. Having diversified business
                            structure in Digital Cloud mining has allowed us to promptly pay high returns to our
                            investors. Our major income comes from Digital Cloud mining which is the most efficient way
                            to mine crypto on the blockchain networks with high returns. Our experts are well-versed in
                            anticipating and estimating the market trend and design portfolio investment accordingly to
                            get highest profit. Our crypto mining team comes from different scientific disciplines and
                            constantly monitor latest innovations and implement them in order to benefit our investors.
                            We have large-scale industrial data centers with state-of-the-art technology to host the
                            diverse and complex mining environments. At {{ config('myglobals.app_name') }}, we’re using
                            world’s best ASIC (Application specific integrated circuit) and GPU (Graphics processing
                            unit) machines to generate best returns with high efficiencies..</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 order-sm-1" data-aos="fade-left">
                    <img src="{{ asset('images/trad.jpg') }}" alt="" class="w-100">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6" data-aos="fade-right">
                    <div class="">
                        <h1>Profitable Strategy</h1>
                        <p>Cryptocurrency Mining is done by specialized computers. The role of miners is to secure the
                            network and to process every Bitcoin transaction. Here in {{ config('myglobals.app_name') }}
                            platform , we achieve this by solving a computational problems which allows us to chain
                            together blocks of transactions. For this service, we are rewarded with newly-created
                            Bitcoins and transaction fees. Mining is popular today and offers excellent opportunities to
                            earn extra money. {{ config('myglobals.app_name') }}_Miners has been the reliable address for
                            competitively priced cryptominers. Because we only supply profitable products, our customer
                            base are constantly increasing. We strive to keep our customers happy by offering quick
                            delivery and at the best online prices. offering support after purchase speaks for itself.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-left">
                    <img src="{{ asset('images/strategy.jpg') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>
    <!-- Advantages End -->

    <!-- Payment Methods Start -->
    <section class="mt-5">
        <div class="container">
            <div class="section-header">
                <p>Payment Methods</p>
                <h2>Supported Payment Methods</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="pay-m">
                        <h4>Simple &amp; secure access to buy, sell <br> and use Bitcoin</h4>
                        <div class="paylist">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><img src="{{ asset('images/crypto/btc-logo.png') }}" alt="">
                                            Bitcoin
                                        </li>
                                        <li><img src="{{ asset('images/crypto/eth-logo.png') }}" alt="">
                                            Ethereum
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-6 mt-25">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="pay-m-img">


                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="btc-info" data-aos="fade-right">
                        <div class="btc-info__img">
                            <img src="{{ asset('images/btc/buy/001-exchange.svg') }}" alt="">
                        </div>
                        <div class="btc-info__con">
                            <h4 class="text-light">Why Choose Us</h4>
                            <p class="text-light">At this time when the world economy is suffering and the market is
                                lucrative, it is very
                                important for you to know where exactly you should invest and which area will safeguard
                                your assets.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-3">
                    <div class="btc-info" data-aos="fade-left">
                        <div class="btc-info__img">
                            <img src="{{ asset('images/btc/buy/002-bitcoin.svg') }}" alt="">
                        </div>
                        <div class="btc-info__con">
                            <h4 class="text-light">Stability And Reliability Of Crypto</h4>
                            <p class="text-light">Crypto provides hedge against inflation, Crypto provides hedge against
                                global
                                instability, Speculate on demand growth, Portfolio diversification</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Payment Methods End -->

    <!-- Affiliate Start -->
    <section class="mt-5">
        <div class="container">
            <div class="section-header">
                <p>Affiliate</p>
                <h2>Affiliate Program</h2>
            </div>
            <div class="section-title btm-50">
                <p>{{ config('myglobals.app_name') }} offers additional opportunities in the form of referral program and
                    binary
                    matching income. Anybody can become a member of our program by registering to our
                    program. To earn referral income, all you have to do is to share information about our
                    investment offer with your friends, family, acquaintances or colleagues, as well as send them
                    a unique referral link; after someone registers through your link, that person becomes your
                    referral.</p>
            </div>
            <div class="row mt-4">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="aff-con">
                        <div class="aff-cntr">
                            <img src="{{ asset('images/affl.jpg') }}" alt="">
                            <h3 class="text-center mt-3">Referral Income</h3>
                            <p>As and when a member refers another member for investing under his/her
                                own sponsor ID, the sponsor receives 10% as referral income on the member’s investment.
                                Referral income is pooled instantly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="aff-con">
                        <div class="aff-cntr">
                            <img src="{{ asset('images/bin.jpg') }}" alt="">
                            <h3 class="text-center mt-3">GUARANTEED INCOME</h3>
                            <p>{{ config('myglobals.app_name') }} has a much diversified business portfolio. All the
                                portfolios of our Company have been highly profitable. Having diversified business
                                structure in Digital Cloud mining has allowed us to promptly pay high returns to our
                                investors. Please refer to our technical support for further details.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Affiliate End -->
@endsection
