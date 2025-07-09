<?php

namespace App\Http\Controllers;

use App\Models\investment_plan;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
     public function UserDashboard(){

        return view('user.index');
     }//end method 

     public function UserLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/user/login');
    }//end method


    public function UserLogin(){

      return view('user.user_login');

    }//end method


public function UserRegister(Request $request)
{
    $refCode = $request->query('ref');
    return view('user.user_register', compact('refCode'));
}





    
public function storeUser(Request $request)
{
    // Step 1: Check referral code from either URL hidden input or manual entry
    $referralCode = $request->referral_code ?: $request->referred_by;
    $referredBy = null;

    if (!empty($referralCode)) {
        $referrer = User::where('referral_code', $referralCode)->first();
        if ($referrer) {
            $referredBy = $referrer->id;
        }
    }

    // Step 2: Generate a unique referral code for this new user
    do {
        $newReferralCode = strtoupper(Str::random(6));
    } while (User::where('referral_code', $newReferralCode)->exists());

    // Step 3: Create the user
    $user = User::create([
        'first_name'     => $request->first_name,
        'last_name'      => $request->last_name,
        'email'          => $request->email,
        'username'       => $request->username,
        'country'        => $request->country,
        'phone'          => $request->phone,
        'password'       => Hash::make($request->password),
        'referral_code'  => $newReferralCode,
        'referred_by'    => $referredBy,
    ]);

    return redirect()->route('user.login')->with('success', 'Account created successfully!');
}




    public function UserAuthenticate(Request $request)
{
    $request->validate([
        'login' => 'required',
        'password' => 'required',
    ]);

    $credentials = [
        filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username' => $request->login,
        'password' => $request->password,
    ];

    if (Auth::attempt($credentials, $request->filled('remember'))) {
        $request->session()->regenerate();
        return redirect()->intended('/user/dashboard'); // or whatever route you use
    }

    return back()->withErrors([
        'login' => 'Invalid credentials.',
    ])->onlyInput('login');
}

    public function UserProfile(){

      $id = Auth::user()->id;
      $profileData = User::find($id);

      return view('user.user_profile_view',compact('profileData'));

    }//end method


    public function UserProfileStore(Request $request){

      $id = Auth::user()->id;
      $data = User::find($id);

      $data->name = $request->name;
      $data->email = $request->email;

      if($request->file('photo')){

         $file = $request->file('photo');
         $filename = date('YmdHi').$file->getClientOriginalName();
         $file->move(public_path('upload/user_images'), $filename);
         $data['photo'] = $filename;
         

      }

      $data->save();

      $notification = array(
         'message' => 'User Profile Updated Successfully',
         'alert-type' => 'success',
      );

      return redirect()->back()->with($notification);

    }//end method



    public function UserChangePassword(){

      $id = Auth::user()->id;
      $profileData = User::find($id);

      return view('user.user_change_password',compact('profileData'));

    }//end method


    public function UserPasswordUpdate(Request $request){

      //validation
      $request -> validate([
         'old_password' => 'required',
         'new_password' => 'required|confirmed'

      ]);


      if(!Hash::check($request->old_password, auth::user()->password)){

         $notification = array(
            'message' => 'Old Password Does Not Match',
            'alert-type' => 'error',
         );
   
         return back()->with($notification);

      }


      //update the new password
      User::whereId(auth::user()->id)->update([
         'password' => Hash::make($request->new_password)
      ]);

      $notification = array(
         'message' => 'Password Updated Successfully',
         'alert-type' => 'success',
      );

      return back()->with($notification);

    }//end method































  public function UserPlans()
{
    $plans = investment_plan::all(); // Retrieve all plans from DB
    return view('userbackend.plans.all_plans', compact('plans'));
} 


    public function invest($id)
{
    $plan = investment_plan::findOrFail($id);
    return view('userbackend.plans.invest', compact('plan'));
}



public function investNow(Request $request, $id)
{
    $user = Auth::user();
    $plan = investment_plan::findOrFail($id);
    $amount = floatval($request->invest_amount);

    // Validate amount within min and max
    if ($amount < $plan->min_amount || $amount > $plan->max_amount) {
        return back()->with('error', 'Amount must be between $' . $plan->min_amount . ' and $' . $plan->max_amount);
    }

    // Check user wallet balance
    if ($user->wallet_balance < $amount) {
        return back()->with('error', 'Insufficient balance in Main Wallet.');
    }

    // Deduct balance
    $user->wallet_balance -= $amount;
    $user->investment_plan_id = $plan->id;
    $user->save();

    // Record transaction
    Transaction::create([
        'user_id' => $user->id,
        'description' => $plan->name,
        'amount' => $amount,
        'type' => 'investment',
        'status' => 'completed',
        'method' => 'wallet'
    ]);

    // Optional: You can store the investment in a dedicated `investments` table

    return redirect()->route('user.transaction')->with('success', 'Investment successful!');
}










////////////TRANSACTION

     public function Transaction(Request $request)
{
    $user = auth()->user();

    $query = Transaction::where('user_id', $user->id);

    // Optional search
    if ($request->filled('query')) {
        $search = $request->input('query');
        $query->where(function ($q) use ($search) {
            $q->where('description', 'like', "%$search%")
              ->orWhere('type', 'like', "%$search%")
              ->orWhere('method', 'like', "%$search%");
        });
    }

    // Optional date filter
    if ($request->filled('date')) {
        $query->whereDate('created_at', $request->input('date'));
    }

    $transactions = $query->latest()->get();

    return view('userbackend.transaction.all_transaction', compact('transactions'));
}



     public function userRanking(){
        return view('userbackend.ranking.badge-ranking');
     }//end method 



     public function userReferral(){
        return view('userbackend.referral.referral');
     }//end method



public function userSetting()
{
    $user = Auth::user();
    return view('userbackend.settings.profile_setting', compact('user'));
}


public function userKyc()
{
    $user = Auth::user();
    return view('userbackend.settings.kyc', compact('user'));
}




public function submitKyc(Request $request)
{
    $request->validate([
        'document_type' => 'required|string',
        'document_number' => 'required|string',
        'id_document_path' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    $user = Auth::user();

    // Handle file upload
    if ($request->hasFile('id_document_path')) {
        $file = $request->file('id_document_path');
        $filePath = $file->store('kyc_documents', 'public');
    } else {
        return back()->with('error', 'Document upload failed.');
    }

    // Update user with KYC data
    $user->update([
        'document_type'     => $request->document_type,
        'document_number'   => $request->document_number,
        'id_document_path'  => $filePath,
    ]);

    return redirect()->route('user.kyc')->with('success', 'KYC submitted successfully!');
}





public function updateUserProfile(Request $request)
{
    $user = Auth::user();


    $user->update([
        'first_name' => $request->first_name,
        'last_name'  => $request->last_name,
        'username'   => $request->username,
        'phone'      => $request->phone,
        'gender'     => $request->gender,
        'date_of_birth' => $request->date_of_birth,
        'city'       => $request->city,
        'zip_code'   => $request->zip_code,
        'address'    => $request->address,
    ]);

    return back()->with('success', 'Profile updated successfully!');
}






     public function userChangePw(){

      $id = Auth::user()->id;
      $profileData = User::find($id);

      return view('userbackend.settings.change_password',compact('profileData'));

    }//end method


     public function updatePassword(Request $request)
{
    //validation
      $request -> validate([
         'old_password' => 'required',
         'new_password' => 'required|confirmed'

      ]);


      if(!Hash::check($request->old_password, auth::user()->password)){

         $notification = array(
            'message' => 'Old Password Does Not Match',
            'alert-type' => 'error',
         );
   
         return back()->with($notification);

      }


      //update the new password
      User::whereId(auth::user()->id)->update([
         'password' => Hash::make($request->new_password)
      ]);

      $notification = array(
         'message' => 'Password Updated Successfully',
         'alert-type' => 'success',
      );

      return back()->with($notification);

}



     
}
