<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

// Auth routes
Route::middleware(['auth'])->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('home');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/create', [PostController::class, 'store'])->name('store');
});

Route::get('/{post}', [PostController::class, 'show'])->middleware(['auth', 'can:view,post'])->name('show');

Route::get('/{post}/edit', [PostController::class, 'edit'])->middleware(['auth', 'can:view,post'])->name('edit');

Route::put('/{post}/edit', [PostController::class, 'update'])->middleware(['auth', 'can:view,post'])->name('update');

Route::delete('/{post}', [PostController::class, 'destory'])->middleware(['auth', 'can:view,post'])->name('destory');
