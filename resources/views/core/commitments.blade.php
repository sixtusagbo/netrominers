@extends('layouts.core')

@section('content')
    <section class="about mt-125">
        <div class="container">
            <div class="section-header">
                <p>Commitment</p>
                <h2>To Our Dear Customers</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-100">
                        <img src="{{ asset('images/cmt.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p>{{ config('myglobals.app_name') }} appreciate the trust the investors have in us all throughout the
                        world. Even at
                        difficult times when other businesses are suffering due to pandemics, war, economic and
                        social unrest, we on the other hand have been able to support our investors and our
                        employees and even support their families as well. We are grateful to our clients in keeping
                        trust in us and investing in us and we promise to keep the trust and pay back the profits along
                        with the other bonuses promptly and diligently. Our success in balancing out the multiple
                        businesses and reaping profits, and then supporting the community back even when most of
                        the governments have failed makes us very proud. Being unaffected to the most part by the
                        economic and social factors, shows our strong business strategy and instils confidence in our
                        investors. As we are dearly expanding daily and our businesses are taking over all
                        throughout the world and expanding at an alarming rate, we would like to invite more and
                        more clients to invest with us and make use of this opportunity to grow with us and earn
                        financial freedom. We promise to remain committed to our investors and provide better
                        earning structure to the early investors through our binary matching plan. We are sure that
                        our expansion will prove to be very financially rewarding, and allow you to reap the rewards
                        along with us.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
