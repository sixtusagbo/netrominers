@extends('layouts.dash')

@section('content')
    <h1 class="app-page-title">Referrals</h1>

    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="app-card h-100 shadow-sm">
                <div class="app-card-header p-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h4 class="app-card-title">
                                Total Referrals
                                ({{ Auth::user()->referrals->count() }})
                            </h4>
                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <h4 class="app-card-title">
                                Earned Commission
                                (@money(Auth::user()->referrals->count() * 10))
                            </h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body p-3 p-lg-4">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th class="meta">Name</th>
                                    <th class="meta stat-cell">Email Address</th>
                                    <th class="meta stat-cell">Referred on</th>
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
                                        <td colspan="4" class="bg-white">
                                            <div class="alert alert-info text-center" role="alert">No referrals
                                                yet</div>
                                        </td>
                                    </tr>
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
