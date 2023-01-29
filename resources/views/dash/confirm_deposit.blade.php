@extends('layouts.dash')

@section('content')
    <h1 class="app-page-title">Confirm Deposit</h1>

    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="app-card h-100 shadow-sm">
                <div class="app-card-header p-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h4 class="app-card-title text-info">Please confirm your deposit</h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body p-3 p-lg-4">
                    Please send your payment in {{ $wallet->name }} to this wallet:
                    <p>
                        <span id="addressToCopy" style="color:red;">
                            {{ $wallet->address }}
                        </span>
                        <span class="text-primary" onclick="copyToClipboard('addressToCopy')">Click
                            to copy</span>
                    </p>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <tbody>
                                <tr>
                                    <th>Profit:</th>
                                    <td>{{ $plan->return . '%' }} after {{ $plan->mining_period / 24 }} day(s)</td>
                                </tr>
                                <tr>
                                    <th>Principal Return:</th>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <th>Principal Withdraw:</th>
                                    <td>
                                        Not available </td>
                                </tr>

                                <tr>
                                    <th>Credit Amount:</th>
                                    <td>
                                        @if ($plan->max_deposit == null)
                                            {{ $amount }} BTC
                                        @else
                                            {{ '$' . $amount }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Deposit Fee:</th>
                                    <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                                </tr>
                                <tr>
                                    <th>Debit Amount:</th>
                                    <td>
                                        @if ($plan->max_deposit == null)
                                            {{ $amount }} BTC
                                        @else
                                            {{ '$' . $amount }}
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--//table-responsive-->

                    <div class="d-flex justify-content-center p-3">
                        {!! Form::open(['route' => 'create_deposit']) !!}
                        {!! Form::hidden('plan_id', $plan->id) !!}
                        {!! Form::hidden('amount', $amount) !!}
                        {!! Form::hidden('wallet_id', $wallet->id) !!}

                        <input type="submit" value="Save" class="btn btn-primary text-white"> &nbsp;
                        <input type="button" class="btn btn-danger" value="Cancel" onclick="document.location='/deposit'">
                        {!! Form::close() !!}
                    </div>

                </div>
                <!--//app-card-body-->

            </div>
        </div>
    </div>
    <!--//row-->
@endsection

@section('script')
    <script>
        function copyToClipboard(elementId) {
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(document.getElementById(elementId));
                range.select().createTextRange();
                document.execCommand("copy");
            } else if (window.getSelection) {
                var range = document.createRange();
                range.selectNode(document.getElementById(elementId));
                window.getSelection().removeAllRanges(); // clear current selection
                window.getSelection().addRange(range); // to select text
                document.execCommand("copy");
                window.getSelection().removeAllRanges(); // to deselect
            }
            alert("Address has been copied")
        }
    </script>
@endsection
