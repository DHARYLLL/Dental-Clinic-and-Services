<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;

Route::prefix('/')->name('patientUI.')->group(function () {
    Route::get('/login', [UiController::class, 'login'])->name('login');
    Route::get('/register', [UiController::class, 'register'])->name('register');
    Route::get('/profile', [UiController::class, 'profile'])->name('profile');
    Route::get('/welcome', [UiController::class, 'welcome'])->name('welcome');
});


Route::prefix('/')->name('adminUI.')->group(function () {
    Route::get('/dashboard', [UiController::class, 'dashboard'])->name('dashboard');
    Route::get('/dentist', [UiController::class, 'dentist'])->name('dentist');
    Route::get('/staff', [UiController::class, 'staff'])->name('staff');
});

