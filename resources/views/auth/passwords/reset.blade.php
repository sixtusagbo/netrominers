@extends('layouts.auth')

@section('content')
    <h1 class="h3 mb-4 text-center">Reset password</h1>

    <div class="text-left">

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-3">
                <label class="sr-only" for="email">Your Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Your Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
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

            <div class="d-grid">
                <button type="submit" class="btn btn-gray-800">Reset password</button>
            </div>
        </form>

        <div class="text-center pt-5">
            <a class="link-indigo fw-bold" href="{{ route('login') }}">Log in</a>
            <span class="px-2">|</span>
            <a class="link-indigo fw-bold" href="{{ route('register') }}">Sign up</a>
        </div>
    </div>
@endsection
