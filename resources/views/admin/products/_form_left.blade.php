<!-- Name -->
<div class="mb-4">
    <label for="name" class="block text-gray-700 font-bold mb-2">Product Name</label>
    <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-lg" value="{{ old('name', $product->name ?? '') }}" required>
</div>

<!-- Description -->
<div class="mb-4">
    <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
    <textarea name="description" id="description" rows="5" class="w-full px-3 py-2 border rounded-lg">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<!-- Main Image Upload -->
<div class="mb-4">
    <label for="image_url" class="block text-gray-700 font-bold mb-2">Main Product Image</label>
    <input type="file" name="image_url" id="image_url" class="w-full px-3 py-2 border rounded-lg" {{ isset($product) ? '' : 'required' }}>
    @if(isset($product) && $product->image_url)
        <p class="text-sm text-gray-500 mt-2">Current Image:</p>
        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="mt-2 h-24 w-auto rounded-md">
    @endif
</div>

<!-- Gallery Images Upload -->
<div class="mb-4">
    <label for="gallery" class="block text-gray-700 font-bold mb-2">Gallery Images</label>
    <input type="file" name="gallery[]" id="gallery" class="w-full px-3 py-2 border rounded-lg" multiple>
    @if(isset($product) && $product->gallery)
        <p class="text-sm text-gray-500 mt-2">Current Gallery:</p>
        <div class="flex flex-wrap gap-4 mt-2">
            @foreach($product->gallery as $image)
                <img src="{{ asset('storage/' . $image) }}" class="h-20 w-auto rounded-md">
            @endforeach
        </div>
    @endif
</div>
