<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

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
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::post('/profile/add-xp', [ProfileController::class, 'addXp']);
    Route::post('/profile/daily-login', [ProfileController::class, 'dailyLogin']);
    Route::post('/profile/update-avatar', [ProfileController::class, 'updateAvatar']);
    Route::post('/profile/update-banner', [ProfileController::class, 'updateBanner']);
    Route::get('/profile/reports', [ProfileController::class, 'getReports']);
    
    // Post interactions
    Route::post('/posts/like', [PostController::class, 'like']);
    Route::post('/posts/comment', [PostController::class, 'comment']);
    Route::post('/posts/repost', [PostController::class, 'repost']);
});

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


