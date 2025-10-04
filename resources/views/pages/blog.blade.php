@extends('layouts.app')

@section('title', 'Le Journal')

@section('content')
<div class="bg-gray-900 text-white pt-28 md:pt-36 pb-24">
    <div class="container mx-auto px-6">
        <header class="text-center mb-16 animated-section">
           <h1 class="text-4xl md:text-5xl font-bold font-serif text-amber-300">Le Journal</h1>
           <p class="mt-4 text-gray-400">Plongez dans les coulisses de la création et de l'inspiration.</p>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($blogPosts as $post)
                <div class="animated-section">
                   <div class="bg-gray-800 rounded-lg shadow-2xl overflow-hidden group border border-gray-700">
                        <img src="{{ $post['imageUrl'] }}" alt="{{ $post['title'] }}" class="w-full h-64 object-cover" />
                        <div class="p-6">
                            <p class="text-xs text-gray-400 mb-2 uppercase">{{ $post['date'] }}</p>
                            <h3 class="font-bold text-xl mb-3 text-white group-hover:text-amber-400 transition-colors font-serif">{{ $post['title'] }}</h3>
                            <p class="text-gray-300 text-sm mb-4">{{ $post['excerpt'] }}</p>
                            <a href="#" class="font-semibold text-amber-400 hover:underline">Lire la suite &rarr;</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
