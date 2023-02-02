@extends('layouts.dash')

@section('content')
    <h4>Your Deposits</h4>

    <div class="alert alert-secondary d-flex justify-content-between fs-5 p-2 px-3">
        Total: <strong>@money($active_deposits)</strong>
    </div>

    @forelse ($plans as $plan)
        <div class="row g-4 mb-4">
            <div class="col-12 col-lg-12">
                <div class="card border-0 shadow">
                    <div class="card-header p-3 fw-bolder text-center">
                        {{ $plan->name }}
                    </div>
                    <!--//card-header-->
                    <div class="card-body p-2 bg-primary text-white">
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0 rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0 rounded-start">{{ $plan->name }}</th>
                                        <th class="border-0">
                                            @money($plan->min_deposit) - @if ($plan->max_deposit == null)
                                                Unlimited
                                            @else
                                                @money($plan->max_deposit)
                                            @endif
                                        </th>
                                        <th class="border-0 rounded-end">{{ $plan->return }}</th>
                                    </tr>
                                </thead>
                            </table>

                            @if ($currentUserPayments->where('plan_id', $plan->id)->where('status', '>', 0)->count() > 0)
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-0">DEPOSIT AMOUNT</th>
                                                <th class="border-0">PAYMENT CHANNEL</th>
                                                <th class="border-0">STATUS</th>
                                                <th class="border-0">DATE</th>
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
                                <div class="alert alert-info text-center p-2 mt-2" role="alert">
                                    No deposits for this plan
                                </div>
                            @endif
                        </div>
                        <!--//table-responsive-->
                    </div>
                    <!--//card-body-->

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
