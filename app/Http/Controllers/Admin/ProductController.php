<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; // Make sure Str is imported
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index(): View
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create(): View
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'pieces' => 'required|integer|min:1',
            'type' => 'required|string|max:255',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $imageName = time().'.'.$request->image_url->extension();
        $request->image_url->storeAs('public/products', $imageName);
        $imagePath = 'products/' . $imageName;

        // === START OF SLUG MODIFICATION ===
        $slug = Str::slug($request->name);
        $count = Product::where('slug', 'LIKE', $slug . '%')->count();
        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }
        // === END OF SLUG MODIFICATION ===

        Product::create([
            'name' => $request->name,
            'slug' => $slug, // Use the new unique slug
            'price' => $request->price,
            'description' => $request->description,
            'category' => $request->category,
            'color' => $request->color,
            'pieces' => $request->pieces,
            'type' => $request->type,
            'for_sale' => $request->has('for_sale'),
            'for_rent' => $request->has('for_rent'),
            'bestseller' => $request->has('bestseller'),
            'image_url' => $imagePath,
            'gallery' => [$imagePath],
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product): View
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'pieces' => 'required|integer|min:1',
            'type' => 'required|string|max:255',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $imagePath = $product->image_url;
        if ($request->hasFile('image_url')) {
            // Delete old image
            if ($product->image_url) {
                Storage::delete('public/' . $product->image_url);
            }
            $imageName = time().'.'.$request->image_url->extension();
            $request->image_url->storeAs('public/products', $imageName);
            $imagePath = 'products/' . $imageName;
        }

        // === START OF SLUG MODIFICATION (FOR UPDATES) ===
        $slug = Str::slug($request->name);
        // Check for duplicates, excluding the current product itself
        $count = Product::where('slug', 'LIKE', $slug . '%')->where('id', '!=', $product->id)->count();
        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }
        // === END OF SLUG MODIFICATION ===

        $product->update([
            'name' => $request->name,
            'slug' => $slug, // Use the new unique slug
            'price' => $request->price,
            'description' => $request->description,
            'category' => $request->category,
            'color' => $request->color,
            'pieces' => $request->pieces,
            'type' => $request->type,
            'for_sale' => $request->has('for_sale'),
            'for_rent' => $request->has('for_rent'),
            'bestseller' => $request->has('bestseller'),
            'image_url' => $imagePath,
            'gallery' => [$imagePath], // You can build a gallery management feature later
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image_url) {
            Storage::delete('public/' . $product->image_url);
        }
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}

