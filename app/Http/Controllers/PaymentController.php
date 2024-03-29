<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PaymentWallet;
use App\Models\User;
use App\Notifications\DepositApprovedNotification;
use App\Notifications\PlanCompletedNotification;
use Carbon\Carbon;
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
        $this->middleware(['auth', 'verified', 'role.admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::latest()->get();
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

        $payment = Payment::find($id);
        $user = User::find($payment->user->id);

        $payment->status = $request->input('status');
        $payment->update();

        if ($payment->status == 1) {
            // Approved and start running
            $payment->approved_at = Carbon::now();
            Notification::send($user, new DepositApprovedNotification($payment));
        }

        if ($payment->status == 2) {
            // Plan completed
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

        $payment = Payment::find($id);
        $payment->delete();

        return redirect()->route('credits.index')->with('success', 'Payment deleted successfuly');
    }
}
