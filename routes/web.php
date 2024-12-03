<?php

use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;




// Registration routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->middleware('auth')->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::get('/', [AuthController::class, 'home'])->middleware('auth')->name('home');

