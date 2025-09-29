<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('home');
})->name('home');


Route::get('/login', function () {
    return view('login');
})->name(name: 'login');

Route::get('/sig-nup', function () {
    return view('signup');
})->name('sign_up');