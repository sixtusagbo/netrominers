@extends('layouts.core')

@section('content')
    <section class="about mt-125">
        <div class="container">
            <div class="section-header">
                <p>T &amp; C</p>
                <h2>Our Terms and Conditions</h2>
            </div>
            <p>1. This Agreement is a binding contract between you and us, and it sets out your and our
                rights and obligations with respect to your membership of {{ config('myglobals.app_name') }} and use of the
                Platform. In executing this Agreement, you are indicating that you agree to adhere to, and be
                bound by, all of its terms.</p>
            <p>2. Upon registration to our website, you will become a Member of {{ config('myglobals.app_name') }}. By
                making an investment you will become a client of {{ config('myglobals.app_name') }}. You are supposed to
                provide required information while registering with us. The declarations set forward in the
                self-certification should be truthful and genuinely apply to you.</p>
            <p>3. We do not persuade you to invest with us, but only provide you with investment advice.
                Your investment will be from your own discretion.</p>
            <p>4. By becoming a member you will have the opportunity to invest with us and earn from our
                mentioned investment plan. There may be additional terms relating to the investments, and
                when notified and approved by you, you agree to consent by.</p>
            <p>5. You authorise us to use any of your personal information which is relevant to our
                provision of services to you for all reasonable purposes in relation to your use of the
                Platform. We may retain and continue to process your personal information after the
                termination of this Agreement or any other agreement between you and us. Your personal
                information may be transferred or disclosed to and/or by third parties where necessary. This
                enables us to provide services to you and to discharge our obligations to third parties,
                including relevant stock exchanges, government agencies and regulators.</p>
            <p>6. By accessing this website we assume you accept these terms and conditions. Do not
                continue to use bit-fin.co if you do not agree to take all of the terms and
                conditions stated on this page. These terms and conditions cannot be altered under any
                circumstances.</p>
        </div>
    </section>
@endsection
