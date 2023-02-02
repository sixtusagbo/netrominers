@extends('layouts.dash')

@section('content')
    <h4>User Details</h4>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="card border-0 shadow">
                <div class="card-body p-3">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf

                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tr>
                                    <td>Account Name:</td>
                                    <td>{{ Auth::user()->username }}</td>
                                </tr>
                                <tr>
                                    <td>Registration date:</td>
                                    <td>{{ Auth::user()->created_at->toDayDateTimeString() }}</td>
                                </tr>
                                <tr>
                                    <td>Your Full Name:</td>
                                    <td>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ Auth::user()->name }}" autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>New Password:</td>
                                    <td>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Retype Password:</td>
                                    <td>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" autocomplete="new-password">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Your Bitcoin Wallet Address:</td>
                                    <td>
                                        <input id="btc_address" type="text"
                                            class="form-control @error('btc_address') is-invalid @enderror"
                                            name="btc_address" value="{{ old('btc_address') }}" autocomplete="btc_address"
                                            autofocus>

                                        @error('btc_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Your USDT (TRC-20) Wallet Address:</td>
                                    <td>
                                        <input id="usdt_address" type="text"
                                            class="form-control @error('usdt_address') is-invalid @enderror"
                                            name="usdt_address" value="{{ old('usdt_address') }}"
                                            autocomplete="usdt_address" autofocus>

                                        @error('usdt_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Your E-mail address:</td>
                                    <td>
                                        {{ Auth::user()->email }}
                                    </td>
                                </tr>


                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <input type="submit" value="Change Account data" class="btn btn-primary">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>

                </div>
                <!--//card-body-->

            </div>
        </div>
    </div>
    <!--//row-->
@endsection
