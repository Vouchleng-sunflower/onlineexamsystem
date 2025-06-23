<?php

use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserConDash;
use App\Http\Controllers\AdminConDash;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/admin', function () {
    return view('Admin.dashforAdmin');
});
Route::get('/user', function () {
    return view('User.dashforUser');
});
// filepath: routes/web.php
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::get('/admin', [LoginController::class, 'isAdmin'])->name('admin');
// Route::get('/user', [LoginController::class, 'isUser'])->name('user');
// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/', function () {
    return view('welcome');
});

