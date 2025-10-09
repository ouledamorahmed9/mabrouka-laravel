<!-- Price -->
<div class="mb-4">
    <label for="price" class="block text-gray-700 font-bold mb-2">Price (TND)</label>
    <input type="number" name="price" id="price" class="w-full px-3 py-2 border rounded-lg" value="{{ old('price', $product->price ?? '0.00') }}" step="0.01">
</div>

<!-- Category -->
<div class="mb-4">
    <label for="category" class="block text-gray-700 font-bold mb-2">Category</label>
    <input type="text" name="category" id="category" class="w-full px-3 py-2 border rounded-lg" value="{{ old('category', $product->category ?? '') }}">
</div>

<div class="grid grid-cols-2 gap-4">
    <!-- Color -->
    <div class="mb-4">
        <label for="color" class="block text-gray-700 font-bold mb-2">Color</label>
        <input type="text" name="color" id="color" class="w-full px-3 py-2 border rounded-lg" value="{{ old('color', $product->color ?? '') }}">
    </div>
    <!-- Pieces -->
    <div class="mb-4">
        <label for="pieces" class="block text-gray-700 font-bold mb-2">Pieces</label>
        <input type="number" name="pieces" id="pieces" class="w-full px-3 py-2 border rounded-lg" value="{{ old('pieces', $product->pieces ?? 1) }}">
    </div>
</div>

<!-- Type -->
<div class="mb-4">
    <label for="type" class="block text-gray-700 font-bold mb-2">Type</label>
    <input type="text" name="type" id="type" class="w-full px-3 py-2 border rounded-lg" value="{{ old('type', $product->type ?? '') }}">
</div>

<!-- Checkboxes -->
<div class="space-y-4 mt-6">
    <label for="is_active" class="flex items-center">
        <input type="checkbox" name="is_active" id="is_active" class="form-checkbox h-5 w-5 text-blue-600" @if(old('is_active', $product->is_active ?? true)) checked @endif>
        <span class="ml-2 text-gray-700">Active (Visible on site)</span>
    </label>
    <label for="for_sale" class="flex items-center">
        <input type="checkbox" name="for_sale" id="for_sale" class="form-checkbox h-5 w-5 text-blue-600" @if(old('for_sale', $product->for_sale ?? false)) checked @endif>
        <span class="ml-2 text-gray-700">For Sale</span>
    </label>
    <label for="for_rent" class="flex items-center">
        <input type="checkbox" name="for_rent" id="for_rent" class="form-checkbox h-5 w-5 text-blue-600" @if(old('for_rent', $product->for_rent ?? false)) checked @endif>
        <span class="ml-2 text-gray-700">For Rent</span>
    </label>
    <label for="bestseller" class="flex items-center">
        <input type="checkbox" name="bestseller" id="bestseller" class="form-checkbox h-5 w-5 text-blue-600" @if(old('bestseller', $product->bestseller ?? false)) checked @endif>
        <span class="ml-2 text-gray-700">Bestseller</span>
    </label>
</div>
