<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register')->name('register');
});


