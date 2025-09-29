<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

// Home / Dashboard (hanya untuk user login)
Route::get('/', function () {
    return view('home');
})->name('home')->middleware('auth');

// Login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [UserController::class, 'loginAuth'])->name('login.auth');

// Signup
Route::get('/sign-up', function () {
    return view('signup');
})->name('sign_up');
Route::post('/signup', [UserController::class, 'register'])->name('signup.send_data');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');
