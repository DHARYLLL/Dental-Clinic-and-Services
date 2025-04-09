<?php

use App\Http\Controllers\SupplyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;

Route::prefix('/')->name('patientUI.')->group(function () {
    Route::get('/login', [UiController::class, 'login'])->name('login');
    Route::get('/register', [UiController::class, 'register'])->name('register');
    Route::get('/profile', [UiController::class, 'profile'])->name('profile');
    Route::get('/welcome', [UiController::class, 'welcome'])->name('welcome');
});


Route::prefix('/')->name('adminUI.')->group(function () {
    Route::get('/admin/dashboard', [UiController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/dentist', [UiController::class, 'dentist'])->name('dentist');
    Route::get('/admin/staff', [UiController::class, 'staff'])->name('staff');
    Route::get('/admin/service', [UiController::class, 'service'])->name('service');
    Route::get('/admin/patient', [UiController::class, 'patient'])->name('patient');
    Route::get('/admin/appointment', [UiController::class, 'appointment'])->name('appointment');
    Route::get('/admin/treatment', [UiController::class, 'treatment_record'])->name('treatment_record');
    Route::get('/admin/supply', [UiController::class, 'supply'])->name('supply');
});


// project supplies
Route::get('/supply', [SupplyController::class, 'index'])->name('staffs.supply');

Route::post('/staffs/supply', [SupplyController::class, 'store'])->name('staffs.supply.store');
Route::put('/supply/{supply}/update', [SupplyController::class, 'update'])->name('supply.update');
Route::delete('/supply/{supply}/destroy', [SupplyController::class, 'destroy'])->name('supply.destroy');
