@extends('layouts.admin')

@section('title', 'Add New Slider')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Add New Slider</h1>

        <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title (Optional)</label>
                <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-lg" value="{{ old('title') }}">
            </div>
            <div class="mb-4">
                <label for="subtitle" class="block text-gray-700 font-bold mb-2">Subtitle (Optional)</label>
                <input type="text" name="subtitle" id="subtitle" class="w-full px-3 py-2 border rounded-lg" value="{{ old('subtitle') }}">
            </div>
            <div class="mb-4">
                <label for="image_url" class="block text-gray-700 font-bold mb-2">Slider Image</label>
                <input type="file" name="image_url" id="image_url" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div class="mb-6">
                <label for="is_active" class="flex items-center">
                    <input type="checkbox" name="is_active" id="is_active" class="form-checkbox h-5 w-5 text-blue-600" checked>
                    <span class="ml-2 text-gray-700">Visible on homepage</span>
                </label>
            </div>
            <div class="text-right">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Create Slider</button>
            </div>
        </form>
    </div>
@endsection
