@extends('layouts.dash')

@section('content')
    <h1 class="app-page-title">Overview</h1>

    <div class="row g-4 mb-4 justify-content-center">
        <div class="col-6 col-lg-4">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Registration Date</h4>
                    <div class="stats-figure">{{ Auth::user()->created_at->toFormattedDateString() }}</div>
                    <div class="stats-meta text-success">
                        <img src="{{ asset('images/auth/accountbox2.png') }}" alt="">
                    </div>
                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->

        <div class="col-6 col-lg-4">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Last Access</h4>
                    <div class="stats-figure">
                        {{ Auth::user()->last_access ? Auth::user()->last_access->toDayDateTimeString() : Carbon\Carbon::now()->toDayDateTimeString() }}
                    </div>
                    <div class="stats-meta text-success">
                        <img src="{{ asset('images/auth/accountbox3.png') }}" alt="">
                    </div>
                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-6 col-lg-4">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Your Ip</h4>
                    <div class="stats-figure">{{ request()->getClientIp() }}</div>
                    <div class="stats-meta text-success">
                        <img src="{{ asset('images/auth/accountbox4.png') }}" alt="">
                    </div>
                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
    </div>
    <!--//row-->

    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="app-card h-100 shadow-sm">
                <div class="app-card-header p-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h4 class="app-card-title">Referral Link</h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body p-3 p-lg-4">
                    <input type="text" class="form-control" readonly="readonly"
                        value="{{ Auth::user()->referral_link }}">
                </div>
                <!--//app-card-body-->

            </div>
        </div>
    </div>
    <!--//row-->

    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="app-card h-100 shadow-sm">
                <div class="app-card-header p-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h4 class="app-card-title">Deposit Statements</h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body p-3 p-lg-4">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td>Active Deposit</td>
                                    <td class="stat-cell">@money($total_deposits)</td>
                                </tr>
                                <tr>
                                    <td>Last Deposit</td>
                                    <td class="stat-cell">@money($last_deposit)</td>
                                </tr>
                                <tr>
                                    <td>Total Deposit</td>
                                    <td class="stat-cell">@money($total_deposits)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--//table-responsive-->
                </div>
                <!--//app-card-body-->

            </div>
        </div>
    </div>
    <!--//row-->

    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="app-card h-100 shadow-sm">
                <div class="app-card-header p-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h4 class="app-card-title">Withdrawal Statements</h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body p-3 p-lg-4">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td>Pending Withdrawal</td>
                                    <td class="stat-cell">@money(Auth::user()->pending_withdrawals)</td>
                                </tr>
                                <tr>
                                    <td>Last Withdrawal</td>
                                    <td class="stat-cell">@money($last_withdrawal)</td>
                                </tr>
                                <tr>
                                    <td>Withdrew Total</td>
                                    <td class="stat-cell">@money($total_withdrawals)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--//table-responsive-->
                </div>
                <!--//app-card-body-->

            </div>
        </div>
    </div>
    <!--//row-->
@endsection
