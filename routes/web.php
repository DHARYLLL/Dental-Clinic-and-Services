<?php

use App\Http\Controllers\SupplyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// project supplies
Route::get('/supply', [SupplyController::class, 'index'])->name('staffs.supply');

Route::post('/staffs/supply', [SupplyController::class, 'store'])->name('staffs.supply.store');
Route::put('/supply/{supply}/update', [SupplyController::class, 'update'])->name('supply.update');
Route::delete('/supply/{supply}/destroy', [SupplyController::class, 'destroy'])->name('supply.destroy');
