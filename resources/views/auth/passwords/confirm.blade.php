@extends('layouts.auth')

@section('content')
    <div class="text-center mb-4">
        <h1 class="h3">{{ Auth::user()->name }}</h1>
        <p class="text-gray">Please confirm your password before continuing</p>
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Form -->
        <div class="form-group mb-4">
            <label for="password">Your Password</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon2">
                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>

                <input type="password" name="password" placeholder="Password"
                    class="form-control @error('password') is-invalid @enderror" id="password"
                    autocomplete="current-password" required>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- End of Form -->

        <div class="d-grid mt-3">
            <button type="submit" class="btn btn-gray-800">Confirm Password</button>
            @if (Route::has('password.request'))
                <a class="fw-bold text-center mt-4" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
@endsection
