@extends('layouts.admin')

@section('title', 'Edit Product: ' . $product->name)

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Product: <span class="text-blue-600">{{ $product->name }}</span></h1>

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

        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Left Column -->
                <div>
                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Product Name</label>
                        <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name', $product->name) }}" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                        <textarea name="description" id="description" rows="5" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('description', $product->description) }}</textarea>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-4">
                        <label for="image_url" class="block text-gray-700 font-bold mb-2">New Product Image (Optional)</label>
                        <input type="file" name="image_url" id="image_url" class="w-full px-3 py-2 border rounded-lg">
                        <p class="text-sm text-gray-500 mt-2">Current Image:</p>
                        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="mt-2 h-24 w-auto rounded-md">
                    </div>
                </div>

                <!-- Right Column -->
                <div>
                    <!-- Price -->
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 font-bold mb-2">Price (TND)</label>
                        <input type="number" name="price" id="price" class="w-full px-3 py-2 border rounded-lg" value="{{ old('price', $product->price) }}" required step="0.01">
                    </div>

                    <!-- Category -->
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 font-bold mb-2">Category</label>
                        <input type="text" name="category" id="category" class="w-full px-3 py-2 border rounded-lg" value="{{ old('category', $product->category) }}" required>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Color -->
                        <div class="mb-4">
                            <label for="color" class="block text-gray-700 font-bold mb-2">Color</label>
                            <input type="text" name="color" id="color" class="w-full px-3 py-2 border rounded-lg" value="{{ old('color', $product->color) }}" required>
                        </div>
                        <!-- Pieces -->
                        <div class="mb-4">
                            <label for="pieces" class="block text-gray-700 font-bold mb-2">Pieces</label>
                            <input type="number" name="pieces" id="pieces" class="w-full px-3 py-2 border rounded-lg" value="{{ old('pieces', $product->pieces) }}" required>
                        </div>
                    </div>

                    <!-- Type -->
                    <div class="mb-4">
                        <label for="type" class="block text-gray-700 font-bold mb-2">Type</label>
                        <input type="text" name="type" id="type" class="w-full px-3 py-2 border rounded-lg" value="{{ old('type', $product->type) }}" required>
                    </div>

                    <!-- Checkboxes -->
                    <div class="flex space-x-6 mt-6">
                        <label for="for_sale" class="flex items-center">
                            <input type="checkbox" name="for_sale" id="for_sale" class="form-checkbox h-5 w-5 text-blue-600" @if(old('for_sale', $product->for_sale)) checked @endif>
                            <span class="ml-2 text-gray-700">For Sale</span>
                        </label>
                        <label for="for_rent" class="flex items-center">
                            <input type="checkbox" name="for_rent" id="for_rent" class="form-checkbox h-5 w-5 text-blue-600" @if(old('for_rent', $product->for_rent)) checked @endif>
                            <span class="ml-2 text-gray-700">For Rent</span>
                        </label>
                        <label for="bestseller" class="flex items-center">
                            <input type="checkbox" name="bestseller" id="bestseller" class="form-checkbox h-5 w-5 text-blue-600" @if(old('bestseller', $product->bestseller)) checked @endif>
                            <span class="ml-2 text-gray-700">Bestseller</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-8 text-right">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Update Product</button>
            </div>
        </form>
    </div>
@endsection

