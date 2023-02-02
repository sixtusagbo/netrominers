<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PaymentWallet;
use App\Models\Plan;
use App\Models\User;
use App\Models\Withdrawal;
use App\Notifications\AccountChangeNotification;
use App\Notifications\DepositCreatedNotification;
use App\Notifications\WithdrawalCreatedNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $last_deposit = $user->payments->where('status', '>', 0)->last();
        $last_withdrawal = $user->withdrawals->where('status', '>', 0)->last();

        $data = [
            'last_deposit' => $last_deposit ? $last_deposit->amount : 0.00,
            'total_deposits' => $user->payments->where('status', '>', 0)->sum->amount,
            'last_withdrawal' => $last_withdrawal ? $last_withdrawal->amount : 0.00,
            'total_withdrawals' => $user->withdrawals->where('status', '>', 0)->sum->amount,
        ];

        return view('dash.home', $data);
    }

    /**
     * Show the application deposit page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function deposit()
    {
        $data = [
            'plans' => Plan::all(),
            'payment_wallets' => PaymentWallet::all(),
        ];

        return view('dash.deposit', $data);
    }

    /**
     * Store new deposit.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function confirm_deposit(Request $request)
    {
        // return $request;

        $values = $request->validate([
            'plan_id' => 'required',
            'amount' => 'required',
            'wallet_type' => 'required',
        ]);

        $plan = Plan::find($values['plan_id']);
        $amount = $values['amount'];

        if ($amount < $plan->min_deposit) {
            $amount = $plan->min_deposit;
        }

        $data = [
            'plan' => $plan,
            'amount' => $amount,
            'wallet' => PaymentWallet::find($values['wallet_type']),
        ];

        return view('dash.confirm_deposit', $data);
    }

    /**
     * Create payment
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create_deposit(Request $request)
    {
        $values = $request->validate([
            'plan_id' => 'required',
            'amount' => 'required',
            'wallet_id' => 'required',
        ]);

        $user = auth()->user();

        $payment = new Payment();
        $payment->user_id = $user->id;
        $payment->payment_wallet_id = $values['wallet_id'];
        $payment->plan_id = $values['plan_id'];
        $payment->amount = $values['amount'];
        $payment->save();

        Notification::send($user, new DepositCreatedNotification($payment));

        return redirect()->route('deposit')->with('success', 'The deposit has been saved. It will become active when the administrator checks statistics and confirms the payment.');
    }

    /**
     * Show PnL calaculator page.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pnl_calculator(Request $request)
    {
        $plan = Plan::find($request->query('plan'));

        // return $plan; //? Debug

        $start_day = Carbon::today()->toFormattedDateString();
        $mining_days = $plan->mining_period / 24;
        $end_day = Carbon::today()->addDays($mining_days)->toFormattedDateString();

        $data = [
            'plan' => $plan,
            'from' => $start_day,
            'to' => $end_day,
        ];

        return view('dash.pnl_calculator', $data);
    }

    /**
     * Show the application deposit_list page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function deposit_list()
    {
        $user = auth()->user();
        $plans = Plan::all();
        $currentUserPayments = $user->payments;

        $data = [
            'plans' => $plans,
            'currentUserPayments' => $currentUserPayments,
            'active_deposits' => $user->payments->where('status', '>', 0)->sum->amount,
        ];

        return view('dash.deposit_list', $data);
    }

    /**
     * Show the application withdrawal page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function withdraw()
    {
        return view('dash.withdraw');
    }

    /**
     * Store withdrawal
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store_withdrawal(Request $request)
    {
        // return $request;

        $values = $request->validate([
            'amount' => 'required',
        ]);

        $user = auth()->user();

        $withdrawal = new Withdrawal();
        $withdrawal->user_id = $user->id;
        $withdrawal->amount = $values['amount'];
        $withdrawal->save();

        Notification::send($user, new WithdrawalCreatedNotification($withdrawal));

        return redirect()->route('withdraw')->with('success', 'Withdrawal request submitted successfully.');
    }

    /**
     * Show the application referrals page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function referrals()
    {
        return view('dash.referrals');
    }

    /**
     * Show the application profile page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile()
    {
        return view('dash.profile');
    }

    /**
     * Show the application update_profile page.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update_profile(Request $request)
    {
        // return $request;

        $this->validate($request, [
            'password' => ['confirmed'],
        ]);

        $name = $request->name;
        $password = $request->password;
        $btc_address = $request->btc_address;
        $usdt_address = $request->usdt_address;

        $user = User::find(auth()->user()->id);
        if ($name != null) {
            $user->name = $name;
        }
        if ($password != null) {
            $user->password = Hash::make($password);
        }
        if ($btc_address != null) {
            $user->btc_address = $btc_address;
        }
        if ($usdt_address != null) {
            $user->usdt_address = $usdt_address;
        }
        $user->update();

        Notification::send($user, new AccountChangeNotification());

        return redirect()->route('profile')->with('success', 'Your account data has been updated successfully.');
    }
}
