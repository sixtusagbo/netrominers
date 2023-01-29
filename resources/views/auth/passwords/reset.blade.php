@extends('layouts.auth')

@section('content')
    <h2 class="auth-heading text-center mb-4">Password Reset</h2>

    <div class="auth-form-container text-left">

        <form class="auth-form resetpass-form" method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="email mb-3">
                <label class="sr-only" for="email">Your Email</label>
                <input id="email" type="email" class="form-control login-email @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Your Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="password mb-3">
                <label class="sr-only" for="password">Your Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="New Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="password mb-3">
                <label class="sr-only" for="password-confirm">Retype Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Retype password">
            </div>

            <!--//form-group-->
            <div class="text-center">
                <button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto">Reset Password</button>
            </div>
        </form>

        <div class="auth-option text-center pt-5"><a class="app-link" href="{{ route('login') }}">Log in</a> <span
                class="px-2">|</span> <a class="app-link" href="{{ route('register') }}">Sign up</a></div>
    </div>
    <!--//auth-form-container-->
@endsection
