@extends('layouts.admin')

@section('title', 'Edit Blog Post')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Blog Post</h1>

        <form action="{{ route('admin.blog.update', $blogPost) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-lg" value="{{ old('title', $blogPost->title) }}" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-bold mb-2">Content</label>
                <textarea name="content" id="content" rows="10" class="w-full px-3 py-2 border rounded-lg" required>{{ old('content', $blogPost->content) }}</textarea>
            </div>
             <div class="mb-4">
                <label for="excerpt" class="block text-gray-700 font-bold mb-2">Excerpt (Short Summary)</label>
                <textarea name="excerpt" id="excerpt" rows="3" class="w-full px-3 py-2 border rounded-lg">{{ old('excerpt', $blogPost->excerpt) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="image_url" class="block text-gray-700 font-bold mb-2">New Featured Image (Optional)</label>
                <input type="file" name="image_url" id="image_url" class="w-full px-3 py-2 border rounded-lg">
                <p class="text-sm text-gray-500 mt-2">Current Image:</p>
                <img src="{{ asset('storage/' . $blogPost->image_url) }}" class="mt-2 h-24 w-auto rounded-md">
            </div>
            <div class="mb-6">
                <label for="is_active" class="flex items-center">
                    <input type="checkbox" name="is_active" id="is_active" class="form-checkbox h-5 w-5 text-blue-600" @if(old('is_active', $blogPost->is_active)) checked @endif>
                    <span class="ml-2 text-gray-700">Published (Visible on site)</span>
                </label>
            </div>
            <div class="text-right">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Update Post</button>
            </div>
        </form>
    </div>
@endsection
