<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Ajout important pour gérer les images

class TestimonialController extends Controller
{
    /**
     * Affiche la liste des témoignages.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(15);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Affiche le formulaire de création.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Enregistre un nouveau témoignage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'is_active' => 'nullable|boolean',
        ]);

        $data = $validated;
        // Gère la case à cocher
        $data['is_active'] = $request->has('is_active'); 

        if ($request->hasFile('image')) {
            // Stocke l'image et sauvegarde le chemin
            $path = $request->file('image')->store('public/testimonials');
            $data['image'] = str_replace('public/', '', $path);
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Témoignage créé avec succès.');
    }

    /**
     * Display the specified resource. (Nous n'en avons pas besoin)
     */
    public function show(Testimonial $testimonial)
    {
        return redirect()->route('admin.testimonials.edit', $testimonial);
    }

    /**
     * Affiche le formulaire d'édition.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Met à jour un témoignage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'is_active' => 'nullable|boolean',
        ]);

        $data = $validated;
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            if ($testimonial->image) {
                Storage::delete('public/' . $testimonial->image);
            }
            // Enregistrer la nouvelle image
            $path = $request->file('image')->store('public/testimonials');
            $data['image'] = str_replace('public/', '', $path);
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Témoignage mis à jour avec succès.');
    }

    /**
     * Supprime un témoignage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // Supprimer l'image associée
        if ($testimonial->image) {
            Storage::delete('public/' . $testimonial->image);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Témoignage supprimé avec succès.');
    }

    /**
     * Nouvelle fonction pour basculer le statut
     */
    public function toggleStatus(Testimonial $testimonial)
    {
        $testimonial->update(['is_active' => !$testimonial->is_active]);
        return redirect()->route('admin.testimonials.index')->with('success', 'Statut du témoignage mis à jour.');
    }
}

