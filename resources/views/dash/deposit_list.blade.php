@extends('layouts.dash')

@section('content')
    <h1 class="app-page-title">Your Deposits</h1>

    <div class="alert alert-info d-flex justify-content-between fs-5">
        Total: <strong>@money($active_deposits)</strong>
    </div>

    @forelse ($plans as $plan)
        <div class="row g-4 mb-4">
            <div class="col-12 col-lg-12">
                <div class="app-card h-100 shadow-sm">
                    <div class="app-card-header p-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                {{ $plan->return }}% After
                                {{ $plan->mining_period / 24 }} Day(s)
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
                                    <tr>
                                        <td>{{ $plan->name }}</td>
                                        <td>
                                            @money($plan->min_deposit) - @if ($plan->max_deposit == null)
                                                Unlimited
                                            @else
                                                @money($plan->max_deposit)
                                            @endif
                                        </td>
                                        <td>{{ $plan->return }}</td>
                                    </tr>
                                    </tr>
                                </tbody>
                            </table>

                            @if ($currentUserPayments->where('plan_id', $plan->id)->where('status', '>', 0)->count() > 0)
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th class="meta">DEPOSIT AMOUNT</th>
                                                <th class="meta stat-cell">PAYMENT CHANNEL</th>
                                                <th class="meta stat-cell">STATUS</th>
                                                <th class="meta stat-cell">DATE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($currentUserPayments->where('plan_id', $plan->id)->where('status', '>', 0) as $payment)
                                                <tr>
                                                    <td>
                                                        @money($payment->amount)
                                                    </td>
                                                    <td>{{ $payment->wallet->name }}
                                                    </td>
                                                    <td>
                                                        @switch($payment->status)
                                                            @case(0)
                                                                <span class="badge text-bg-warning">Pending</span>
                                                            @break

                                                            @case(1)
                                                                <span class="badge text-bg-success">Running</span>
                                                            @break

                                                            @case(2)
                                                                <span class="badge text-bg-secondary">Completed</span>
                                                            @break

                                                            @default
                                                        @endswitch
                                                    </td>
                                                    <td>{{ $payment->created_at->toDayDateTimeString() }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="alert alert-info text-center" role="alert">No deposits for this plan
                                </div>
                            @endif
                        </div>
                        <!--//table-responsive-->
                    </div>
                    <!--//app-card-body-->

                </div>
            </div>
        </div>
        <!--//row-->
        @empty
            <div class="alert alert-warning" role="alert">
                Admin please run your migrations!
            </div>
        @endforelse
    @endsection
