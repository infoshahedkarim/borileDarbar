<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebInfo;

class WebInfoController extends Controller
{
    public function index()
    {
        $webInfo = WebInfo::first(); // assuming only 1 row exists
        return view('admin.web_info.index', compact('webInfo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'number' => 'nullable|string',
            'location' => 'nullable|string',
            'email' => 'nullable|email',
            'info' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $webInfo = WebInfo::findOrFail($id);

        $webInfo->facebook = $request->facebook;
        $webInfo->twitter = $request->twitter;
        $webInfo->linkedin = $request->linkedin;
        $webInfo->number = $request->number;
        $webInfo->location = $request->location;
        $webInfo->email = $request->email;
        $webInfo->info = $request->info;

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/img'), $imageName);
            $webInfo->logo = 'assets/img/' . $imageName;
        }

        $webInfo->save();

        return redirect()->route('admin.web_info.index')->with('success', 'Website info updated successfully!');
    }
}
