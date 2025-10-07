@extends('layouts.admin')

@section('title', 'Add New Slide')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-6">Add New Homepage Slide</h1>

        <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6">
                
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="subtitle" class="block text-sm font-medium text-gray-700">Subtitle (Optional)</label>
                    <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="button_text" class="block text-sm font-medium text-gray-700">Button Text (Optional)</label>
                    <input type="text" name="button_text" id="button_text" value="{{ old('button_text') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="button_link" class="block text-sm font-medium text-gray-700">Button Link (Optional)</label>
                    <input type="url" name="button_link" id="button_link" value="{{ old('button_link') }}" placeholder="https://..." class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Slide Image (Recommended: 1920x1080px)</label>
                    <input type="file" name="image" id="image" required class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>
                
                <div class="flex items-center">
                    <input type="checkbox" name="is_active" id="is_active" value="1" checked class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                    <label for="is_active" class="ml-2 block text-sm text-gray-900">Active (Visible on homepage)</label>
                </div>

            </div>

            <div class="mt-8 flex justify-end">
                <a href="{{ route('admin.sliders.index') }}" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-300 mr-4">Cancel</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Save Slide</button>
            </div>
        </form>
    </div>
@endsection
