<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;

Route::get('/login', [UiController::class, 'login'])->name('patientUI.login');
Route::get('/register', [UiController::class, 'register'])->name('patientUI.register');
Route::get('/profile', [UiController::class, 'profile'])->name('patientUI.profile');
Route::get('/welcome', [UiController::class, 'welcome'])->name('patientUI.welcome');

Route::get('/dashboard', [UiController::class, 'dashboard'])->name('adminUI.dashboard');
Route::get('/dentist', [UiController::class, 'dentist'])->name('adminUI.dentist');
Route::get('/staff', [UiController::class, 'staff'])->name('adminUI.staff');

