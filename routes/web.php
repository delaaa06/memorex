<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/upload', function () {
    return view('upload');
})->name('upload');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/support', function () {
    return view('support');
})->name('support');