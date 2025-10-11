@extends('layouts.public')

{{-- === SEO SECTIONS === --}}
@section('title', $post->title)
@section('description', Str::limit(strip_tags($post->excerpt), 155))
@section('og_image', asset($post->image_url))


@section('content')

<div class="bg-black text-white pt-32 md:pt-40 pb-24">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">

            <div class="mb-8 animated-section">
                <a href="{{ route('blog') }}" class="text-amber-400 hover:text-amber-300 transition-colors">&larr; Retour au blog</a>
            </div>

            <div class="mb-8 animated-section">
                <img src="{{ asset('storage/' . $post->image_url) }}" alt="{{ $post['title'] }}" class="w-full h-auto rounded-lg shadow-2xl">
            </div>

            <div class="text-center text-gray-400 text-sm mb-4 animated-section">
                <span>Par {{ $post['author'] }}</span>
                <span class="mx-2">&bull;</span>
                <span>{{ $post['date'] }}</span>
            </div>

            <header class="text-center mb-12 animated-section">
                <h1 class="text-4xl md:text-5xl font-bold font-serif text-white">{{ $post['title'] }}</h1>
            </header>
            
            <article class="prose-styles max-w-3xl mx-auto animated-section">
                {!! $post['content'] !!}
            </article>

            <div class="mt-16 pt-8 border-t border-gray-700 flex items-center justify-center space-x-4 animated-section">
                <h3 class="text-lg font-semibold text-white">Partager cet article :</h3>
                <div class="flex items-center space-x-3">
                    {{-- Facebook --}}
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" /></svg>
                    </a>
                    {{-- Twitter --}}
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post['title']) }}" target="_blank" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616v.064c0 2.298 1.634 4.212 3.793 4.649-.55.15-1.141.22-1.75.22-.303 0-.596-.029-.885-.083.626 1.944 2.441 3.323 4.585 3.36-1.64 1.28-3.714 2.04-5.96 2.04-.386 0-.766-.023-1.141-.066 2.133 1.371 4.673 2.174 7.42 2.174 8.898 0 13.778-7.464 13.528-13.844.942-.679 1.758-1.525 2.404-2.494z" /></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection