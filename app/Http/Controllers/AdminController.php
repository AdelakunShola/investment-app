<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminDashboard(){

        return view('admin.index');
     }//end method 

     public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }//end method


    public function AdminLogin(){

      return view('admin.admin_login');

    }//end method


    public function AdminAuthenticate(Request $request)
{
    $request->validate([
        'login' => 'required',
        'password' => 'required',
    ]);

    $credentials = [
        filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username' => $request->login,
        'password' => $request->password,
    ];

    // You may need to set up an 'admin' guard for this. For now, using 'web' if shared table.
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/admin/dashboard'); // or your intended admin landing
    }

    return back()->withErrors([
        'login' => 'Invalid admin credentials.',
    ])->onlyInput('login');
}



    public function AdminProfile(){

      $id = Auth::user()->id;
      $profileData = User::find($id);

      return view('admin.admin_profile_view',compact('profileData'));

    }//end method


    public function AdminProfileStore(Request $request){

      $id = Auth::user()->id;
      $data = User::find($id);

      $data->name = $request->name;
      $data->email = $request->email;

      if($request->file('photo')){

         $file = $request->file('photo');
         $filename = date('YmdHi').$file->getClientOriginalName();
         $file->move(public_path('upload/admin_images'), $filename);
         $data['photo'] = $filename;
         

      }

      $data->save();

      $notification = array(
         'message' => 'Admin Profile Updated Successfully',
         'alert-type' => 'success',
      );

      return redirect()->back()->with($notification);

    }//end method



    public function AdminChangePassword(){

      $id = Auth::user()->id;
      $profileData = User::find($id);

      return view('admin.admin_change_password',compact('profileData'));

    }//end method


    public function AdminPasswordUpdate(Request $request){

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










    public function updateUserPassword(Request $request, $id)
{
    $request->validate([
        'new_password' => 'required|min:6|confirmed',
    ]);

    $user = User::findOrFail($id);
    $user->password = Hash::make($request->new_password);
    $user->save();

    return redirect()->back()->with('success', 'Password updated successfully.');
}
}
