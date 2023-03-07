@extends('layouts.auth')

@section('content')
    <h2 class="text-center mb-4">Verify Your Email Address</h2>

    <div class="mb-4 text-center">
        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }}
    </div>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    <div class="text-left">

        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-primary w-100 mx-auto">{{ __('click here to request another') }}</button>
        </form>
    </div>
@endsection
