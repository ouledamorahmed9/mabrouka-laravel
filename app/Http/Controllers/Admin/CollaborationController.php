<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collaboration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CollaborationController extends Controller
{
    public function index(): View
    {
        $collaborations = Collaboration::latest()->paginate(10);
        return view('admin.collaborations.index', compact('collaborations'));
    }

    public function create(): View
    {
        return view('admin.collaborations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'website_url' => 'nullable|url|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', // <-- ADDED
        ]);

        $data = [
            'name' => $request->name,
            'website_url' => $request->website_url,
            'is_active' => $request->has('is_active'),
            'logo_url' => $request->file('logo')->store('collaborations', 'public'),
        ];

        // Handle gallery images upload
        if ($request->hasFile('gallery')) {
            $galleryPaths = [];
            foreach ($request->file('gallery') as $file) {
                $galleryPaths[] = $file->store('collaborations/gallery', 'public');
            }
            $data['gallery'] = $galleryPaths;
        }

        Collaboration::create($data);

        return redirect()->route('admin.collaborations.index')->with('success', 'Collaboration created successfully.');
    }

    public function edit(Collaboration $collaboration): View
    {
        return view('admin.collaborations.edit', compact('collaboration'));
    }

    public function update(Request $request, Collaboration $collaboration)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'website_url' => 'nullable|url|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', // <-- ADDED
        ]);
        
        $data = [
            'name' => $request->name,
            'website_url' => $request->website_url,
            'is_active' => $request->has('is_active'),
        ];

        if ($request->hasFile('logo')) {
            Storage::disk('public')->delete($collaboration->logo_url);
            $data['logo_url'] = $request->file('logo')->store('collaborations', 'public');
        }

        // Handle gallery images update (appends new images)
        if ($request->hasFile('gallery')) {
            $galleryPaths = $collaboration->gallery ?? [];
            foreach ($request->file('gallery') as $file) {
                $galleryPaths[] = $file->store('collaborations/gallery', 'public');
            }
            $data['gallery'] = $galleryPaths;
        }

        $collaboration->update($data);

        return redirect()->route('admin.collaborations.index')->with('success', 'Collaboration updated successfully.');
    }

    public function destroy(Collaboration $collaboration)
    {
        Storage::disk('public')->delete($collaboration->logo_url);
        // Delete gallery images
        if ($collaboration->gallery) {
            foreach ($collaboration->gallery as $imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
        }
        $collaboration->delete();

        return redirect()->route('admin.collaborations.index')->with('success', 'Collaboration deleted successfully.');
    }
}

