@extends('layouts.auth')

@section('content')
    <h2 class="auth-heading text-center mb-5">Log in to {{ config('app.name') }}</h2>
    <div class="auth-form-container text-start">
        <form class="auth-form login-form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="email mb-3">
                <label class="sr-only" for="username">Username</label>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                    name="username" value="{{ old('username') }}" required autocomplete="username" autofocus
                    placeholder="Username">

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--//form-group-->
            <div class="password mb-3">
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
                            <input class="form-check-input" type="checkbox" value="" id="RememberPassword"
                                name="remember" {{ old('remember') ? 'checked' : '' }}>
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
                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log
                    In</button>
            </div>
        </form>

        <div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link"
                href="{{ route('register') }}">here</a>.
        </div>
    </div>
    <!--//auth-form-container-->
@endsection
