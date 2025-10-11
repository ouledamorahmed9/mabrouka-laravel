<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'category' => 'nullable|string|max:255',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'color' => 'nullable|string|max:255',
            'pieces' => 'nullable|integer|min:0',
            'type' => 'required|string|in:Femme,Homme,Enfant,Accessoire',
        ]);

        $data = $request->only(['name', 'description', 'price', 'category', 'color', 'pieces', 'type']);
        $data['slug'] = Str::slug($request->name);
        
        // === CORRECTION APPLIQUÉE ICI ===
        $data['bestseller'] = $request->input('bestseller', 0);
        $data['new_collection'] = $request->input('new_collection', 0); // <-- LIGNE CORRIGÉE
        $data['for_sale'] = $request->input('for_sale', 0);
        $data['for_rent'] = $request->input('for_rent', 0);

        // Handle main image upload
        if ($request->hasFile('image_url')) {
            $data['image_url'] = $request->file('image_url')->store('products', 'public');
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery')) {
            $galleryPaths = [];
            foreach ($request->file('gallery') as $file) {
                $galleryPaths[] = $file->store('products/gallery', 'public');
            }
            $data['gallery'] = $galleryPaths;
        }

        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'category' => 'nullable|string|max:255',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'color' => 'nullable|string|max:255',
            'pieces' => 'nullable|integer|min:0',
            'type' => 'required|string|in:Femme,Homme,Enfant,Accessoire',
        ]);

        $data = $request->only(['name', 'description', 'price', 'category', 'color', 'pieces', 'type']);
        $data['slug'] = Str::slug($request->name);

        // === CORRECTION APPLIQUÉE ICI ===
        $data['bestseller'] = $request->input('bestseller', 0);
        $data['new_collection'] = $request->input('new_collection', 0); // <-- LIGNE CORRIGÉE
        $data['for_sale'] = $request->input('for_sale', 0);
        $data['for_rent'] = $request->input('for_rent', 0);


        // Handle main image update
        if ($request->hasFile('image_url')) {
            if ($product->image_url) {
                Storage::disk('public')->delete($product->image_url);
            }
            $data['image_url'] = $request->file('image_url')->store('products', 'public');
        }

        // Handle gallery images update
        if ($request->hasFile('gallery')) {
            $galleryPaths = $product->gallery ?? [];
            foreach ($request->file('gallery') as $file) {
                $galleryPaths[] = $file->store('products/gallery', 'public');
            }
            $data['gallery'] = $galleryPaths;
        }

        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image_url) {
            Storage::disk('public')->delete($product->image_url);
        }

        if ($product->gallery) {
            foreach ($product->gallery as $imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
        }
        
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}

