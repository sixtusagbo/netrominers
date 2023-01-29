@extends('layouts.auth')

@section('content')
    <h2 class="auth-heading text-center mb-4">Password Reset</h2>

    <div class="auth-intro mb-4 text-center">Enter your email address below. We'll email you a link to a page where you can
        easily create a new password.</div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="auth-form-container text-left">

        <form class="auth-form resetpass-form" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="email mb-3">
                <label class="sr-only" for="reg-email">Your Email</label>
                <input id="email" type="email" class="form-control login-email @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Your Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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
