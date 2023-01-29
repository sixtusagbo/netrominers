@extends('layouts.core')

@section('content')
    <section class="about mt-125">
        <div class="container">
            <div class="section-header">
                <p>About</p>
                <h2>Learn About Us</h2>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-6">
                    <p>{{ config('myglobals.app_name') }} Platform is a group company of 190, 000+ strong professionals and
                        5
                        mega data center’s parent Cyfuture with experience of over 15+ years in Data Center Industry
                        serving 32 million Customers. Our crypto mining team comes from different scientific disciplines
                        and constantly monitor latest innovations and implement them in order to benefit our investors..
                        At {{ config('myglobals.app_name') }}, we’re using world’s best ASIC (Application specific
                        integrated
                        circuit) and GPU (Graphics processing unit) machines to generate best returns for investors with
                        high efficiencies.</p>
                </div>
                <div class="col-lg-3 col-md-3 top-mb-25">
                    <div class="">
                        <a href="#">
                            <img src="{{ asset('images/certificate/cert-scrshot-usa.jpg') }}" alt="" class="w-100">
                        </a>

                        <div class="com-dtl gp-tp-2 mt-3">
                            <h3>ASIC ID</h3>
                            <p>90 763 781 563</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 top-mb-25">
                    <div class="">
                        <a href="#">
                            <img src="{{ asset('images/certificate/cert-scrshot-01.jpg') }}" alt="" class="w-100">
                        </a>

                        <div class="com-dtl gp-tp-2 mt-3">
                            <h3>ISSURANCE ID</h3>
                            <p>81 175 311 937</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="img-100">
                        <img src="{{ asset('images/abour-page.jpg') }}" alt="" draggable="false">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <p>Our mission is to spread the benefits of cryptocurrency CLOUD MINING as wide as we can. We hope
                        to make everyone a beneficiary of our devices in depth knowledge of cryptocurrency by standing
                        in between to help our investor get the best out of it. You do not need any knowledge of how
                        cryptocurrency works or acquire any skills before you can start, because we are here to help
                        you. Relax and let your money work for you.

                        With this newest innovation, We hope to create a less tasking but reliable stream of income to
                        support various lives and grow their businesses with our up to date technology, award-winning
                        support, and diversified approach to cryptocurrency. We work really hard to make sure We deliver
                        excellence in technical and fundamental analysis. We offer the best Private investment offers
                        with 100% guaranteed profit. We stay updated about the major activities and players in the
                        crypto mining space. For your queries, you can drop us a mail or chat with us.</p>
                </div>
            </div>
            <div class="row inv-top">
                <div class="col-lg-6 order-sm-12">
                    <div class="img-100">
                        <img src="{{ asset('images/abour-page-2.jpg') }}" alt="" draggable="false">
                    </div>
                </div>
                <div class="col-lg-6 order-sm-1">
                    <p>At {{ config('myglobals.app_name') }}, we understand that not all of our clients are alike. We at
                        {{ config('myglobals.app_name') }}
                        do not discriminate between our clients and want to serve all our clients with utmost
                        dedication. We understand that each of our clients face different challenges with their
                        finances. Our
                        investment plans outperform the traditional bank investment and encourage entrepreneurship
                        by encouraging clients to setup their own affiliate business with us. Fund safety, sincere
                        practices and high quality performance have been benchmark for the success of our company.
                        Having diversified business structure on major markets has allowed us to promptly pay high
                        returns to our investors. Providing non-risk plans to our investors by estimating and
                        visualizing the way the market will tend to behave by considering various factors such as
                        environmental, laws, liquidity, geopolitical, etc. has been the primary motto of our company.
                    </p>
                </div>
            </div>
            <p>Our investment plans are safe, secure, and convenient. Your fund’s safety will be the
                primary concern of our company. We provide financial stability with legal compliance along
                with anti-theft protection, thus putting security above everything.</p>
            <p>Our customer chat support team and technical assistance team will be available 24/7 to help
                you with any query that you may have and provide answer to all your questions.</p>
        </div>
    </section>

    <!-- Mining Farm Start -->
    <section class="mining" id="mining">
        <div class="container">
            <div class="section-header">
                <p>Mining</p>
                <h2>Our Mining Farm</h2>
            </div>
            <div class="row clearfix">
                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img src="{{ asset('images/team/team2.jpg') }}"
                            class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img src="{{ asset('images/team/team3.jpg') }}"
                            class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img src="{{ asset('images/team/team14.jpg') }}"
                            class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img src="{{ asset('images/team/team5.jpg') }}"
                            class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img src="{{ asset('images/team/team6.jpg') }}"
                            class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img src="{{ asset('images/team/team7.jpg') }}"
                            class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img src="{{ asset('images/team/team10.jpg') }}"
                            class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img src="{{ asset('images/team/team11.jpg') }}"
                            class="img-fluid"></a>
                </div>



                <div class="col-6 col-md-3 col-lg-3 mb-3 offset-md-3 offset-lg-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img src="{{ asset('images/team/team12.jpg') }}"
                            class="img-fluid"></a>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <a href="{{ route('register') }}" data-aos="fade-up"><img src="{{ asset('images/team/team13.jpg') }}"
                            class="img-fluid"></a>
                </div>

            </div>
        </div>
    </section>
    <!-- Mining Farm End -->

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
                                        <li><img src="{{ asset('images/crypto/btc-logo.png') }}" alt=""> Bitcoin
                                        </li>
                                        <li><img src="{{ asset('images/crypto/eth-logo.png') }}" alt=""> Ethereum
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="pay-m-img">
                        <div class="img-100 xs-top-25">
                            <img src="{{ asset('images/bitcoin-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
