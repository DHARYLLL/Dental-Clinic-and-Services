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
    Route::get('/service', [UiController::class, 'service'])->name('service');
    Route::get('/patient', [UiController::class, 'patient'])->name('patient');
    Route::get('/appointment', [UiController::class, 'appointment'])->name('appointment');
    Route::get('/treatment', [UiController::class, 'treatment_record'])->name('treatment_record');
    Route::get('/supply', [UiController::class, 'supply'])->name('supply');
});

