@extends('layouts.admin')

@section('title', 'Edit Blog Post')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-6">Edit: {{ $blogPost->title }}</h1>

        {{-- === THE FINAL CORRECTION IS IN THIS LINE === --}}
        <form action="{{ route('admin.blog.update', ['blogPost' => $blogPost->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="space-y-6">
                
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $blogPost->title) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="excerpt" class="block text-sm font-medium text-gray-700">Excerpt (Short Summary)</label>
                    <textarea name="excerpt" id="excerpt" rows="3" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('excerpt', $blogPost->excerpt) }}</textarea>
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">Full Content</label>
                    <textarea name="content" id="content" rows="10" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('content', $blogPost->content) }}</textarea>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Cover Image</label>
                    <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="text-xs text-gray-500 mt-2">Leave blank to keep the current image.</p>
                    
                    @if($blogPost->image_url)
                        <div class="mt-4">
                            <p class="text-sm font-medium text-gray-600">Current Image:</p>
                            <img src="{{ asset($blogPost->image_url) }}" alt="Current Image" class="mt-2 h-32 w-auto rounded-md">
                        </div>
                    @endif
                </div>
            </div>
              
            <div class="mt-8 flex justify-end">
                <a href="{{ route('admin.blog.index') }}" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-300 mr-4">Cancel</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update Post</button>
            </div>
        </form>
    </div>
@endsection