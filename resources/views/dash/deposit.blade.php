@extends('layouts.dash')

@section('content')
    <h4>Make A Deposit</h4>

    <div class="d-grid mb-2">
        <button class="btn-secondary rounded border-0 fw-bold py-1" disabled>Select Plan:</button>
    </div>

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
                    <div class="card border-0 shadow">
                        <div class="card-header p-3 pb-0">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <input type="radio" class="card-title" name="plan_id" value="{{ $plan->id }}"
                                        @if ($plan->id == 1) checked @endif>
                                    <b>{{ $plan->return }}% After {{ $plan->mining_period / 24 }} Day(s)</b>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                        </div>
                        <!--//card-header-->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0 table-dark">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="border-0">Plan</th>
                                            <th class="border-0">Amount</th>
                                            <th class="border-0">Profit(%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $plan->name }}</td>
                                            <td>
                                                @money($plan->min_deposit)
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
                                            <td colspan="3" align="left">
                                                <a href="javascript:openCalculator('{{ $plan->id }}')"
                                                    class="btn btn-outline-secondary">Calculate your
                                                    profit &gt;&gt;</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--//table-responsive-->
                        </div>
                        <!--//card-body-->

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
                <div class="card border-0 shadow">
                    <div class="card-header p-3 pb-0">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h6 class="card-title">Payment Processor</h6>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//card-header-->
                    <div class="card-body p-3 bg-primary text-white">
                        @forelse ($payment_wallets as $wallet)
                            <div class="form-group">
                                <input type="radio" name="wallet_type" value="{{ $wallet->id }}"
                                    @if ($wallet->id == 1) checked @endif>
                                {{ $wallet->name }} @if ($wallet->id != 1)
                                    ({{ $wallet->network }})
                                @endif
                            </div>
                        @empty
                            <div class="alert alert-warning" role="alert">
                                Admin please run your migrations!
                            </div>
                        @endforelse
                    </div>
                    <!--//card-body-->

                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="card border-0 shadow bg-purple text-white">
                    <div class="card-body d-flex justify-content-between">
                        <div class="text-left w-100">AMOUNT TO SPEND:</div>
                        <input type="text" name="amount" value="100.00"
                            class="form-control text-center fw-bold text-primary">
                    </div>
                    <div class="card-footer p-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary w-25 mx-auto">Spend</button>
                    </div>
                </div>
            </div>
        </div>
        <!--//row-->

        <div class="text-center">
        </div>
    </form>
@endsection
