<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->paginate(10);
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'excerpt' => 'nullable|string|max:300',
        ]);

        $data = $request->only(['title', 'content', 'excerpt']);
        $data['slug'] = Str::slug($request->title);
        $data['date'] = now();
        $data['image_url'] = $request->file('image_url')->store('blog', 'public');
        $data['is_active'] = $request->input('is_active', 0);// Add this line

        BlogPost::create($data);

        return redirect()->route('admin.blog.index')->with('success', 'Blog post created successfully.');
    }

    public function edit(BlogPost $blogPost)
    {
        return view('admin.blog.edit', compact('blogPost'));
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'excerpt' => 'nullable|string|max:300',
        ]);

        $data = $request->only(['title', 'content', 'excerpt']);
        $data['slug'] = Str::slug($request->title);
        $data['is_active'] = $request->input('is_active', 0); // Add this line

        if ($request->hasFile('image_url')) {
            if ($blogPost->image_url) {
                Storage::disk('public')->delete($blogPost->image_url);
            }
            $data['image_url'] = $request->file('image_url')->store('blog', 'public');
        }

        $blogPost->update($data);

        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy(BlogPost $blogPost)
    {
        if ($blogPost->image_url) {
            Storage::disk('public')->delete($blogPost->image_url);
        }
        $blogPost->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted successfully.');
    }
}
