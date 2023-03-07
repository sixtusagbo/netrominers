@extends('layouts.auth')

@section('content')
    <h1 class="h3 text-center">Forgot your password?</h1>
    <p class="mb-4 text-center">Just type in your email below and we will send you a link to reset your password!</p>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="text-left">

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="email mb-4">
                <label class="sr-only" for="reg-email">Your Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Your Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-gray-800">Recover password</button>
            </div>
        </form>

        <div class="text-center pt-5">
            <a class="link-indigo fw-bold" href="{{ route('login') }}">Log in</a>
            <span class="px-2">|</span>
            <a class="link-indigo fw-bold" href="{{ route('register') }}">Sign up</a>
        </div>
    </div>
@endsection
