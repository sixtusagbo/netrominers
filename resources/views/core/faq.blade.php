@extends('layouts.core')

@section('content')
    <section class="about mt-125">
        <div class="container">
            <div class="section-header">
                <p>FAQ</p>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse" data-target="#collapse-1"
                    aria-expanded="false" aria-controls="collapse-1">
                    How does {{ config('myglobals.app_name') }} make profit?
                </button>
                <div class="collapse" id="collapse-1">
                    <div class="card card-body bg-primary text-light">
                        <p>We devise solutions on behalf of cryptocurrency mining that balance the requirements of the
                            projected parties, i.e., customers, suppliers and capital providers(investors). We have
                            created and greatly benefit from our well- and long-established relationships with members
                            of the global crypto-mining community in order to realize projects. We provide a
                            multi-algorithm, multi-coin cloud mining service using the latest technology</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                    How can I earn from {{ config('myglobals.app_name') }}?
                </button>
                <div class="collapse" id="collapse-2">
                    <div class="card card-body bg-primary text-light">
                        <p>You need to invest and get regular returns from your investment. You can also earn by
                            referring new investors and also from our binary matching bonus system.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                    How do I register with {{ config('myglobals.app_name') }}?
                </button>
                <div class="collapse" id="collapse-3">
                    <div class="card card-body bg-primary text-light">
                        <p>It is always recommended to register using a referral link, so that you are benefitted by
                            your
                            sponsor on building your subtree. You can also directly register through our website and the
                            website will be redirected to the registration page with automatically generated random
                            sponsor.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                    How many accounts can I create?
                </button>
                <div class="collapse" id="collapse-4">
                    <div class="card card-body bg-primary text-light">
                        <p>You are allowed to create only one of account in this system. But You can own various
                            investments in one account.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                    How can I start investing?
                </button>
                <div class="collapse" id="collapse-5">
                    <div class="card card-body bg-primary text-light">
                        <p>In order to invest, you need to first register with us. Once you have registered, you can
                            start
                            investing with us. Once the funds get reflected in your account balance, you need to click
                            on
                            Investment and make an investment.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                    What is the minimum amount to be deposited?
                </button>
                <div class="collapse" id="collapse-6">
                    <div class="card card-body bg-primary text-light">
                        <p>The minimum amount to be deposited is $1000.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                    What payment processors can I use?
                </button>
                <div class="collapse" id="collapse-7">
                    <div class="card card-body bg-primary text-light">
                        <p>You can use payment processors such as Bitcoin and Ethereum. More payment method will be
                            updated soon. We will keep you posted.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                    Does return on investment (ROI), direct referral income and/or Crypto matching income accumulate to
                    my e-currency account?
                </button>
                <div class="collapse" id="collapse-8">
                    <div class="card card-body bg-primary text-light">
                        <p>No, all profits such as return on investment (ROI), direct referral income and/or Crypto
                            matching income are accumulated on your e-Wallet and you need to withdraw them from
                            there to your e-currency account.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                    How long does it take for my deposit to be added to my account?
                </button>
                <div class="collapse" id="collapse-9">
                    <div class="card card-body bg-primary text-light">
                        <p>It will take anywhere from 30 seconds for any deposit to be shown in your account.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                    Can I make additional deposits?
                </button>
                <div class="collapse" id="collapse-10">
                    <div class="card card-body bg-primary text-light">
                        <p>Yes, you can have unlimited number of deposits, but each of them will be treated separately.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
                    When will I be able to receive my first return on investment to my e-Wallet?
                </button>
                <div class="collapse" id="collapse-11">
                    <div class="card card-body bg-primary text-light">
                        <p>First return on investment is received after 24 hours.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12">
                    What is the duration time needed for the funds to be available on my e-currency account after
                    withdrawal request?
                </button>
                <div class="collapse" id="collapse-12">
                    <div class="card card-body bg-primary text-light">
                        <p>Duration needed for the funds to reflect in your wallet after withdrawal request is within 1
                            minute</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-13" aria-expanded="false" aria-controls="collapse-13">
                    What is the minimum amount allowed to withdraw?
                </button>
                <div class="collapse" id="collapse-13">
                    <div class="card card-body bg-primary text-light">
                        <p>The minimum amount allowed to withdraw is $20.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-14" aria-expanded="false" aria-controls="collapse-14">
                    Are there any withdrawal fees or charges for withdrawals from {{ config('myglobals.app_name') }} account
                    to wallet?
                </button>
                <div class="collapse" id="collapse-14">
                    <div class="card card-body bg-primary text-light">
                        <p>No, there are no withdrawals fee attached to withdraw your funds.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-16" aria-expanded="false" aria-controls="collapse-16">
                    How can I change my account information or password?
                </button>
                <div class="collapse" id="collapse-16">
                    <div class="card card-body bg-primary text-light">
                        <p>Log into your {{ config('myglobals.app_name') }} account and click on “Account Information.” You
                            can change
                            your account information there.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-17" aria-expanded="false" aria-controls="collapse-17">
                    What if I forget my password and cannot log into my account?
                </button>
                <div class="collapse" id="collapse-17">
                    <div class="card card-body bg-primary text-light">
                        <p>Please click on the “forgot password” link, type your username or email and you will receive
                            your account information.</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-18" aria-expanded="false" aria-controls="collapse-18">
                    Will the return on investment be calculated all throughout the week?
                </button>
                <div class="collapse" id="collapse-18">
                    <div class="card card-body bg-primary text-light">
                        <p>Yes, The return on your investment will be added daily on your interest after each mining
                            cycle (24 hours)</p>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse-19" aria-expanded="false" aria-controls="collapse-19">
                    Is referral compulsory? Must an investor refer to earn?
                </button>
                <div class="collapse" id="collapse-19">
                    <div class="card card-body bg-primary text-light">
                        <p>No, our referral program is not compulsory. Referring or recruiting is not compulsory. You
                            can earn only from your capital investments. But if you choose to earn more with our
                            referral program, you can get involved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
