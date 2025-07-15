<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserRanking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserRankingController extends Controller
{
    public function Rankingindex()
    {
        $rankings = UserRanking::all();
        return view('backend.ranking.all_ranking', compact('rankings'));
    }

    public function Rankingstore(Request $request)
{
    $data = $request->all();

    if ($request->hasFile('icon')) {
    $data['icon'] = $request->file('icon')->store('rankings', 'public');
}


    UserRanking::create($data);

    return back()->with('success', 'Ranking added successfully.');
}


   public function Rankingedit($id)
{
    $ranking = UserRanking::findOrFail($id);
    return response()->json($ranking);
}

public function Rankingupdate(Request $request, $id)
{
    $ranking = UserRanking::findOrFail($id);
    $data = $request->all();

    if ($request->hasFile('icon')) {
        $data['icon'] = $request->file('icon')->store('rankings', 'public');
    }

    $ranking->update($data);

    return redirect()->back()->with('success', 'Ranking updated successfully.');
}


    public function Rankingdestroy($id)
{
    $ranking = UserRanking::findOrFail($id);

    // Delete the icon file if exists
    if ($ranking->icon && Storage::disk('public')->exists($ranking->icon)) {
        Storage::disk('public')->delete($ranking->icon);
    }

    $ranking->delete();

    return back()->with('success', 'Ranking deleted successfully.');
}

}
