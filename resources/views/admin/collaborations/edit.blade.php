@extends('layouts.admin')

@section('title', 'Edit Collaboration')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-6">Edit Collaboration</h1>

        <form action="{{ route('admin.collaborations.update', $collaboration->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Partner Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $collaboration->name) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div>
                    <label for="logo" class="block text-sm font-medium text-gray-700">New Logo (Optional)</label>
                    <input type="file" name="logo" id="logo" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="text-xs text-gray-500 mt-2">Current Logo:</p>
                    <img src="{{ asset('storage/' . $collaboration->logo_url) }}" alt="{{ $collaboration->name }}" class="mt-2 h-16 w-auto bg-gray-100 p-2 rounded">
                </div>
                
                {{-- === GALLERY SECTION ADDED === --}}
                <div>
                    <label for="gallery" class="block text-sm font-medium text-gray-700">Add More Gallery Images</label>
                    <input type="file" name="gallery[]" id="gallery" multiple class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">

                    @if($collaboration->gallery)
                    <p class="text-xs text-gray-500 mt-4">Current Gallery Images:</p>
                    <div class="mt-2 grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-4">
                        @foreach($collaboration->gallery as $image)
                            <img src="{{ asset('storage/' . $image) }}" class="h-24 w-full object-cover rounded-md">
                        @endforeach
                    </div>
                    @endif
                </div>
                
                <div class="flex items-center">
                    <input type="checkbox" name="is_active" id="is_active" value="1" @if($collaboration->is_active) checked @endif class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    <label for="is_active" class="ml-2 block text-sm text-gray-900">Active (Visible on homepage)</label>
                </div>
            </div>
            <div class="mt-8 flex justify-end">
                <a href="{{ route('admin.collaborations.index') }}" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-300 mr-4">Cancel</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update</button>
            </div>
        </form>
    </div>
@endsection

