<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);
// Route::get('/about', [TestController::class, 'about'])->name('about');

// Route::get('about', ['TestController@about']);