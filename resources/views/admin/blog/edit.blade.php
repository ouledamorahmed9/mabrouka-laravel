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
{{-- Published Toggle --}}
<div class="mt-6 bg-gray-50 p-4 rounded-lg border">
    <div x-data="{ toggled: {{ $blogPost->is_active ? 'true' : 'false' }} }" class="flex items-center">
        <label for="is_active" class="flex items-center cursor-pointer">
            <div class="relative">
                <input type="checkbox" id="is_active" name="is_active" class="sr-only" x-model="toggled" value="1" @if($blogPost->is_active) checked @endif>
                <div class="block bg-gray-200 w-14 h-8 rounded-full transition"></div>
                <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition" :class="{ 'translate-x-full !bg-indigo-600': toggled }"></div>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-900">Publié (Visible sur le site)</p>
                <p class="text-xs text-gray-500">Si désactivé, l'article sera un brouillon non visible par les clients.</p>
            </div>
        </label>
    </div>
</div>
            <div class="text-right">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Update Post</button>
            </div>
        </form>
    </div>
@endsection
