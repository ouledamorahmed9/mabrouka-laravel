@extends('layouts.admin')

@section('title', 'Gérer les Témoignages')

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-6">
    <div class="container mx-auto px-6 py-8">
        {{-- Titre et Bouton Ajouter --}}
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-gray-700 text-3xl font-medium">Liste des Témoignages</h3>
            <a href="{{ route('admin.testimonials.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300">
                Ajouter un Témoignage
            </a>
        </div>

        {{-- Affichage des messages de succès --}}
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        {{-- Conteneur du Tableau --}}
        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Image</th>
                        <th class="py-3 px-6 text-left">Nom</th>
                        <th class="py-3 px-6 text-left">Contenu (Extrait)</th>
                        <th class="py-3 px-6 text-center">Note</th>
                        <th class="py-3 px-6 text-center">Statut</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @forelse($testimonials as $testimonial)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                @if($testimonial->image)
                                    <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-10 h-10 rounded-full object-cover border border-gray-300">
                                @else
                                    {{-- Image de remplacement --}}
                                    <span class="flex items-center justify-center w-10 h-10 bg-gray-300 text-gray-600 rounded-full font-semibold">
                                        {{ substr($testimonial->name, 0, 1) }}
                                    </span>
                                @endif
                            </td>
                            <td class="py-3 px-6 text-left">
                                <span class="font-medium">{{ $testimonial->name }}</span>
                            </td>
                            <td class="py-3 px-6 text-left max-w-xs"> {{-- max-w-xs pour limiter la largeur --}}
                                <span class="block overflow-hidden overflow-ellipsis whitespace-nowrap" title="{{ $testimonial->content }}">
                                    {{ Str::limit($testimonial->content, 60) }}
                                </span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-yellow-200 text-yellow-700 py-1 px-3 rounded-full text-xs">{{ $testimonial->rating }} ★</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{-- Formulaire pour basculer le statut --}}
                                <form action="{{ route('admin.testimonials.toggleStatus', $testimonial) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('PATCH')
                                    @if($testimonial->is_active)
                                        <button type="submit" class="bg-green-200 text-green-700 py-1 px-3 rounded-full text-xs hover:bg-green-300 transition duration-300" title="Cliquez pour désactiver">Actif</button>
                                    @else
                                        <button type="submit" class="bg-red-200 text-red-700 py-1 px-3 rounded-full text-xs hover:bg-red-300 transition duration-300" title="Cliquez pour activer">Inactif</button>
                                    @endif
                                </form>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    {{-- Bouton Modifier --}}
                                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="w-6 h-6 mr-2 transform hover:text-purple-500 hover:scale-110" title="Modifier">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    {{-- Bouton Supprimer --}}
                                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline-block" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce témoignage ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-6 h-6 transform hover:text-red-500 hover:scale-110" title="Supprimer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-6 px-6 text-center text-gray-500">Aucun témoignage trouvé.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="mt-6">
            {{ $testimonials->links() }} {{-- Utilise la pagination Tailwind par défaut --}}
        </div>

    </div>
</main>
@endsection

