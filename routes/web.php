<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/user', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user');



Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.submit');



//Route::get('/dashboard', [App\Http\Controllers\Panel\DashboardController::class, 'index'])->name('dashboard')->middleware('auth', 'prevent-back-history');

Route::middleware(['auth', 'prevent-back-history'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Panel\DashboardController::class, 'index'])->name('dashboard');
    //Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
});

