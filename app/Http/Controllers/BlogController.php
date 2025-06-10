<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'header' => 'required|string',
            'img' => 'required|image',
            'date' => 'required|date',
            'time' => 'required|string',
            'description' => 'required|string',
        ]);

        $data = $request->only(['header', 'date', 'time', 'description']);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/img/blog'), $imageName);
            $data['img'] = 'assets/img/blog/' . $imageName;
        }

        Blog::create($data);

        return redirect()->route('admin.blog.index')->with('success', 'Blog post created successfully!');
    }


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'header' => 'required|string',
            'img' => 'nullable|image',
            'date' => 'required|date',
            'time' => 'required|string',
            'description' => 'required|string',
        ]);

        $data = $request->only(['header', 'date', 'time', 'description']);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/img/blog'), $imageName);
            $data['img'] = 'assets/img/blog/' . $imageName;
        }

        $blog->update($data);

        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated successfully!');
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if (file_exists(public_path($blog->img))) {
            unlink(public_path($blog->img));
        }
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted!');
    }
}
