<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function allTransaction(Request $request)
{
    $query = $request->query('query'); // ✅ use specific string values
    $type = $request->query('filter_by_transaction_type');
    $status = $request->query('status');
    $daterange = $request->query('daterange');

    $transactions = Transaction::with('user')->latest();

    if ($query) {
        $transactions->whereHas('user', function ($q) use ($query) {
            $q->where('username', 'like', "%$query%");
        });
    }

    if ($type) {
        $transactions->where('type', $type);
    }

    if ($status) {
        $transactions->where('status', $status);
    }

    if ($daterange) {
        [$start, $end] = explode(' - ', $daterange);
        $transactions->whereBetween('created_at', [
            Carbon::parse($start)->startOfDay(),
            Carbon::parse($end)->endOfDay()
        ]);
    }

    $transactions = $transactions->get();

    return view('backend.transaction.transaction', compact('transactions'));
}



public function investments(Request $request)
{
    $query = $request->query('query');
    $status = $request->query('status');
    $daterange = $request->query('daterange');

    $transactions = Transaction::with('user')
        ->where('type', 'investment') // fixed type
        ->latest();

    if ($query) {
        $transactions->whereHas('user', function ($q) use ($query) {
            $q->where('username', 'like', "%$query%");
        });
    }

    if ($status) {
        $transactions->where('status', $status);
    }

    if ($daterange) {
        [$start, $end] = explode(' - ', $daterange);
        $transactions->whereBetween('created_at', [
            Carbon::parse($start)->startOfDay(),
            Carbon::parse($end)->endOfDay(),
        ]);
    }

    $transactions = $transactions->get();

    return view('backend.transaction.investment', compact('transactions'));
}



    public function userProfits(Request $request)
{
    $query = $request->query('query');
    $typeFilter = $request->query('filter_by_transaction_type');

    $transactions = Transaction::with('user')
        ->whereIn('type', ['profit', 'referral_bonus'])
        ->latest();

    if ($query) {
        $transactions->whereHas('user', function ($q) use ($query) {
            $q->where('username', 'like', "%$query%");
        });
    }

    if ($typeFilter) {
        $transactions->where('description', 'like', "%$typeFilter%");
    }

    $transactions = $transactions->paginate(20);

    return view('backend.transaction.user_profit', compact('transactions'));
}





public function adminDeposits()
{
    $deposits = Transaction::where('type', 'deposit')
                ->latest()
                ->get();

    return view('backend.deposit.deposit_history', compact('deposits'));
}


public function adminDepositsPending()
{
    $deposits = Transaction::where('type', 'deposit')
                ->where('status', '!=', 'approved')
                ->latest()
                ->get();

    return view('backend.deposit.deposit_pending', compact('deposits'));
}


public function depositAction(Request $request)
{
    $deposit = Transaction::findOrFail($request->id);

    if ($request->has('approve')) {
        if ($deposit->status !== 'approved') {
            $deposit->status = 'approved';
            $deposit->save();

            // Update user's wallet balance
            $user = $deposit->user;
            $user->wallet_balance += $deposit->amount;
            $user->save();

            // ✅ Check if it's the user's first approved deposit
            $firstApproved = Transaction::where('user_id', $user->id)
                ->where('type', 'deposit')
                ->where('status', 'approved')
                ->orderBy('created_at', 'asc')
                ->first();

            if ($firstApproved && $firstApproved->id == $deposit->id) {
                // ✅ Check if user was referred by someone
                $referral = \App\Models\Referral::where('user_id', $user->id)->first();

                if ($referral && $referral->status == 'pending') {
                    $referrer = \App\Models\User::find($referral->referred_by);

                    if ($referrer) {
                        $bonusAmount = 0.05 * $deposit->amount;

                        // ✅ Update referrer's wallet
                        $referrer->wallet_balance += $bonusAmount;
                        $referrer->save();

                        // ✅ Update referral record
                        $referral->bonus = $bonusAmount;
                        $referral->status = 'completed';
                        $referral->save();

                        // ✅ Log referral bonus as a transaction
                        \App\Models\Transaction::create([
                            'user_id' => $referrer->id,
                            'description' => 'Referral bonus from user ID ' . $user->id,
                            'amount' => $bonusAmount,
                            'type' => 'Referral_bonus',
                            'status' => 'approved',
                        ]);
                    }
                }
            }
        }

    } elseif ($request->has('reject')) {
        $deposit->status = 'rejected';
        $deposit->save();
    }

    return back()->with('success', 'Deposit status updated.');
}























public function adminWithdrawal()
{
    $withdraw = Transaction::where('type', 'withdraw')
                ->latest()
                ->get();

    return view('backend.withdrawal.withdrawal_history', compact('withdraw'));
}


public function adminWithdrawalPending()
{
    $withdraw = Transaction::where('type', 'withdraw')
                ->where('status', '!=', 'approved')
                ->latest()
                ->get();

    return view('backend.withdrawal.withdrawal_pending', compact('withdraw'));
}


public function WithdrawalAction(Request $request)
{
    $withdraw = Transaction::findOrFail($request->id);

    if ($request->has('approve')) {
        if ($withdraw->status !== 'approved') {
            $withdraw->status = 'approved';
            $withdraw->save();

            // Update user's wallet balance
            $user = $withdraw->user;
            $user->wallet_balance -= $withdraw->amount;
            $user->save();
        }

    } elseif ($request->has('reject')) {
        $withdraw->status = 'rejected';
        $withdraw->save();
    }

    return back()->with('success', 'Withdrawal status updated.');
}




}
