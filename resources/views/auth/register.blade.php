@extends('layouts.auth')

@section('content')
    <h2 class="auth-heading text-center mb-4">Sign up to {{ config('app.name') }}</h2>

    <div class="auth-form-container text-start mx-auto">
        <form class="auth-form auth-signup-form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="email mb-3">
                <label class="sr-only" for="signup-email">Your Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror signup-name"
                    name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full name"
                    autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="email mb-3">
                <label class="sr-only" for="signup-email">Username</label>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                    name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username"
                    autofocus>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="email mb-3">
                <label class="sr-only" for="signup-email">Your Email</label>
                <input id="email" type="email" class="form-control signup-email @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="email mb-3">
                <label class="sr-only" for="signup-email">Retype Email</label>
                <input id="email_confirmation" type="email" class="form-control" name="email_confirmation"
                    placeholder="Retype Email" required autocomplete="email">
            </div>
            <div class="password mb-3">
                <label class="sr-only" for="signup-password">Password</label>
                <input id="password" type="password"
                    class="form-control signup-password @error('password') is-invalid @enderror" name="password"
                    placeholder="Password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="password mb-3">
                <label class="sr-only" for="signup-password">Retype Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                    placeholder="Retype Password" required autocomplete="new-password">
            </div>
            <div class="email mb-3">
                <label class="sr-only" for="signup-email">Secret Question</label>
                <input id="secret_question" type="text"
                    class="form-control @error('secret_question') is-invalid @enderror" name="secret_question"
                    value="{{ old('secret_question') }}" placeholder="Secret Question" required
                    autocomplete="secret_question" autofocus>

                @error('secret_question')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="email mb-3">
                <label class="sr-only" for="signup-email">Secret Answer</label>
                <input id="secret_answer" type="text" class="form-control @error('secret_answer') is-invalid @enderror"
                    name="secret_answer" value="{{ old('secret_answer') }}" placeholder="Secret Answer" required
                    autocomplete="secret_answer" autofocus>

                @error('secret_answer')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <hr>
            <div class="email mb-3">
                <label class="sr-only" for="signup-email">Bitcoin - BTC Wallet Address</label>
                <input id="btc_address" type="text" class="form-control @error('btc_address') is-invalid @enderror"
                    name="btc_address" value="{{ old('btc_address') }}" placeholder="Bitcoin - BTC Wallet Address"
                    autocomplete="btc_address" autofocus>

                @error('btc_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="email mb-3">
                <label class="sr-only" for="signup-email">Ethereum - ETH Wallet Address</label>
                <input id="usdt_address" type="text" class="form-control @error('usdt_address') is-invalid @enderror"
                    name="usdt_address" value="{{ old('usdt_address') }}" placeholder="Ethereum - ETH Wallet Address"
                    autocomplete="usdt_address" autofocus>

                @error('usdt_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="extra mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="RememberPassword" required>
                    <label class="form-check-label" for="RememberPassword">
                        I agree to {{ config('app.name') }}'s <a href="{{ route('terms') }}" class="app-link">Terms of
                            Service</a>.
                    </label>
                </div>
            </div>
            <!--//extra-->

            <div class="text-center">
                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
            </div>
        </form>
        <!--//auth-form-->

        <div class="auth-option text-center pt-3 pb-3">Already have an account? <a class="text-link"
                href="{{ route('login') }}">Log
                in</a>
        </div>
    </div>
    <!--//auth-form-container-->
@endsection
