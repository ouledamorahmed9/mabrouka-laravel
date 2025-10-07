@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Products Card -->
        <a href="{{ route('admin.products.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
            <div class="flex items-center">
                <div class="bg-blue-500 text-white rounded-full p-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <div class="ml-4">
                    <p class="text-gray-500">Total Products</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $productCount }}</p>
                </div>
            </div>
        </a>
        
        <!-- Blog Posts Card -->
         <a href="{{ route('admin.blog.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
            <div class="flex items-center">
                <div class="bg-green-500 text-white rounded-full p-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <div class="ml-4">
                    <p class="text-gray-500">Total Blog Posts</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $blogPostCount }}</p>
                </div>
            </div>
        </a>
        
        <!-- Unread Messages Card -->
        <a href="{{ route('admin.messages.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
            <div class="flex items-center">
                <div class="bg-red-500 text-white rounded-full p-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div class="ml-4">
                    <p class="text-gray-500">Unread Messages</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $unreadMessages }}</p>
                </div>
            </div>
        </a>
    </div>
@endsection

