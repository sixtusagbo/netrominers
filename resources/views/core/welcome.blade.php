@extends('layouts.core')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="boxs">
                <p style="text-align: center">The most secure marketplace for buying and selling unique crypto
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
            <h1>WELCOME TO SMART PROTOCOL</h1>
            <p class="text-pad">We are Smart Protocol, a VN based company involved with trading in cryptocurrencies. Our
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
                    information of all our investors and stakeholders. <strong>Smart Protocol</strong> is an authentic
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
                    process every Bitcoin transaction. Here in <strong>Smart Protocol</strong> platform , we achieve
                    this by
                    solving a computational problems which allows us to chain together blocks of transactions. For
                    this service,
                    we are rewarded with newly-created Bitcoins and transaction fees. Mining is popular today and
                    offers
                    excellent opportunities to earn extra money. <strong>Smart Protocol</strong> has been the reliable
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
    <div class="certificate">
        <img src="{{ asset('images/certificate.jpeg') }}" alt="">
    </div>
@endsection
