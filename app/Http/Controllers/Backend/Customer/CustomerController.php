<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use App\Models\investment_plan;
use App\Models\Referral;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function allCustomer()
    {
        $customers = User::where('role', 'user')->get();
        return view('backend.customer.all_customer', compact('customers'));
    }

   public function activeCustomer()
{
    $customers = User::where('role', 'user')
        ->where('is_active', 1)  // Fix this line
        ->get();

    return view('backend.customer.active_customer', compact('customers'));
}


    public function disabledCustomer()
    {
        $customers = User::where('role', 'user')->where('is_active', 0)->get();
        return view('backend.customer.disabled_customer', compact('customers'));
    }

public function editCustomer($id)
{
    $user = User::with('investmentPlan')->findOrFail($id);
    $investmentPlans = investment_plan::all();
    $investmentTransactions = Transaction::where('user_id', $user->id)
    ->where('type', 'investment')
    ->latest()
    ->get();
    $referrals = Referral::with(['referredUser', 'referrer'])
    ->where('referred_by', $user->id)
    ->get();

    $transactions = Transaction::where('user_id', $id)->latest()->get();
    return view('backend.customer.edit_customer', compact('user', 'investmentPlans','transactions','investmentTransactions','referrals'));
}

 // eager load



public function updateCustomer(Request $request, $id)
{
   

    $user = User::findOrFail($id);

    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->username = $request->username;
    $user->country = $request->country;
    $user->phone = $request->phone;
    $user->city = $request->city;
    $user->email = $request->email;
    $user->gender = $request->gender;
    $user->date_of_birth = $request->date_of_birth;
    $user->zip_code = $request->zip_code;
    $user->address = $request->address;
    
    $user->save();

    return redirect()->back()->with('success', 'Customer updated successfully.');
}



public function updateUserStatus(Request $request, $id)
{
    $user = User::findOrFail($id);

    $user->is_active = $request->status;
    $user->kyc_verified = $request->kyc;
    $user->deposit_status = $request->deposit_status;
    $user->withdraw_status = $request->withdraw_status;

    $user->save();

    return back()->with('success', 'User status updated successfully.');
}






public function updateBalance(Request $request, $id)
{
    

    $user = User::findOrFail($id);
    $amount = $request->amount;

    if ($request->wallet === 'main') {
        if ($request->type === 'add') {
            $user->wallet_balance += $amount;
        } else {
            $user->wallet_balance -= $amount;
            if ($user->wallet_balance < 0) $user->wallet_balance = 0;
        }
    } elseif ($request->wallet === 'profit') {
        if ($request->type === 'add') {
            $user->profit_balance += $amount;
        } else {
            $user->profit_balance -= $amount;
            if ($user->profit_balance < 0) $user->profit_balance = 0;
        }
    }

    $user->save();

    return back()->with('success', 'User balance updated successfully.');
}

}
