@extends('layouts.dash')

@section('content')
    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="card border-0 shadow bg-purple text-white">
                <div class="card-header p-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h5 class="card-title">Please confirm your deposit</h5>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//card-header-->
                <div class="card-body p-3 p-lg-4">
                    Please send your payment in {{ $wallet->name }} to this wallet:
                    <p>
                        <span id="addressToCopy" class="text-secondary fw-bolder">
                            {{ $wallet->address }}
                        </span>
                        <span class="btn btn-primary btn-sm" onclick="copyToClipboard('addressToCopy')">
                            <svg height="24" width="24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                data-name="Layer 1" viewBox="0 0 32 32">
                                <path
                                    d="M21.5,6V7.5H12A2.5,2.5,0,0,0,9.5,10V23.5H8A1.5,1.5,0,0,1,6.5,22V6A1.5,1.5,0,0,1,8,4.5H20A1.5,1.5,0,0,1,21.5,6Z" />
                                <path
                                    d="M24,8.5H12A1.5,1.5,0,0,0,10.5,10V26A1.5,1.5,0,0,0,12,27.5H24A1.5,1.5,0,0,0,25.5,26V10A1.5,1.5,0,0,0,24,8.5Zm-6,13H14a.5.5,0,0,1,0-1h4a.5.5,0,0,1,0,1Zm4-4H14a.5.5,0,0,1,0-1h8a.5.5,0,0,1,0,1Zm0-4H14a.5.5,0,0,1,0-1h8a.5.5,0,0,1,0,1Z" />
                            </svg>
                        </span>
                    </p>

                    <div class="table-responsive">
                        <table class="table text-white">
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
                <!--//card-body-->

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
