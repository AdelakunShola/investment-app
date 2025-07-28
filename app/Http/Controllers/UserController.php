<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\investment_plan;
use App\Models\Referral;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserRanking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Routing\Loader\YamlFileLoader;

class UserController extends Controller
{


    public function Index(){
        $about = About::first();
        $plans = investment_plan::all();
$featuredAds = Blog::where('featured', true)->latest()->take(8)->get();

      return view('frontend.index', compact('featuredAds','plans','about'));

    }//end method






    
     public function UserDashboard()
{
      $user = auth()->user()->load('ranking');


    $totalTransactions = Transaction::where('user_id', $user->id)->count();

    $totalDeposit = Transaction::where('user_id', $user->id)
                    ->where('type', 'deposit')
                    ->where('status', 'approved') 
                    ->sum('amount');

    $totalInvestment = Transaction::where('user_id', $user->id)
        ->where('type', 'investment')
        ->where('status', 'completed')
        ->sum('amount');

    $totalWithdraw = Transaction::where('user_id', $user->id)
    ->where('type', 'withdraw')  
    ->where('status', 'approved')
    ->sum('amount');


    $totalReferral = Referral::where('referred_by', $user->id)->count();

    $totalProfit = Transaction::where('user_id', $user->id)
                    ->where('type', 'profit')
                    ->sum('amount');

    $referralBonus = Referral::where('referred_by', $user->id)
        ->sum('bonus');


        $recentTransactions = Transaction::where('user_id', $user->id)
        ->latest()
        ->take(5)
        ->get();

    return view('user.index', compact('totalReferral','totalTransactions', 'totalDeposit','totalWithdraw','totalInvestment','totalProfit','referralBonus','recentTransactions'));
} 

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

    // ✅ Step 4: Store in `referrals` table
    if ($referredBy) {
        Referral::create([
            'user_id'     => $user->id,          // new user
            'referred_by' => $referredBy,        // referrer
            'bonus'       => 0.00,               // optionally assign signup bonus
            'status'      => 'pending',          // or 'completed' if auto-approved
        ]);
    }

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
    $plans = investment_plan::all();

    $user = Auth::user();

    $highestPlanId = Transaction::where('user_id', $user->id)
        ->where('type', 'investment')
        ->join('investment_plans', 'transactions.description', '=', 'investment_plans.name')
        ->max('investment_plans.id');

    return view('userbackend.plans.all_plans', compact('plans', 'highestPlanId'));
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

    // Dynamically calculate wallet balance
    $totalDeposit = Transaction::where('user_id', $user->id)->where('type', 'deposit')->where('status', 'approved')->sum('amount');
    $totalProfit = Transaction::where('user_id', $user->id)->where('type', 'profit')->sum('amount');
    $totalWithdraw = Transaction::where('user_id', $user->id)->where('type', 'withdraw')->where('status', 'approved')->sum('amount');
    $totalInvestment = Transaction::where('user_id', $user->id)->where('type', 'investment')->where('status', 'completed')->sum('amount');
    $referralBonus = Referral::where('referred_by', $user->id)->sum('bonus');

    $walletBalance = $totalDeposit + $totalProfit + $referralBonus - $totalWithdraw - $totalInvestment;

    // Check wallet balance
    if ($walletBalance < $amount) {
        return back()->with('error', 'Insufficient balance in Main Wallet.');
    }

    // Update user investment plan
    $user->investment_plan_id = $plan->id;
    $user->save();

    // Log the investment transaction
    Transaction::create([
        'user_id' => $user->id,
        'description' => $plan->name,
        'amount' => $amount,
        'type' => 'investment',
        'status' => 'completed',
        'method' => 'wallet',
    ]);

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
        
    $rankings = UserRanking::where('status', 1)->orderBy('ranking')->get(); // Optional: filter active only
    
        return view('userbackend.ranking.badge-ranking', compact('rankings'));
     }//end method 




     public function userReferral()
{
    $referrals = Referral::where('referred_by', auth()->id())
                    ->with('referredUser') // eager load the referred user
                    ->get();
                    $referralCount = Referral::where('referred_by', auth()->id())->count();
                    $referralProfit = Referral::where('referred_by', auth()->id())
                    ->where('status', 'completed') // optional if you want to show only earned bonuses
                    ->sum('bonus');



    return view('userbackend.referral.referral', compact('referrals','referralCount','referralProfit'));
}




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





























public function showDepositForm()
{
    return view('userbackend.transaction.deposit');
}


public function allDeposits()
{
    $deposits = Transaction::where('user_id', auth()->id())
                ->where('type', 'deposit')
                ->latest()
                ->get();

    return view('userbackend.transaction.all_deposit', compact('deposits'));
}



public function storeDeposit(Request $request)
{
    

    // Upload file only if it exists
    if ($request->hasFile('screenshot')) {
        $path = $request->file('screenshot')->store('screenshots', 'public');

        Transaction::create([
            'user_id'     => auth()->id(),
            'amount'      => $request->amount,
            'type'        => 'deposit',
            'description' => 'Deposit',
            'screenshot'  => $path,
            'method' => 'Cryptocurrency',
            'status'      => 'pending',
        ]);

        return redirect()->route('user.deposits.all')->with('success', 'Deposit request submitted successfully.');
    }

    return back()->with('error', 'Screenshot upload failed.');
}


public function showWithdrawForm()
{
    return view('userbackend.transaction.withdraw');
}


public function allWithdraw()
{
    $withdraw = Transaction::where('user_id', auth()->id())
                ->where('type', 'withdraw')
                ->latest()
                ->get();

    return view('userbackend.transaction.all_withdraw', compact('withdraw'));
}


     




public function storeWithdraw(Request $request)
{
    $user = auth()->user();

    // Calculate dynamic wallet balance
    $totalDeposit = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'deposit')
        ->where('status', 'approved')
        ->sum('amount');

    $totalProfit = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'profit')
        ->sum('amount');

    $totalWithdraw = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'withdraw')
        ->where('status', 'approved')
        ->sum('amount');

    $totalInvestment = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'investment')
        ->where('status', 'completed')
        ->sum('amount');

    $referralBonus = \App\Models\Referral::where('referred_by', $user->id)->sum('bonus');

    $walletBalance = $totalDeposit + $totalProfit + $referralBonus - $totalWithdraw - $totalInvestment;

    // Check wallet balance against requested amount
    if ($request->amount > $walletBalance) {
        return back()->withErrors(['amount' => 'Insufficient wallet balance.'])->withInput();
    }

    // Store withdrawal request
    Transaction::create([
        'user_id'     => $user->id,
        'amount'      => $request->amount,
        'type'        => 'withdraw',
        'method'      => 'Cryptocurrency',
        'description' => 'User Withdrawal',
        'status'      => 'pending',
    ]);

    return redirect()->route('user.withdraw.all')->with('success', 'Withdrawal request submitted.');
}






























public function Contactus() {
    $contact = About::first();
    return view('frontend.contact', compact('contact'));
}

public function Plan() {
    $plans = investment_plan::all(); // fetch all plans, not just the first
    return view('frontend.plan', compact('plans'));
}


public function Allad() {
    $ads = Blog::latest()->get();
    return view('frontend.listing.all_ad', compact('ads'));
}


public function showDetails($id)
{
    $ad = Blog::findOrFail($id);

    return view('frontend.listing.ad_details', compact('ad'));
}

public function Aboutus()
{
    $about = About::first();
    return view('frontend.about', compact('about'));
}






public function editAbout()
{
    $about = About::first();
    return view('backend.about.edit', compact('about'));
}

public function updateAbout(Request $request) {
    $about = About::first();

    // Prepare data array from request (excluding token and image for now)
    $data = $request->except('_token', 'image');

    // Handle image upload if a new image is provided
    if ($request->hasFile('image')) {
        // Optionally delete old image
        if ($about->image && file_exists(public_path($about->image))) {
            unlink(public_path($about->image));
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/about'), $imageName);
        $data['image'] = 'uploads/about/' . $imageName;
    }

    // Update the about record
    $about->update($data);

    return redirect()->route('about.edit')->with('success', 'About section updated.');
}



}
