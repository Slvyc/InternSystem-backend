<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// login logout routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login ', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//permission role peserta
Route::middleware(['auth', 'checkrole:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/tables', function () {
        return view('admin.tables');
    })->name('admin.tables');

    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('admin.profile');
});

//permission role peserta
Route::middleware(['auth', 'checkrole:mentor'])->prefix('mentor')->group(function () {
    Route::get('/dashboard', function () {
        return view('mentor.dashboard');
    })->name('mentor.dashboard');

    Route::get('/tables', function () {
        return view('mentor.tables');
    })->name('mentor.tables');

    Route::get('/profile', function () {
        return view('mentor.profile');
    })->name('mentor.profile');
});

//permission role peserta
Route::middleware(['auth', 'checkrole:peserta'])->prefix('peserta')->group(function () {
    Route::get('/dashboard', function () {
        return view('peserta.dashboard');
    })->name('peserta.dashboard');

    Route::get('/tables', function () {
        return view('peserta.tables');
    })->name('peserta.tables');

    Route::get('/profile', function () {
        return view('peserta.profile');
    })->name('peserta.profile');
});

//route landing page
Route::get('/', function () {
    return view('landing-page');
})->name('landing-page');

