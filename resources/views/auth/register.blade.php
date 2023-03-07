@extends('layouts.auth')

@section('content')
    <div class="text-center text-md-center mb-4 mt-md-0">
        <h1 class="mb-0 h3">Create Account </h1>
    </div>
    <form class="mt-4" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label class="sr-only" for="signup-email">
                Your Name<span class="text-danger">*</span>
            </label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror signup-name"
                name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="sr-only" for="signup-email">Username<span class="text-danger">*</span></label>
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username"
                autofocus>

            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="sr-only" for="signup-email">Your Email<span class="text-danger">*</span></label>
            <input id="email" type="email" class="form-control signup-email @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="sr-only" for="signup-email">Retype Email<span class="text-danger">*</span></label>
            <input id="email_confirmation" type="email" class="form-control" name="email_confirmation"
                placeholder="Retype Email" required autocomplete="email">
        </div>
        <div class="password mb-3">
            <label class="sr-only" for="signup-password">Password<span class="text-danger">*</span></label>
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
            <label class="sr-only" for="signup-password">Retype Password<span class="text-danger">*</span></label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                placeholder="Retype Password" required autocomplete="new-password">
        </div>
        <hr>
        <div class="mb-3">
            <label class="sr-only" for="signup-email">Bitcoin Wallet Address</label>
            <input id="btc_address" type="text" class="form-control @error('btc_address') is-invalid @enderror"
                name="btc_address" value="{{ old('btc_address') }}" placeholder="Bitcoin - BTC Wallet Address"
                autocomplete="btc_address" autofocus>

            @error('btc_address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="sr-only" for="signup-email">USDT (TRC-20) Wallet Address</label>
            <input id="usdt_address" type="text" class="form-control @error('usdt_address') is-invalid @enderror"
                name="usdt_address" value="{{ old('usdt_address') }}" placeholder="USDT (TRC-20) Wallet Address"
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
                    I agree to the <span class="fw-bold">terms and conditions</span>
                </label>
            </div>
        </div>
        <!--//extra-->

        <div class="text-center">
            <button type="submit" class="btn btn-primary w-100 theme-btn mx-auto">Sign Up</button>
        </div>
    </form>
    <div class="d-flex justify-content-center align-items-center mt-4">
        <span class="fw-normal">
            Already have an account?
            <a href="{{ route('login') }}" class="fw-bold">Login here</a>
        </span>
    </div>
@endsection
