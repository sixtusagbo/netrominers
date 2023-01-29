@extends('layouts.dash')

@section('content')
    <h1 class="app-page-title">Make A Deposit</h1>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" name="spendform" action="{{ route('confirm_deposit') }}">
        @csrf


        <script language="javascript">
            function openCalculator(id) {
                w = 300;
                h = 400;
                t = (screen.height - h - 30) / 2;
                l = (screen.width - w - 30) / 2;
                window.open('/pnl_calculator?a=calendar&plan=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" +
                    w +
                    ",height=" + h + ",resizable=1,scrollbars=0");
            }
        </script>

        <div class="row g-4 mb-4">
            @forelse ($plans as $plan)
                <div class="col-12 col-lg-12">
                    <div class="app-card h-100 shadow-sm">
                        <div class="app-card-header p-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <input type="radio" class="app-card-title" name="plan_id" value="{{ $plan->id }}"
                                        @if ($plan->id == 1) checked @endif>
                                    <b>{{ $plan->return }}% After {{ $plan->mining_period / 24 }} Day(s)</b>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                        </div>
                        <!--//app-card-header-->
                        <div class="app-card-body p-3 p-lg-4">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <thead>
                                        <tr>
                                            <th class="meta">Plan</th>
                                            <th class="meta stat-cell">Amount</th>
                                            <th class="meta stat-cell">Profit(%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $plan->name }}</td>
                                            <td>
                                                @if ($plan->min_deposit == 1)
                                                    1 BTC
                                                @else
                                                    @money($plan->min_deposit)
                                                @endif
                                                -
                                                @if ($plan->max_deposit == null)
                                                    Unlimited
                                                @else
                                                    @money($plan->max_deposit)
                                                @endif
                                            </td>
                                            <td>{{ $plan->return }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" align="right">
                                                <a href="javascript:openCalculator('{{ $plan->id }}')"
                                                    class="btn btn-outline-primary">Calculate your
                                                    profit &gt;&gt;</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--//table-responsive-->
                        </div>
                        <!--//app-card-body-->

                    </div>
                </div>
            @empty
                <div class="alert alert-warning" role="alert">
                    Admin please run your migrations!
                </div>
            @endforelse

        </div>
        <!--//row-->

        <div class="row g-4 mb-4">
            <div class="col-12 col-lg-12">
                <div class="app-card h-100 shadow-sm">
                    <div class="app-card-header p-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h4 class="app-card-title">Payment Processor</h4>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//app-card-header-->
                    <div class="app-card-body p-3 p-lg-4">
                        <div class="text-center mb-3">
                            <h3 class="text-info">Your account balance</h3>
                            <h2>@money(Auth::user()->account_balance)</h2>
                            <p class="text-info">AMOUNT TO SPEND:</p>
                            <input type="text" name="amount" value="100.00"
                                class="form-control text-center fw-bold text-primary">
                        </div>

                        @forelse ($payment_wallets as $wallet)
                            <div class="form-group">
                                <input type="radio" name="wallet_type" value="{{ $wallet->id }}"
                                    @if ($wallet->id == 1) checked @endif>
                                {{ $wallet->name }}
                            </div>
                        @empty
                            <div class="alert alert-warning" role="alert">
                                Admin please run your migrations!
                            </div>
                        @endforelse
                    </div>
                    <!--//app-card-body-->

                </div>
            </div>
        </div>
        <!--//row-->

        <div class="text-center">
            <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Spend</button>
        </div>
    </form>
@endsection
