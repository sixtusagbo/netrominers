@extends('layouts.admin')

@section('content')
    <div class="alert alert-info d-flex justify-content-between fs-5 fw-bold">
        Total Wallets: <p>{{ $wallets->count() }}</p>
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
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Payments received</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($wallets as $wallet)
                                    <tr>
                                        <td class="item">{{ $wallet->name }} - {{ $wallet->network }}</td>
                                        <td class="item">{{ $wallet->address }}</td>
                                        <td class="item text-center">{{ $wallet->payments->count() }}</td>
                                        <td class="item">
                                            <a href="" data-bs-toggle="modal" class="btn btn-info mb-2 me-2"
                                                data-bs-target="#editWallet{{ $wallet->id }}">
                                                Edit
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
                                                            <input type="text" class="form-control text-capitalize"
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
                <!--//app-card-body-->

            </div>
        </div>
    </div>
    <!--//row-->
@endsection
