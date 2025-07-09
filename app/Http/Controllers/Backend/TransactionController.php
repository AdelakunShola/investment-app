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
        ->where('type', 'profit')
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
}
