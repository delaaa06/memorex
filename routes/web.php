<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/upload', function () {
    return view('upload');
})->name('upload');

Route::middleware('auth')->group(function() {
    Route::get('/upload', [PostController::class, 'create'])->name('upload');
    Route::post('/upload', [PostController::class, 'store'])->name('upload.store');
});

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');

Route::get('/login', function () {
    return view('login');
})->name('login');