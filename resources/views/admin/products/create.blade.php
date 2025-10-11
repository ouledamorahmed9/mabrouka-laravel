@extends('layouts.admin')

@section('title', 'Add New Product')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Add New Product</h1>

        {{-- Display Validation Errors --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">Whoops!</strong>
                <span class="block sm:inline">There were some problems with your input.</span>
                <ul class="mt-3 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- The form now includes enctype="multipart/form-data" for file uploads --}}
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Left Column -->
                <div>
                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Product Name</label>
                        <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name') }}" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                        <textarea name="description" id="description" rows="5" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
                    </div>

                    <!-- Main Image Upload -->
                    <div class="mb-4">
                        <label for="image_url" class="block text-gray-700 font-bold mb-2">Image Principale</label>
                        <input type="file" name="image_url" id="image_url" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>

                    {{-- === NEW: Gallery Image Upload === --}}
                    <div class="mb-4">
                        <label for="gallery" class="block text-gray-700 font-bold mb-2">Galerie d'images (sélection multiple)</label>
                        <input type="file" name="gallery[]" id="gallery" class="w-full px-3 py-2 border rounded-lg" multiple>
                    </div>
                </div>

                <!-- Right Column -->
                <div>
                    <!-- Price -->
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 font-bold mb-2">Price (TND)</label>
                        <input type="number" name="price" id="price" class="w-full px-3 py-2 border rounded-lg" value="{{ old('price') }}" step="0.01">
                    </div>

                    <!-- Category -->
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 font-bold mb-2">Category</label>
                        <input type="text" name="category" id="category" class="w-full px-3 py-2 border rounded-lg" value="{{ old('category') }}">
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Color -->
                        <div class="mb-4">
                            <label for="color" class="block text-gray-700 font-bold mb-2">Color</label>
                            <input type="text" name="color" id="color" class="w-full px-3 py-2 border rounded-lg" value="{{ old('color') }}">
                        </div>
                        <!-- Pieces -->
                        <div class="mb-4">
                            <label for="pieces" class="block text-gray-700 font-bold mb-2">Pieces</label>
                            <input type="number" name="pieces" id="pieces" class="w-full px-3 py-2 border rounded-lg" value="{{ old('pieces', 1) }}">
                        </div>
                    </div>
                    {{-- Published Toggle --}}
<div class="mt-6 bg-gray-50 p-4 rounded-lg border">
    <div x-data="{ toggled: true }" class="flex items-center">
        <label for="is_active" class="flex items-center cursor-pointer">
            <div class="relative">
                <input type="checkbox" id="is_active" name="is_active" class="sr-only" x-model="toggled" value="1" checked>
                <div class="block bg-gray-200 w-14 h-8 rounded-full transition"></div>
                <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition" :class="{ 'translate-x-full !bg-indigo-600': toggled }"></div>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-900">Publié (Visible sur le site)</p>
                <p class="text-xs text-gray-500">Si désactivé, le produit sera un brouillon non visible par les clients.</p>
            </div>
        </label>
    </div>
</div>

<!-- Style :Arroussa hadhra -->
<div class="mt-4">
    <label for="style" class="block text-sm font-medium text-gray-700">Style</label>
    <select name="style" id="style" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        <option value="">Aucun</option>
        <option value="Aaroussa">Aaroussa</option>
        <option value="Hadhara">Hadhara</option>
    </select>
</div>

                    <!-- Type -->
<div class="mt-4">
    <x-input-label for="type" :value="__('Type')" />
    <select id="type" name="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        <option value="Femme">Femme</option>
        <option value="Homme">Homme</option>
        <option value="Enfant">Enfant</option>
        <option value="Accessoire">Accessoire</option>
    </select>
    <x-input-error :messages="$errors->get('type')" class="mt-2" />
</div>
                    <!-- Checkboxes -->
                         {{-- Nouvelle Collection Checkbox --}}
    <div class="inline-flex items-center">
        <label class="relative flex items-center p-3 rounded-full cursor-pointer" for="new_collection">
            <input type="checkbox" name="new_collection" id="new_collection" value="1" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-gray-600 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-indigo-600 checked:bg-indigo-600 checked:before:bg-indigo-600 hover:before:opacity-10"/>
            <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            </span>
        </label>
        <label for="new_collection" class="ml-1 cursor-pointer select-none text-sm font-medium text-gray-900">Nouvelle Collection</label>
    </div>

                    <div class="flex space-x-6 mt-6">
                        <label for="for_sale" class="flex items-center">
                            <input type="checkbox" name="for_sale" id="for_sale" class="form-checkbox h-5 w-5 text-blue-600" checked value="1">
                            <span class="ml-2 text-gray-700">For Sale</span>
                        </label>
                        <label for="for_rent" class="flex items-center">
                            <input type="checkbox" name="for_rent" id="for_rent" class="form-checkbox h-5 w-5 text-blue-600" value="1">
                            <span class="ml-2 text-gray-700">For Rent</span>
                        </label>
                        <label for="bestseller" class="flex items-center">
                            <input type="checkbox" name="bestseller" id="bestseller" class="form-checkbox h-5 w-5 text-blue-600" value="1">
                            <span class="ml-2 text-gray-700">Bestseller</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-8 text-right">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Create Product</button>
            </div>
        </form>
    </div>
@endsection
