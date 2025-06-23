<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
});
// filepath: routes/web.php
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

