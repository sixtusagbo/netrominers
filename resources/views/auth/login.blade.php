@extends('layouts.auth')

@section('content')
    <div class="text-center text-md-center mb-4 mt-md-0">
        <h1 class="mb-0 h3">Sign in to our platform</h1>
    </div>

    <form class="mt-4" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label class="sr-only" for="username">Username</label>
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">

            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!--//form-group-->
        <div class="mb-3">
            <label class="sr-only" for="password">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password" placeholder="Password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="extra mt-3 row justify-content-between">
                <div class="col-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="RememberPassword" name="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="RememberPassword">
                            Remember me
                        </label>
                    </div>
                </div>
                <!--//col-6-->
                <div class="col-6">
                    <div class="forgot-password text-end">
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                </div>
                <!--//col-6-->
            </div>
            <!--//extra-->
        </div>
        <!--//form-group-->
        <div class="text-center">
            <button type="submit" class="btn btn-primary w-100 mx-auto">Log In</button>
        </div>
    </form>

    <div class="d-flex justify-content-center align-items-center mt-4">
        <span class="fw-normal">
            Not registered?
            <a href="{{ route('register') }}" class="fw-bold">Create account</a>
        </span>
    </div>
@endsection
