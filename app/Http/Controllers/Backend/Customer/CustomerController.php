<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
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
    $user = User::findOrFail($id);
    return view('backend.customer.edit_customer', compact('user'));
}



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


}
