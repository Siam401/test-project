<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('services', ServiceController::class);
    Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::post('bookings/{booking}/confirm', [BookingController::class, 'confirm'])->name('bookings.confirm');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
