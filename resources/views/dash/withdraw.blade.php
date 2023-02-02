 @extends('layouts.dash')

 @section('content')
     <h4>Withdrawal</h4>

     @if (session('success'))
         <div class="alert alert-success" role="alert">
             {{ session('success') }}
         </div>
     @endif

     <div class="alert alert-secondary d-flex justify-content-between fs-5 p-2 px-3">
         <div>Account Balance (@money(Auth::user()->account_balance))</div>
         <div>Pending Withdrawals (@money(Auth::user()->pending_withdrawals))</div>
     </div>

     <div class="row g-4 mb-4">
         <div class="col-12 col-lg-12">
             <div class="card border-0 shadow">
                 <div class="card-body p-3">
                     <div class="table-responsive">
                         <table class="table table-striped rounded">
                             <thead>
                                 <tr>
                                     <th class="border-0">Processing</th>
                                     <th class="border-0">Available</th>
                                     <th class="border-0">Pending</th>
                                     <th class="border-0">Account</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td><img src="{{ asset('images/btc.png') }}" width="30" height="30"
                                             align="absmiddle" class="me-1">
                                         Bitcoin
                                     </td>
                                     <td><b style="color:green">$0.00</b></td>
                                     <td><b style="color:red">$0.00</b></td>
                                     <td><a href="{{ url('/edit_account') }}" class="btn btn-info">Edit</a></td>
                                 </tr>
                                 <tr>
                                     <td><img src="{{ asset('images/usdt.png') }}" width="40" height="35"
                                             align="absmiddle">
                                         USDT (TRC-20)
                                     </td>
                                     <td><b style="color:green">$0.00</b></td>
                                     <td><b style="color:red">$0.00</b></td>
                                     <td><a href="{{ url('/edit_account') }}" class="btn btn-info">Edit</a></td>
                                 </tr>
                             </tbody>
                         </table>

                         @if (Auth::user()->earnings == 0)
                             <div class="text-info mt-3">You have no funds to withdraw</div>
                         @else
                             <center>
                                 <a class="btn btn-primary mt-3" data-bs-toggle="modal" role="button"
                                     href="#createWithdrawalModal">
                                     Withdraw
                                 </a>
                             </center>
                         @endif
                     </div>
                 </div>
                 <!--//card-body-->

             </div>
         </div>
     </div>
     <!--//row-->

     @if (Auth::user()->earnings > 0)
         <div class="row g-4 mb-4">
             <div class="col-12 col-lg-12">
                 <div class="card border-0 shadow">
                     <div class="card-header p-3">
                         <div class="row justify-content-between align-items-center">
                             <div class="col-auto">
                                 <h4 class="card-title">Withdrawals</h4>
                             </div>
                             <!--//col-->
                         </div>
                         <!--//row-->
                     </div>
                     <!--//card-header-->
                     <div class="card-body p-3 p-lg-4">
                         <div class="table-responsive">
                             <table class="table table-striped mb-0">
                                 <thead>
                                     <tr>
                                         <th class="border-0">AMOUNT</th>
                                         <th class="border-0">STATUS</th>
                                         <th class="border-0">DATE</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @forelse (Auth::user()->withdrawals as $withdrawal)
                                         <tr>
                                             <td>
                                                 @money($withdrawal->amount)
                                             </td>
                                             <td>
                                                 @switch($withdrawal->status)
                                                     @case(0)
                                                         <span class="badge text-bg-warning">Pending</span>
                                                     @break

                                                     @case(1)
                                                         <span class="badge text-bg-success">Approved</span>
                                                     @break

                                                     @default
                                                 @endswitch
                                             </td>
                                             <td>{{ $withdrawal->created_at->toDayDateTimeString() }}
                                             </td>
                                         </tr>
                                         @empty
                                             <tr>
                                                 <td colspan="3">
                                                     <div class="alert alert-info text-center" role="alert">No withdrawals
                                                         yet</div>
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
         @endif

         <!------------------ Create withdrawal request modal --------------------------------->
         <div class="modal fade" id="createWithdrawalModal" tabindex="-1" role="dialog"
             aria-labelledby="createWithdrawalModalLabel">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h4 class="modal-title" id="createWithdrawalModalLabel">Make withdrawal request</h4>
                     </div>
                     <div class="modal-body">
                         {!! Form::open(['route' => 'withdrawals.store']) !!}
                         <label for="amount" class="form-label">Enter
                             amount</label>
                         <input type="number" name="amount" {{ 'max=' . Auth::user()->earnings }} class="form-control"
                             required>
                         <br>

                         <div class="d-flex justify-content-center">
                             <button type="button" class="btn btn-warning me-3" data-bs-dismiss="modal">Cancel</button>
                             <button type="submit" class="btn btn-success">Save</button>
                         </div>
                         {!! Form::close() !!}
                     </div>
                 </div>
             </div>
         </div>
     @endsection
