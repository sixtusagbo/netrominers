<?php

namespace App\Console\Commands;

use App\Models\Payment;
use App\Models\User;
use App\Notifications\PlanCompletedNotification;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class CheckForCompletedPayments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payments:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for completed payments';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $approvedPayments = Payment::where('status', 1); // running payments

        // If there is any running payments
        if ($approvedPayments->count() > 0) {
            // Loop through all of them
            foreach ($approvedPayments as $payment) {
                // Check if it's duration has reached
                if ($payment->approved_at->diffInHours() >= $payment->plan->mining_period) {
                    // Then set the status as completed
                    $payment->status = 2;
                    $payment->update;

                    // Notify the user
                    $user = User::find($payment->user->id);
                    Notification::send($user, new PlanCompletedNotification($payment));
                }
            }
        }

        return Command::SUCCESS;
    }
}
