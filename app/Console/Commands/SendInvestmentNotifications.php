<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Transaction;
use App\Models\investment_plan;
use App\Models\Notification;

class SendInvestmentNotifications extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'investment:notify';

    /**
     * The console command description.
     */
    protected $description = 'Send investment withdrawal notifications based on investment plan interval';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = now();

        // Get all users who have investment transactions
        $transactions = Transaction::where('type', 'investment')->get();

        foreach ($transactions as $transaction) {
            $user = $transaction->user;

            // Match plan by name in description
            $plan = investment_plan::where('name', $transaction->description)->first();

            if (!$plan || !$plan->day) continue;

            $investedAt = $transaction->created_at;
            $daysSinceInvestment = $today->diffInDays($investedAt);

            // Notify only on days matching the plan interval
            if ($daysSinceInvestment > 0 && $daysSinceInvestment % $plan->day == 0) {
                $alreadyNotified = Notification::where('user_id', $user->id)
                    ->whereDate('created_at', $today)
                    ->where('title', 'Investment Withdrawal Available')
                    ->exists();

                if (!$alreadyNotified) {
                    Notification::create([
                        'user_id' => $user->id,
                        'title' => 'Investment Withdrawal Available',
                        'message' => "Your investment in plan {$plan->name} is eligible for withdrawal today.",
                    ]);
                }
            }
        }

        $this->info('Investment notifications sent.');
    }
}
