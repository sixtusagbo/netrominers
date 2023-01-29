@extends('layouts.admin')

@section('content')
    <div class="alert alert-info d-flex justify-content-between fs-5 fw-bold">
        Total Withdrawals: <p>{{ $withdrawals->count() }}</p>
    </div>

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
                <div class="app-card-body">

                    <div class="table-responsive w-100">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Amount</th>
                                    <th>BTC Address</th>
                                    <th>ETH Address</th>
                                    <th>Status</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($withdrawals as $withdrawal)
                                    <tr>
                                        <td class="item">{{ $withdrawal->user->username }}</td>
                                        <td class="item">
                                            @money($withdrawal->amount)
                                        </td>
                                        <td class="item">
                                            {{ $withdrawal->user->btc_address ? $withdrawal->user->btc_address : 'Not set' }}
                                        </td>
                                        <td class="item">
                                            {{ $withdrawal->user->eth_address ? $withdrawal->user->eth_address : 'Not set' }}
                                        </td>
                                        <td>
                                            @switch($withdrawal->status)
                                                @case(0)
                                                    <span class="badge rounded-pill bg-warning">Pending</span>
                                                @break

                                                @case(1)
                                                    <span class="badge rounded-pill bg-success">Confirmed</span>
                                                @break

                                                @default
                                            @endswitch
                                        </td>
                                        <td class="item">
                                            <a href="" data-bs-toggle="modal" class="btn btn-info mb-2 me-2"
                                                data-bs-target="#editWithdrawal{{ $withdrawal->id }}">
                                                Edit
                                            </a>
                                            <a href="" data-bs-toggle="modal" class="btn btn-danger mb-2"
                                                data-bs-target="#deleteWithdrawal{{ $withdrawal->id }}">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Withdrawal Model -->
                                    <div class="modal fade" id="editWithdrawal{{ $withdrawal->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-primary">Edit Withdrawal</h4>
                                                    <a class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <i class="ti-close opacity-10 text-info"></i>
                                                    </a>
                                                </div>
                                                <div class="modal-body" id="editWithdrawalModalBody">
                                                    <form class="pt-3" role="form" method="POST"
                                                        action="{{ route('debits.update', $withdrawal->id) }}"
                                                        id="editWithdrawal">
                                                        @csrf

                                                        <div class="mb-3">
                                                            <input type="text" class="form-control text-capitalize"
                                                                value="{{ $withdrawal->user->username }}" readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                value="@money($withdrawal->amount)" readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control text-capitalize"
                                                                value="{{ $withdrawal->user->btc_address ? $withdrawal->user->btc_address : 'Not set' }}"
                                                                readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control text-capitalize"
                                                                value="{{ $withdrawal->user->eth_address ? $withdrawal->user->eth_address : 'Not set' }}"
                                                                readonly>
                                                        </div>


                                                        <div class="mb-3">
                                                            <select name="status" id="" class="form-control">

                                                                <option value="0"
                                                                    @if ($withdrawal->status == 0) selected @endif>
                                                                    Pending
                                                                </option>
                                                                <option value="1"
                                                                    @if ($withdrawal->status == 1) selected @endif>
                                                                    Confirmed</option>
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
                                                                Update Withdrawal
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//Edit Withdrawal-->

                                    <!--Delete Withdrawal-->
                                    <div class="modal fade" id="deleteWithdrawal{{ $withdrawal->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-primary">Delete Withdrawal</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="deleteWithdrawalModalBody">
                                                    <p>
                                                        Are you sure you wish to delete this withdrawal?
                                                    </p>
                                                    <form method="POST"
                                                        action="{{ route('debits.destroy', $withdrawal->id) }}"
                                                        id="deleteWithdrawal">
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
                                    <!--//Delete Withdrawal-->
                                    @empty
                                        <div class="alert alert-warning" role="alert">
                                            Admin please run your migrations!
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!--//app-card-body-->

                </div>
            </div>
        </div>
        <!--//row-->
    @endsection
