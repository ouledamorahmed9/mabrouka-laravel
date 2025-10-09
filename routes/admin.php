<?php

use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController; // <-- ADD THIS
use App\Http\Controllers\Admin\CollaborationController; // <-- ADD THIS
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// === MODIFICATION IS HERE ===
// We are telling the 'blog' resource to use 'blogPost' as its parameter name.
Route::resource('blog', BlogPostController::class)->parameters([
    'blog' => 'blogPost'
]);
// === END OF MODIFICATION ===
Route::resource('sliders', SliderController::class); // <-- ADD THIS

Route::resource('products', ProductController::class);
Route::resource('messages', ContactMessageController::class)->only(['index', 'destroy']);
Route::resource('collaborations', CollaborationController::class); // <-- ADD THIS
