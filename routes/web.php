<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// login logout routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login ', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// role views
// Route::middleware(['auth', 'checkrole:admin'])->get('/admin', function (){
//     return view('admin');
// });

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

Route::get('/', function () {
    return view('landing-page');
})->name('landing-page');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/tables', function () {
    return view('tables');
})->name('tables');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');
