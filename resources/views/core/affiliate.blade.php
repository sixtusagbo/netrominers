@extends('layouts.core')

@section('content')
    <section class="about mt-125">
        <div class="container">
            <div class="section-header">
                <p>Affiliate</p>
                <h2>Affiliate Program</h2>
            </div>
            <p>{{ config('myglobals.app_name') }} offers additional opportunities in the form of referral program and binary
                matching income. Anybody can become a member of our program by registering to our
                program. To earn referral income, all you have to do is to share information about our
                investment offer with your friends, family, acquaintances or colleagues, as well as send them
                a unique referral link; after someone registers through your link, that person becomes your
                referral.</p>
            <p><b>Referral income:</b> As and when a member refers another member for investing under his/her
                own sponsor ID, the sponsor receives {{ config('myglobals.ref_worth') }} as referral income on the member’s
                investment.
                Referral income is pooled instantly. You do not need to have an active deposit on your ID to
                be eligible to get referral income. The referral income will be credited directly to the e-wallet
                upon the completion of the registration and investment.</p>
            <p><b>Crypto Matching Income:</b> It is mandatory to have active deposits to be qualified for Crypto
                matching bonus. Crypto matching bonus is calculated every 24 hours. Please refer to the
                binary matching bonus chart for further details.</p>
            <p>In Crypto, the new clients are placed below the introducer (referrer) to the left or right
                side (left or right sub-tree). The tree of a binary network plan will have two legs-left and
                right; but if a member recruits more than two, then the additional member will be added to
                the next member down-line. This concept allows the additional member to be shared with
                down-line member (power leg) and the one who recruited them. This is referred to as
                spillover. With respect to profit leg, there won't be a spillover as the profit leg will be
                expanded with individually sponsored downlines. The binary plan is mostly quantity
                oriented and not based on the levels.</p>
        </div>
    </section>
@endsection
