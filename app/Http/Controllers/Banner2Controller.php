<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner2;

class Banner2Controller extends Controller
{
    public function create()
    {
        return view('admin.banner2.create');
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

        banner2::create($validated);

        return back()->with('success', 'Banner 2 saved successfully!');
    }
}
