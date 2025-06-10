<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'banner1' => 'nullable|image',
            'img1' => 'nullable|image',
            'banner2' => 'nullable|image',
            'img2' => 'nullable|image',
            'banner3' => 'nullable|image',
            'img3' => 'nullable|image',

            'message1' => 'nullable|string',
            'description1' => 'nullable|string',
            'message2' => 'nullable|string',
            'description2' => 'nullable|string',
            'message3' => 'nullable|string',
            'description3' => 'nullable|string',
        ]);

        // Upload images to public/assets/img/banner
        foreach (['banner1', 'img1', 'banner2', 'img2', 'banner3', 'img3'] as $imgField) {
            if ($request->hasFile($imgField)) {
                $image = $request->file($imgField);
                $imageName = time() . '_' . $imgField . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/img/banner'), $imageName);
                $validated[$imgField] = 'assets/img/banner/' . $imageName;
            }
        }

        Banner::create($validated);

        return redirect()->back()->with('success', 'Banner data saved successfully!');
    }
}
