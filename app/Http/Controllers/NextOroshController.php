<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NextOrosh;

class NextOroshController extends Controller
{
    public function index()
    {
        $oroshList = \App\Models\NextOrosh::latest()->get();
        return view('admin.nextorosh.index', compact('oroshList'));
    }

    public function create()
    {
        return view('admin.nextorosh.create');
    }

    public function showFrontend()
    {
        $oroshList = \App\Models\NextOrosh::latest()->get();
        return view('frontend.nextorosh.front', compact('oroshList'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'img' => 'nullable|image',
            'start_time' => 'required|string',
            'end_time' => 'required|string',
            'location' => 'required|string',
            'header' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/img/orosh'), $imageName);
            $validated['img'] = 'assets/img/orosh/' . $imageName;
        }

        \App\Models\NextOrosh::create($validated);

        return redirect()->route('nextorosh.index')->with('success', 'Orosh event added successfully!');
    }


}
