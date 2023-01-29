@extends('layouts.core')

@section('content')
    <section class="about mt-125">
        <div class="container">
            <div class="section-header">
                <p>Strategies</p>
                <h2>Our Strategies</h2>
            </div>
            <div class="strat">
                <h1>Hedge Fund Strategy And Private Equity</h1>
                <p>{{ config('myglobals.app_name') }} has invested and generated some amazing compounded annual returns by
                    directly and indirectly participating in the hedge funds. {{ config('myglobals.app_name') }} apply
                    mostly
                    long/short equity strategy and has found great success with it.</p>
                <div class="str-list">
                    <h4>Long/Short equity strategy:</h4>
                    <p>A wide variety of both quantitative and fundamental
                        techniques are employed to arrive at an investment decision. We purchase the undervalued
                        stocks and sell the overvalued stocks. We go long and short in competing companies.</p>
                </div>
                <div class="str-list">
                    <h4>Convertible arbitrage:</h4>
                    <p>Convertibles generally are the hybrid securities including a
                        combination of a bond with an equity option. A convertible arbitrage hedge fund typically
                        includes long convertible bonds and short a proportion of the shares into which they convert.
                        Here at {{ config('myglobals.app_name') }}, we take long position on bonds and short positions on
                        common stock
                        or shares.</p>
                </div>
                <div class="str-list">
                    <h4>Capital structure arbitrage:</h4>
                    <p>In this strategy we go long on the sub-ordinate bonds and
                        short on the senior bonds, or long equity and short CDS. When we analyze that a particular
                        company is performing badly, we utilize this strategy. In such cases, the stocks of that
                        company will fall greatly than the bonds. We take advantage of the fact that the stocks will
                        become comparatively much cheaper than the bonds.</p>
                </div>
                <p>We have also some great private equity investments over the years. We also have our
                    investment in financial technology companies that will replace traditional banking using the
                    Internet and automation.</p>
            </div>
            <div class="row gov-str">
                <div class="col-lg-6">
                    <div class="img-100">
                        <img src="{{ asset('images/strategy1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <h4>Governing Strategy</h4>
                        <p>Our company comprises businesses into different sectors, so we have a lot to stay on top. To
                            help with that, we have built a team to communicate and report and analyse our different
                            businesses. The team alerts the CEO of the areas of concern and comes up with the probable
                            solutions, so that the governing body and the CEO can take appropriate measures and thus
                            keep this massive conglomerate functioning smoothly. The team also keeps in constant touch
                            with the rating agencies and keeps updated with the investor perspectives. We strive to keep
                            the business strategy and review process as simple as possible. Heads of each business are
                            supposed to provide five-to-ten-year growth model and explain it to our CEO and the
                            governing team in three or four simple metrics—essentially our financial-growth model. The
                            model thus presented will be assessed and tested against the market dynamics and against our
                            competitors to see if those growth aspirations make sense. We then assess the plans of each
                            heads and funds to investments that support the overall growth model of the business is
                            distributed based on this. Our governing body thus ensures that there is clarity of vision
                            and
                            strategic direction. The governing body is responsible for the financial performance of the
                            company by making sure the money is well distributed and invested into different sectors.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
