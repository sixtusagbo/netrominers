@extends('layouts.auth')

@section('content')
    <h2 class="auth-heading text-center mb-4">Verify Your Email Address</h2>

    <div class="auth-intro mb-4 text-center">
        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }}
    </div>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    <div class="auth-form-container text-left">

        <form class="auth-form resetpass-form" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit"
                class="btn app-btn-primary btn-block theme-btn mx-auto">{{ __('click here to request another') }}</button>
        </form>
    </div>
    <!--//auth-form-container-->
@endsection
