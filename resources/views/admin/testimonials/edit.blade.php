@extends('layouts.admin')

@section('title', 'Modifier le Témoignage')

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-6">
    <div class="container mx-auto px-6 py-8">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-gray-700 text-3xl font-medium">Modifier le témoignage</h3>
            <a href="{{ route('admin.testimonials.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded transition duration-300">
                Retour à la liste
            </a>
        </div>

        {{-- Affichage des erreurs de validation --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Oups!</strong>
                <span class="block sm:inline">Quelques erreurs sont survenues :</span>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-8">
            <div class="mt-4">
                <div class="p-6 bg-white rounded-md shadow-md">
                    <h2 class="text-lg text-gray-700 font-semibold capitalize mb-6">Formulaire de modification</h2>

                    {{-- Formulaire --}}
                    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- Important pour la mise à jour --}}
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            {{-- Nom du client --}}
                            <div>
                                <label class="text-gray-700" for="name">Nom du client <span class="text-red-500">*</span></label>
                                <input id="name" name="name" type="text" value="{{ old('name', $testimonial->name) }}" required
                                       class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                            </div>

                            {{-- Note (Rating) --}}
                            <div>
                                <label class="text-gray-700" for="rating">Note (sur 5) <span class="text-red-500">*</span></label>
                                <select id="rating" name="rating" required
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                    <option value="5" {{ old('rating', $testimonial->rating) == 5 ? 'selected' : '' }}>★★★★★ (5 étoiles)</option>
                                    <option value="4" {{ old('rating', $testimonial->rating) == 4 ? 'selected' : '' }}>★★★★☆ (4 étoiles)</option>
                                    <option value="3" {{ old('rating', $testimonial->rating) == 3 ? 'selected' : '' }}>★★★☆☆ (3 étoiles)</option>
                                    <option value="2" {{ old('rating', $testimonial->rating) == 2 ? 'selected' : '' }}>★★☆☆☆ (2 étoiles)</option>
                                    <option value="1" {{ old('rating', $testimonial->rating) == 1 ? 'selected' : '' }}>★☆☆☆☆ (1 étoile)</option>
                                </select>
                            </div>
                        </div>

                        {{-- Contenu du témoignage --}}
                        <div class="mt-6">
                            <label class="text-gray-700" for="content">Contenu du témoignage <span class="text-red-500">*</span></label>
                            <textarea id="content" name="content" rows="5" required
                                      class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">{{ old('content', $testimonial->content) }}</textarea>
                        </div>

                        {{-- Upload Image --}}
                        <div class="mt-6">
                            <label class="text-gray-700" for="image">Photo du client (Optionnel)</label>
                            <input id="image" name="image" type="file"
                                   class="block w-full px-3 py-2 mt-2 text-sm text-gray-600 bg-white border border-gray-300 rounded-md file:bg-gray-200 file:text-gray-700 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full file:mr-4 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                            <span class="text-xs text-gray-500">Formats acceptés : JPG, PNG, WEBP. Max 2 Mo. Laisser vide pour conserver l'image actuelle.</span>
                            {{-- Affichage de l'image actuelle --}}
                            @if($testimonial->image)
                            <div class="mt-4">
                                <span class="text-gray-700 text-sm">Image actuelle :</span>
                                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Image actuelle" class="mt-2 h-20 w-20 object-cover rounded-md border border-gray-300">
                            </div>
                            @endif
                        </div>

                        {{-- Statut Actif/Inactif --}}
                        <div class="mt-6">
                            <label class="flex items-center text-gray-700">
                                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}
                                       class="form-checkbox h-5 w-5 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                                <span class="ml-2">Rendre visible sur le site (Actif)</span>
                            </label>
                        </div>

                        {{-- Bouton de soumission --}}
                        <div class="flex justify-end mt-6">
                            <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                                Mettre à jour
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

