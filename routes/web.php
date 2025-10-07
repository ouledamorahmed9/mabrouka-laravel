<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public Website Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/nos-robes', [PageController::class, 'products'])->name('products');
Route::get('/nos-robes/{slug}', [PageController::class, 'productDetail'])->name('product.detail');
Route::get('/a-propos', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogDetail'])->name('blog.detail');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin & Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// === MODIFICATION IS HERE ===
// We are now explicitly disabling the registration routes.
require __DIR__.'/auth.php';

