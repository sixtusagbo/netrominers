@extends('layouts.admin')

@section('content')
    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="card border-0 shadow">
                <div class="card-header pb-0">
                    <h5 class="card-title">Payment Addresses ({{ $wallets->count() }})</h5>
                </div>
                <!--//card-header-->
                <div class="card-body">

                    <div class="table-responsive rounded">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Payments received</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($wallets as $wallet)
                                    <tr>
                                        <td class="item">{{ $wallet->name }} ({{ $wallet->network }})</td>
                                        <td class="item">{{ $wallet->address }}</td>
                                        <td class="item text-center">{{ $wallet->payments->count() }}</td>
                                        <td class="item">
                                            <a href="" data-bs-toggle="modal" class="btn btn-info mb-2 me-2"
                                                data-bs-target="#editWallet{{ $wallet->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Wallet Model -->
                                    <div class="modal fade" id="editWallet{{ $wallet->id }}" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-primary">Edit {{ $wallet->name }} Wallet
                                                    </h4>
                                                    <a class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <i class="ti-close opacity-10 text-info"></i>
                                                    </a>
                                                </div>
                                                <div class="modal-body" id="editWalletModalBody">
                                                    <form class="pt-3" role="form" method="POST"
                                                        action="{{ route('wallets.update', $wallet->id) }}" id="editWallet">
                                                        @csrf

                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                value="{{ $wallet->name }}" readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" name="address">
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
                                                                Update Wallet
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//Edit Wallet-->
                                @empty
                                    <div class="alert alert-warning" role="alert">
                                        Admin please run your migrations!
                                    </div>
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
