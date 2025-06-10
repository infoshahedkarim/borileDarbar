<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner3;

class banner3Controller extends Controller
{
    public function create()
    {
        return view('admin.banner3.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'banner' => 'nullable|image',
            'img' => 'nullable|image',
            'message' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        foreach (['banner', 'img'] as $field) {
            if ($request->hasFile($field)) {
                $image = $request->file($field);
                $imageName = time() . '_' . $field . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/img/banner'), $imageName);
                $validated[$field] = 'assets/img/banner/' . $imageName;
            }
        }

        banner3::create($validated);

        return back()->with('success', 'Banner 3 saved successfully!');
    }
}

