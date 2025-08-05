<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// login logout routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login ', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// role views
Route::middleware(['auth', 'checkrole:admin'])->get('/admin', function (){
    return view('admin');
});

Route::middleware(['auth', 'checkrole:mentor'])->get('/mentor', function (){
    return view('mentor');
});

Route::middleware(['auth', 'checkrole:peserta'])->get('/peserta', function (){
    return view('peserta');
});


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

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
