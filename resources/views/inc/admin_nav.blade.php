<div class="accountnav">
    <div class="welcome"><span class="icon"><img src="{{ asset('images/auth/accountbox1.png') }}" alt=""></span>
        <p>Welcome, Admin</p>
        <h4>{{ Auth::user()->username }}</h4>
    </div>
    <div class="action"><a href="{{ url('/credits') }}">Deposits</a></div>
    <div class="action"><a href="{{ url('/debits') }}">Withdrawals</a></div>
    <ul>
        <li class="eight"><a href="{{ url('/controls') }}">Admin Panel</a></li>
        <li class="seven"><a href="{{ url('/wallets') }}">Payment Addresses</a></li>
    </ul>
</div>
