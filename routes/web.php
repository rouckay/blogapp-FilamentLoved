<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home');

Route::get('/about-us', [App\Http\Controllers\siteController::class, 'about'])->name('about-us');
Route::get('/category/{category:slug}', [App\Http\Controllers\PostController::class, 'byCategory'])->name('by-category');

Route::get('/{post:slug}', [App\Http\Controllers\PostController::class, 'show'])->name('view');

