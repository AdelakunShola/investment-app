<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\investment_plan;
use App\Models\InvestmentPlan;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function indexPlan()
    {
        $plans = investment_plan::latest()->get();
        return view('backend.plans.manage_plans', compact('plans'));
    }


    public function AddPlan()
    {
        return view('backend.plans.add_plans');
    }



    public function planStore(Request $request)
{
    // Handle file upload
    $iconPath = null;
    if ($request->hasFile('icon')) {
        $iconPath = $request->file('icon')->store('uploads/investment_icons', 'public');
    }

    // Create the investment plan
    investment_plan::create([
        'icon' => $iconPath,
        'name' => $request->name,
        'badge' => $request->badge,
        'min_amount' => $request->min_amount,
        'max_amount' => $request->max_amount,
        'weekly_interest' => $request->weekly_interest,
    ]);

    return redirect()->route('admin.manage.plans')->with('success', 'Investment Plan created successfully!');
}

    


    public function editPlan($id)
    {
        $plan = investment_plan::findOrFail($id);
        return view('backend.plans.edit_plans', compact('plan'));
    }

 

// Handle the update request
public function updatePlan(Request $request, $id)
{
    $plan = investment_plan::findOrFail($id);

    // If a new icon is uploaded, replace the old one
    if ($request->hasFile('icon')) {
        $iconPath = $request->file('icon')->store('uploads/investment_icons', 'public');
        $plan->icon = $iconPath;
    }

    // Update other fields
    $plan->name = $request->name;
    $plan->badge = $request->badge;
    $plan->min_amount = $request->min_amount;
    $plan->max_amount = $request->max_amount;
    $plan->weekly_interest = $request->weekly_interest;
    $plan->save();

    return redirect()->route('admin.manage.plans')->with('success', 'Investment Plan updated successfully!');
}



    public function destroyPlan($id)
    {
        $plan = investment_plan::findOrFail($id);

    // Delete icon file if exists
    if ($plan->icon && file_exists(public_path('storage/' . $plan->icon))) {
        unlink(public_path('storage/' . $plan->icon));
    }

    $plan->delete();

    return redirect()->route('admin.manage.plans')->with('success', 'Investment Plan deleted successfully.');
    }
}
