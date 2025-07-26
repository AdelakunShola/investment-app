<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AdShare;
use App\Models\Blog;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class BlogController extends Controller
{
    public function Blogindex()
{
    $luxuryAds = Blog::with('user')->latest()->get();
    return view('backend.blog.index', compact('luxuryAds'));
}

    public function Blogcreate()
    {
        return view('backend.blog.create');
    }

public function Blogstore(Request $request)
{
    $data = $request->all();

     $data['user_id'] = auth()->id();

    // Handle image upload if present
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $uploadPath = public_path('upload/blog_images/');

        // ✅ Ensure the directory exists
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        // ✅ Resize and save the image
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file)->resize(400, 300);
        $img->toJpeg(80)->save($uploadPath . $filename);

        $data['image'] = 'upload/blog_images/' . $filename;
    }

    // Encode specifications if provided
    $data['specifications'] = isset($data['specifications']) && is_array($data['specifications'])
        ? json_encode($data['specifications'])
        : json_encode([]);

    // Ensure 'featured' is explicitly set
    $data['featured'] = $request->has('featured');

    // Create the ad
    Blog::create($data);

    return redirect()->back()->with('success', 'Ad created successfully.');
}

public function Blogedit($id)
{
    $ad = Blog::findOrFail($id);
    return view('backend.blog.edit', compact('ad'));
}

public function Blogupdate(Request $request, $id)
{
    $ad = Blog::findOrFail($id);

    $data = $request->except(['_token', '_method']);
     $data['user_id'] = auth()->id();

    // Handle image upload with resizing
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $uploadPath = public_path('upload/blog_images/');

        // Ensure the directory exists
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true); // create with permissions
        }

        // Resize and save
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file)->resize(425, 300);
        $img->toJpeg(80)->save($uploadPath . $filename);

        $data['image'] = 'upload/blog_images/' . $filename;
    }

    // Encode specifications
    $data['specifications'] = json_encode($request->input('specifications', []));

    // Ensure 'featured' is explicitly set (true if checked, false if not)
    $data['featured'] = $request->has('featured');

    $ad->update($data);

    return redirect()->route('admin.luxury_ads.index')->with('success', 'Ad updated successfully.');
}



public function Blogdestroy($id)
{
    $ad = Blog::findOrFail($id);

    // Delete the image from storage if it exists
    if ($ad->image && Storage::disk('public')->exists($ad->image)) {
        Storage::disk('public')->delete($ad->image);
    }

    $ad->delete();

    return redirect()->back()->with('success', 'Ad deleted successfully.');
}




public function shareAdReward(Request $request)
{
    $user = auth()->user();

    // Check if user already shared today
    $today = now()->toDateString();
    $sharedToday = AdShare::where('user_id', $user->id)
        ->where('shared_on', $today)
        ->exists();

    if ($sharedToday) {
        return response()->json([
            'status' => false,
            'message' => 'You have already earned from sharing an ad today, Try again tomorrow.'
        ]);
    }

    $dailyReward = 0.50; // Default reward

    // Check if user has any approved investment
    $investmentTransaction = Transaction::where('user_id', $user->id)
        ->where('type', 'investment')
        ->where('status', 'completed')
        ->latest()
        ->first();

    if ($investmentTransaction) {
        $investmentAmount = $investmentTransaction->amount;

        // Get weekly interest percent from user's plan
        $weeklyPercent = optional($user->investmentPlan)->weekly_interest ?? 0;

        if ($weeklyPercent > 0 && $investmentAmount > 0) {
            $weeklyReward = ($weeklyPercent / 100) * $investmentAmount;
            $dailyReward = round($weeklyReward / 7, 2);
        } else {
            Log::warning("ShareAdReward: Invalid investment plan for user {$user->id}. Falling back to default ₦0.50.");
        }
    } else {
        Log::info("ShareAdReward: No approved investment for user {$user->id}. Using default ₦0.50.");
    }

    // Credit reward to user's profit balance
    $user->increment('profit_balance', $dailyReward);

    // Log share to prevent multiple earnings per day
    AdShare::create([
        'user_id' => $user->id,
        'blog_id' => null, // not tracking which ad was shared
        'shared_on' => $today,
    ]);

    // Optionally, also log it in transaction table
    Transaction::create([
        'user_id' => $user->id,
        'type' => 'profit',
        'amount' => $dailyReward,
        'status' => 'approved',
        'description' => 'Daily ad share reward',
        'charge' => 0,
        'final_amount' => $dailyReward,
        'method' => 'system',
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Thank you for sharing the ad!',
        'amount' => $dailyReward
    ]);
}




































//////////////USER ADS SECTION


public function UserBlogindex()
{
    $luxuryAds = Blog::with('user')
                    ->where('user_id', Auth::id())
                    ->latest()
                    ->get();

    return view('userbackend.blog.index', compact('luxuryAds'));
}

public function UserBlogcreate()
    {
        return view('userbackend.blog.create');
}

public function UserBlogstore(Request $request)
{
    $data = $request->all();

    // ✅ Assign the logged-in user's ID
    $data['user_id'] = auth()->id();

    // ✅ Handle image upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = date('YmdHis') . '_' . $file->getClientOriginalName();
        $uploadPath = public_path('upload/blog_images/');

        // Create directory if it doesn't exist
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        // Resize and save image
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file)->resize(400, 300);
        $img->toJpeg(80)->save($uploadPath . $filename);

        $data['image'] = 'upload/blog_images/' . $filename;
    }

    // ✅ Encode specifications to JSON
    $data['specifications'] = isset($data['specifications']) && is_array($data['specifications'])
        ? json_encode($data['specifications'])
        : json_encode([]);

    // ✅ Mark as featured if checkbox is checked
    $data['featured'] = $request->has('featured');

    // ✅ Create the blog post
    Blog::create($data);

    return redirect()->back()->with('success', 'Ad created successfully.');
}


public function UserBlogedit($id)
{
    $ad = Blog::findOrFail($id);
    return view('userbackend.blog.edit', compact('ad'));
}

public function UserBlogupdate(Request $request, $id)
{
    $ad = Blog::findOrFail($id);

    $data = $request->except(['_token', '_method']);
    $data['user_id'] = auth()->id();

    // Handle image upload with resizing
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $uploadPath = public_path('upload/blog_images/');

        // Ensure the directory exists
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true); // create with permissions
        }

        // Resize and save
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file)->resize(425, 300);
        $img->toJpeg(80)->save($uploadPath . $filename);

        $data['image'] = 'upload/blog_images/' . $filename;
    }

    // Encode specifications
    $data['specifications'] = json_encode($request->input('specifications', []));

    // Ensure 'featured' is explicitly set (true if checked, false if not)
    $data['featured'] = $request->has('featured');

    $ad->update($data);

    return redirect()->route('user.all.ads')->with('success', 'Ad updated successfully.');
}


public function UserBlogdestroy($id)
{
    $ad = Blog::findOrFail($id);

    // Delete the image from storage if it exists
    if ($ad->image && Storage::disk('public')->exists($ad->image)) {
        Storage::disk('public')->delete($ad->image);
    }

    $ad->delete();

    return redirect()->back()->with('success', 'Ad deleted successfully.');
}



}
