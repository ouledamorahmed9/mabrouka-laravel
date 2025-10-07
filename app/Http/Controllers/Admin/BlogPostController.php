<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the blog posts.
     */
    public function index(): View
    {
        $posts = BlogPost::latest()->paginate(10);
        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new blog post.
     */
    public function create(): View
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created blog post in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:300',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/blog'), $imageName);

        BlogPost::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'image_url' => 'images/blog/' . $imageName,
            'author' => auth()->user()->name, // Assign the logged-in user as the author
            'date' => now()->format('d F Y'),
        ]);

        return redirect()->route('admin.blog.index')
                         ->with('success', 'Blog post created successfully.');
    }

    /**
     * Show the form for editing the specified blog post.
     */
    public function edit(BlogPost $blogPost): View
    {
        return view('admin.blog.edit', compact('blogPost'));
    }

    /**
     * Update the specified blog post in storage.
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:300',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $input = $request->all();
        $input['slug'] = Str::slug($request->title);

        if ($image = $request->file('image')) {
            if ($blogPost->image_url && file_exists(public_path($blogPost->image_url))) {
                unlink(public_path($blogPost->image_url));
            }
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images/blog'), $imageName);
            $input['image_url'] = 'images/blog/' . $imageName;
        }

        $blogPost->update($input);

        return redirect()->route('admin.blog.index')
                         ->with('success', 'Blog post updated successfully.');
    }

    /**
     * Remove the specified blog post from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
        if ($blogPost->image_url && file_exists(public_path($blogPost->image_url))) {
            unlink(public_path($blogPost->image_url));
        }

        $blogPost->delete();

        return redirect()->route('admin.blog.index')
                         ->with('success', 'Blog post deleted successfully.');
    }
}
