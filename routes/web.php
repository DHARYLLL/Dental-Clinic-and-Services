<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;
use App\Models\Supply;

Route::prefix('/')->name('patientUI.')->group(function () {
    Route::get('/login', [UiController::class, 'login'])->name('login');
    Route::get('/register', [UiController::class, 'register'])->name('register');
    Route::get('/profile', [UiController::class, 'profile'])->name('profile');
    Route::get('/', [UiController::class, 'welcome'])->name('welcome');
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

Route::get('/staff/service', [ServiceController::class, 'index'])->name('staffUI.service');
Route::post('/staffs/service', [ServiceController::class, 'store'])->name('staffs.service.store');
Route::put('/service/{service}/update', [ServiceController::class, 'update'])->name('service.update');
Route::delete('/service/{service}/destroy', [ServiceController::class, 'destroy'])->name('service.destroy');

// project supplies
Route::prefix('/')->name('staffUI.')->group(function () {
    Route::get('/staff/dashboard', [UiController::class, 'staff_dashboard'])->name('dashboard');
    Route::get('/staff/supply', [UiController::class, 'staff_supply'])->name('supply');
});

Route::get('/staff/supply', [SupplyController::class, 'index'])->name('staffUI.supply');
Route::post('/staffs/supply', [SupplyController::class, 'store'])->name('staffs.supply.store');
Route::put('/supply/{supply}/update', [SupplyController::class, 'update'])->name('supply.update');
Route::delete('/supply/{supply}/destroy', [SupplyController::class, 'destroy'])->name('supply.destroy');

Route::post('/admin/staff', [StaffController::class, 'store'])->name('admin.staff.store');
Route::delete('/staff/{staff}/destroy', [StaffController::class, 'destroy'])->name('admin.staff.destroy');
Route::put('/staff/{staff}/update', [StaffController::class, 'update'])->name('admin.staff.update');


