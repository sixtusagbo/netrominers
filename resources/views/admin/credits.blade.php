@extends('layouts.admin')

@section('content')
    <div class="alert alert-info bg-light-info text-light-info" role="alert">
        Remember to update payment status as completed when the duration has elapsed.
    </div>

    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="card border-0 shadow">
                <div class="card-header pb-0">
                    <h5 class="card-title">Deposits ({{ $payments->count() }})</h5>
                </div>

                <div class="card-body">
                    <div class="table-responsive rounded">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Payment Channel</th>
                                    <th>Plan</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($payments as $payment)
                                    <tr>
                                        <td class="item">{{ $payment->user->username }}</td>
                                        <td class="item">{{ $payment->wallet->name }}
                                        </td>
                                        <td class="item">{{ $payment->plan->name }}</td>
                                        <td class="item">
                                            @if ($payment->amount < 100)
                                                {{ $payment->amount . ' BTC' }}
                                            @else
                                                @money($payment->amount)
                                            @endif
                                        </td>
                                        <td>
                                            @switch($payment->status)
                                                @case(0)
                                                    <span class="badge rounded-pill bg-warning">Pending</span>
                                                @break

                                                @case(1)
                                                    <span class="badge rounded-pill bg-success">Approved</span>
                                                @break

                                                @case(2)
                                                    <span class="badge rounded-pill bg-primary">Completed</span>
                                                @break

                                                @default
                                            @endswitch
                                        </td>
                                        <td class="item">
                                            <a href="" data-bs-toggle="modal" class="btn btn-info mb-2 me-2"
                                                data-bs-target="#editPayment{{ $payment->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                </svg>
                                            </a>
                                            <a href="" data-bs-toggle="modal" class="btn btn-danger mb-2"
                                                data-bs-target="#deletePayment{{ $payment->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Payment Model -->
                                    <div class="modal fade" id="editPayment{{ $payment->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-primary">Edit Payment</h4>
                                                    <a class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <i class="ti-close opacity-10 text-info"></i>
                                                    </a>
                                                </div>
                                                <div class="modal-body" id="editPaymentModalBody">
                                                    <form class="pt-3" role="form" method="POST"
                                                        action="{{ route('credits.update', $payment->id) }}"
                                                        id="editPayment">
                                                        @csrf

                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                value="{{ $payment->user->username }}" readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                value="{{ $payment->wallet->name }}" readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                value="{{ $payment->plan->name }}" readonly>
                                                        </div>

                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                value="@if ($payment->amount < 100) {{ $payment->amount . ' BTC' }}
                                                                @else {{ '$' . $payment->amount }} @endif"
                                                                readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <select name="status" id="" class="form-control">

                                                                <option value="0"
                                                                    @if ($payment->status == 0) selected @endif>
                                                                    Pending
                                                                </option>
                                                                <option value="1"
                                                                    @if ($payment->status == 1) selected @endif>
                                                                    Approved</option>
                                                                <option value="2"
                                                                    @if ($payment->status == 2) selected @endif>
                                                                    Completed</option>
                                                            </select>
                                                        </div>
                                                        <input type="hidden" name="_method" value="PUT">
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit"
                                                                class="btn btn-primary btn-md font-weight-medium auth-form-btn">
                                                                Update Payment
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//Edit Payment-->

                                    <!--Delete Payment-->
                                    <div class="modal fade" id="deletePayment{{ $payment->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-primary">Delete Payment</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="deletePaymentModalBody">
                                                    <p>
                                                        Are you sure you wish to delete this payment?
                                                    </p>
                                                    <form method="POST"
                                                        action="{{ route('credits.destroy', $payment->id) }}"
                                                        id="deletePayment">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">No</button>
                                                            <button type="submit"
                                                                class="btn btn-danger btn-md font-weight-medium auth-form-btn">
                                                                Yes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//Delete Payment-->
                                    @empty
                                        <tr>
                                            <td colspan="6">
                                                <span class="badge bg-indigo">
                                                    No deposits yet!
                                                </span>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!--//card-body-->

                </div>
            </div>
        </div>
        <!--//row-->
    @endsection
