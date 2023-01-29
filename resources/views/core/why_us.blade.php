@extends('layouts.core')

@section('content')
    <section class="about mt-125">
        <div class="container">
            <div class="section-header">
                <p>Why Us</p>
                <h2>Why Choose Us</h2>
            </div>
            <p data-aos="fade-up">We are highly experienced in offering a variety of consulting service for more than 50
                retirement plan
                platforms including 401(k), 403(b), 457, Profit Sharing, Defined Benefit and ESOPs. We service qualified
                plans with assets in excess of $70 Billion. Plus, Mining has excellent working relationships with dozens
                of investment companies so your provider likely already knows us. This inclusive market knowledge also
                helps us provide you with a global perspective that will help you create a solid mix of investment
                options in your plan. We devise solutions on behalf of cryptocurrency mining that balance the
                requirements of the projected parties, i.e., customers, suppliers and capital providers(investors). We
                have created and greatly benefit from our well- and long-established relationships with members of the
                global crypto-mining community in order to realize projects.
                We provide a multi-algorithm, multi-coin cloud mining service using the latest technology for most
                secured and efficient outputs.</p>
            <div class="row inv-top">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="img-100">
                        <img src="{{ asset('images/why-1.jpg') }}" alt="" draggable="false">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <p>Mining is done by specialized computers. The role of miners is to secure the network and to
                        process every Bitcoin transaction. Here in {{ config('myglobals.app_name') }} platform , we achieve
                        this by solving a computational problems which allows us to chain together blocks of
                        transactions. For this service, we are rewarded with newly-created Bitcoins and transaction
                        fees.</p>
                </div>
            </div>
            <div class="row mt-4" data-aos="fade-up">
                <div class="col-lg-6 order-sm-12">
                    <div class="img-100">
                        <img src="{{ asset('images/why-2.jpg') }}" alt="" draggable="false">
                    </div>
                </div>
                <div class="col-lg-6 order-sm-1">
                    <p>Since the crypto market is a decentralized market and the movements of digital assets are
                        volatile, it provides us with the opportunity to chance upon this criterion to mine digital
                        blocks. The volatility means there are higher chances for profits. Our expertise on cloud mining
                        allows us to take advantage of the volatility of the market and thus always keep us at profit.

                        We also invest in variety of assets through secure risk management strategy. We are also proud
                        to be associated with hedge funds and have had financed many promising hot companies that aren't
                        yet public. We have also some great private equity investments over the years. We also have our
                        investment in financial technology companies that will replace traditional banking using the
                        Internet and automation.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
