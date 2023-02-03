<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Withdrawal;
use App\Notifications\WithdrawalApprovedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class WithdrawalController extends Controller
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
        $withdrawals = Withdrawal::latest()->paginate(10);

        $data = [
            'withdrawals' => $withdrawals,
        ];

        return view('admin.debits')->with($data);
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

        $withdrawal = Withdrawal::find($id);
        $user = User::find($withdrawal->user->id);

        $withdrawal->status = $request->input('status');
        $withdrawal->update();

        if ($withdrawal->status == 1) {
            Notification::send($user, new WithdrawalApprovedNotification($withdrawal));
        }

        return redirect()->route('debits.index')->with('success', 'Withdrawal successfuly updated');
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

        $withdrawal = Withdrawal::find($id);
        $withdrawal->delete();

        return redirect()->route('debits.index')->with('success', 'Withdrawal deleted successfuly');
    }
}
