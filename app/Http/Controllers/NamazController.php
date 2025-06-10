<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Namaz;
use App\Models\NextOrosh;
use App\Models\History;
use App\Models\Blog;
use App\Models\WebInfo;
use App\Models\Banner;


class NamazController extends Controller
{

    public function index()
    {
        $namaz = Namaz::latest()->first();
        $history = History::first();
        $today = Carbon::today();
        $webInfo = WebInfo::first();

        // Split upcoming and past
        $upcomingOrosh = NextOrosh::where('date', '>=', $today)->orderBy('date', 'asc')->get();
        $pastOrosh = NextOrosh::where('date', '<', $today)->orderBy('date', 'desc')->get();
        $blogs = Blog::latest()->take(4)->get(); // show latest 2 blogs

        $banner = Banner::first();
        return view('index', compact('namaz', 'history', 'upcomingOrosh', 'pastOrosh', 'blogs', 'webInfo', 'banner'));
    }

    // Show form to update Namaz times (admin panel)
    public function edit()
    {
        $namaz = Namaz::first();
        return view('admin.namaz.edit', compact('namaz'));
    }

    // Save/update Namaz times
    public function update(Request $request)
    {
        $validated = $request->validate([
            'fajr' => 'required|string',
            'zuhr' => 'required|string',
            'asr' => 'required|string',
            'magrib' => 'required|string',
            'isha' => 'required|string',
            'jummah' => 'required|string',
        ]);

        $namaz = Namaz::first();

        if ($namaz) {
            $namaz->update($validated);
        } else {
            Namaz::create($validated);
        }

        return redirect()->back()->with('success', 'Namaz times updated successfully!');
    }


}
