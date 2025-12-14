<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HallOfShameController;


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

// Route::get('/profile', function () {
//     return view('profile');
// })->name('profile');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
//     Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
// });

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/regis', function () {
    return view('regis');
})->name('regis');

Route::post('/regis', [RegisController::class, 'regis'])->name('regis.submit');

// routes/web.php
// Route::middleware('auth')->group(function () {
//     // Profile routes
//     // Route::post('/profile/add-xp', [ProfileController::class, 'addXp']);
//     // Route::post('/profile/daily-login', [ProfileController::class, 'dailyLogin']);
//     // Route::post('/profile/update-avatar', [ProfileController::class, 'updateAvatar']);
//     // Route::post('/profile/update-banner', [ProfileController::class, 'updateBanner']);
//     // Route::get('/profile/reports', [ProfileController::class, 'getReports']);

    
// });

Route::get('/', [PostController::class, 'index'])->name('beranda');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');


Route::middleware('auth')->group(function () {
    Route::get('/feedback', function () {
        return view('feedback'); // Atau view kamu
    })->name('feedback');
    
    Route::post('/feedback', [FeedbackController::class, 'store']);
    Route::get('/feedback/recent', [FeedbackController::class, 'getRecent']);
    Route::get('/feedback/stats', [FeedbackController::class, 'getStats']);
    Route::get('/feedback/my-feedbacks', [FeedbackController::class, 'getUserFeedbacks']);
});


Route::post('/reports', [ReportController::class, 'store'])->name('reports.store')->middleware('auth');

Route::get('/hall-of-shame', [HallOfShameController::class, 'index'])->name('hall-of-shame');
Route::get('/hall-of-shame/posts/{id}', [HallOfShameController::class, 'show'])->name('hall-of-shame.show');
Route::post('/posts/{post}/like', [HallOfShameController::class, 'toggleLike'])->name('posts.like')->middleware('auth');
Route::post('/posts/{post}/komentar', [HallOfShameController::class, 'storekomentar'])->name('posts.komentar')->middleware('auth');
Route::get('/posts/{post}/komentars', [HallOfShameController::class, 'getkomentars'])->name('posts.komentars');

Route::get('/search', [HallOfShameController::class, 'search'])->name('search');

// Route untuk detail post
Route::get('/hall-of-shame/posts/{id}', [HallOfShameController::class, 'showPost'])->name('posts.detail');

Route::middleware('auth')->group(function() {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/daily-login', [ProfileController::class, 'dailyLogin']);
    Route::get('/profile/check-daily-login', [ProfileController::class, 'checkDailyLogin']);
    Route::post('/profile/update-avatar', [ProfileController::class, 'updateAvatar']);
    Route::post('/profile/update-banner', [ProfileController::class, 'updateBanner']);
    Route::post('/profile/update', [ProfileController::class, 'update']);
    Route::post('/profile/add-xp', [ProfileController::class, 'addXp']);
    Route::get('/profile/reports', [ProfileController::class, 'getReports']);
});