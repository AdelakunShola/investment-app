<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{
    public function Blogindex()
{
    $luxuryAds = Blog::latest()->paginate(10); // or use get() if you don't want pagination
    return view('backend.blog.index', compact('luxuryAds'));
}

    public function Blogcreate()
    {
        return view('backend.blog.create');
    }

    public function Blogstore(Request $request)
{
    $data = $request->all();

    // Handle image upload if present
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('luxury_ads', 'public');
    }

    // Encode specifications if provided
    if (isset($data['specifications']) && is_array($data['specifications'])) {
        $data['specifications'] = json_encode($data['specifications']);
    } else {
        $data['specifications'] = json_encode([]);
    }

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

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('luxury_ads', 'public');
    }

    $data['specifications'] = json_encode($request->input('specifications', []));

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
    $user = Auth::user();

    // Check if user already earned today
    $alreadyEarned = Transaction::where('user_id', $user->id)
        ->whereDate('created_at', Carbon::today())
        ->where('type', 'profit')
        ->where('method', 'system')
        ->where('description', 'like', 'Ad share reward%')
        ->exists();

    if ($alreadyEarned) {
        return response()->json(['status' => false, 'message' => 'You have already earned from ad sharing today.']);
    }

    // Determine reward amount
    if ($user->investmentPlan) {
        $baseAmount = $user->investmentPlan->amount;
        $weeklyPercent = $user->investmentPlan->weekly_interest;

        $weeklyReward = ($weeklyPercent / 100) * $baseAmount;
        $dailyReward = round($weeklyReward / 7, 2);
    } else {
        $dailyReward = 0.50;
    }

    // Credit user balance (assumes `profit_balance` or similar exists)
    $user->profit_balance += $dailyReward;
    $user->save();

    // Record transaction
    Transaction::create([
        'user_id' => $user->id,
        'description' => 'Ad share reward',
        'amount' => $dailyReward,
        'type' => 'profit',
        'charge' => 0,
        'final_amount' => $dailyReward,
        'method' => 'system',
        'pay_currency' => null,
        'pay_amount' => null,
        'manual_field_data' => null,
        'approval_cause' => null,
        'status' => 'approved', // or 'completed' if you're using statuses
    ]);

    return response()->json(['status' => true, 'message' => 'Reward added successfully.', 'amount' => $dailyReward]);
}


}
