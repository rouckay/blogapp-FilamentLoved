<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home');

Route::get('/{post:slug}', [App\Http\Controllers\PostController::class, 'show'])->name('view');
