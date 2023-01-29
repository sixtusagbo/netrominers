<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PaymentWallet;
use App\Models\User;
use App\Notifications\DepositApprovedNotification;
use App\Notifications\PlanCompletedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //check if user trying to access the route is admin
        if (auth()->user()->type != 1) {
            return redirect('/')->with('error', 'Unauthorized Page');
        }

        $payments = Payment::latest()->paginate(10);
        $wallets = PaymentWallet::all();

        $data = [
            'payments' => $payments,
            'wallets' => $wallets,
        ];

        return view('admin.credits')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return request();

        //check if user trying to access the route is admin
        if (auth()->user()->type != 1) {
            return redirect('/')->with('error', 'Unauthorized Page');
        }

        $payment = Payment::find($id);
        $user = User::find($payment->user->id);

        $payment->status = $request->input('status');

        if ($payment->status == 1) {
            Notification::send($user, new DepositApprovedNotification($payment));
        }

        if ($payment->status == 2) {
            Notification::send($user, new PlanCompletedNotification($payment));
        }

        return redirect()->route('credits.index')->with('success', 'Payment successfuly updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return request();

        //check if user trying to access the page is admin
        if (auth()->user()->type != 1) {
            return redirect('/')->with('error', 'Unauthorized Page');
        }

        $payment = Payment::find($id);
        $payment->delete();

        return redirect()->route('credits.index')->with('success', 'Payment deleted successfuly');
    }
}
