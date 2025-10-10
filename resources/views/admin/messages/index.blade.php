@extends('layouts.admin')

@section('title', 'Contact Messages')

@section('content')
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Inbox</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        @forelse ($messages as $message)
            <div class="p-6 border-b border-gray-200 {{ !$message->is_read ? 'bg-blue-50' : '' }}">
                <div class="flex justify-between items-start">
                    <div>
                        {{-- LIGNE MODIFIÉE CI-DESSOUS --}}
                        <div class="font-semibold text-gray-800">{{ $message->name }}</div>
                        <div class="text-sm text-gray-600 mt-1">
                            <span>{{ $message->email }}</span>
                            {{-- AJOUT DU NUMÉRO DE TÉLÉPHONE ICI --}}
                            @if ($message->phone)
                                <span class="text-gray-400 mx-2">|</span>
                                <span>{{ $message->phone }}</span>
                            @endif
                        </div>
                        <div class="text-xs text-gray-500 mt-1">{{ $message->created_at->format('d M Y, H:i') }}</div>
                    </div>
                    <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 text-sm">Delete</button>
                    </form>
                </div>
                <p class="mt-4 text-gray-600">
                    {{ $message->message }}
                </p>
            </div>
        @empty
            <div class="p-6 text-center text-gray-500">
                You have no messages.
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $messages->links() }}
    </div>
@endsection