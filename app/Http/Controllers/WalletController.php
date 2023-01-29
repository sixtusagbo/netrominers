<?php

namespace App\Http\Controllers;

use App\Models\PaymentWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class WalletController extends Controller
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

        $wallets = PaymentWallet::all();

        $data = [
            'wallets' => $wallets,
        ];

        return view('admin.wallets')->with($data);
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

        $wallet = PaymentWallet::find($id);

        $wallet->address = $request->input('address');

        return redirect()->route('wallets.index')->with('success', 'Wallet address successfuly updated');
    }
}
