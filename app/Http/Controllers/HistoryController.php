<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use App\Models\BoardMember;

class HistoryController extends Controller
{
    public function index()
    {
        $history = History::first(); // Assume single-row table
        return view('admin.history.index', compact('history'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'history' => 'required|string',
        ]);

        $history = History::first();

        if ($history) {
            $history->update(['history' => $request->history]);
        } else {
            History::create(['history' => $request->history]);
        }

        return redirect()->back()->with('success', 'History updated successfully!');
    }
    public function about()
    {
        $history = History::first(); // Assuming single-row table
        $boardMembers = BoardMember::all();
        return view('about', compact('history', 'boardMembers'));
    }
}
