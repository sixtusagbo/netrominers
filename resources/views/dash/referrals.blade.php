@extends('layouts.dash')

@section('content')
    <h4>Your Referrals</h4>

    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="card border-0 shadow">
                <div class="card-header p-3 pb-0">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h6 class="card-title">
                                Total ({{ Auth::user()->referrals->count() }})
                            </h6>
                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <h6 class="card-title">
                                Earned Commission (@money(Auth::user()->referrals->count() * 10))
                            </h6>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//card-header-->
                <div class="card-body p-2">
                    <div class="table-responsive">
                        <table class="table table-striped rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">Name</th>
                                    <th class="border-0">Email Address</th>
                                    <th class="border-0 rounded-end">Referred on</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse (Auth::user()->referrals as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->toDayDateTimeString() }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">
                                            <div class="alert alert-info text-center p-2" role="alert">
                                                No referrals yet
                                            </div>
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
