<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BoardMember;


class BoardMemberController extends Controller
{
    public function index()
    {
        $members = BoardMember::all();
        return view('admin.board-memebers.index', compact('members'));
    }

    public function create()
    {
        return view('admin.board-memebers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'img' => 'required|image',
            'name' => 'required|string',
            'designation' => 'required|string',
            'phone' => 'required|string',
            'fb' => 'nullable|string',
            'twitter' => 'nullable|string',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/img/board-members'), $imageName);
            $validated['img'] = 'assets/img/board-members/' . $imageName;
        }

        BoardMember::create($validated);
        return redirect()->route('admin.board-members.index')->with('success', 'Board member added successfully!');
    }

    public function edit($id)
    {
        $member = BoardMember::findOrFail($id);
        return view('admin.board-memebers.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = BoardMember::findOrFail($id);

        $validated = $request->validate([
            'img' => 'nullable|image',
            'name' => 'required|string',
            'designation' => 'required|string',
            'phone' => 'required|string',
            'fb' => 'nullable|string',
            'twitter' => 'nullable|string',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/img/board-members'), $imageName);
            $validated['img'] = 'assets/img/board-members/' . $imageName;
        }

        $member->update($validated);
        return redirect()->route('admin.board-members.index')->with('success', 'Board member updated successfully!');
    }

    public function destroy($id)
    {
        $member = BoardMember::findOrFail($id);
        if (file_exists(public_path($member->img))) {
            unlink(public_path($member->img));
        }
        $member->delete();
        return redirect()->route('admin.board-members.index')->with('success', 'Board member deleted successfully!');
    }
}
