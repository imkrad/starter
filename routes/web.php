<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['2fa','auth','verified'])->group(function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/profile', App\Http\Controllers\ProfileController::class);
    Route::resource('/executive', App\Http\Controllers\ExecutiveController::class);
});

require __DIR__.'/auth.php';
