@extends('layouts.core')

@section('content')
    <section class="about mt-125">
        <div class="container">
            <div class="section-header">
                <p>Forex</p>
                <h2>Forex Trading</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-100">
                        <img src="{{ asset('images/forex.jpg') }}" alt="" draggable="false">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p>FOREX (Foreign Exchange Market) could be easily summed up as the rate of exchange of
                        one currency to another. Forex has the largest trading volume when compared to the stock
                        markets. The governing bodies of the countries have always made strict regulations for
                        Forex trading and their respective brokers. This is the reason Forex trading is highly secure
                        and more reliable form of trading. We trade several markets including FX, Indices,
                        Commodities, Equities and Cryptos. Our trading system has a tight spread over innumerable
                        pairs, including currencies and spot metals. Forex markets are open all throughout the day,
                        thus allowing us to trade at our convenience. {{ config('myglobals.app_name') }} uses automated
                        trading system
                        with quality human assistance. The system also incorporates hedging to minimise trade risks.
                        The data on the Forex market trend is fed constantly back to the system and strategies
                        are developed continuously. Thus the system itself is mostly automated and trading is done
                        at high success rate. Thus our investors are not required to study the Forex market and can
                        directly take advantage of the system and receive constant payouts. Since Forex trade works
                        on the difference between exchange rates of two currencies, our system with high speed
                        combined with humongous data and analytical technology, accurately makes a profitable
                        trade on all occasions.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
