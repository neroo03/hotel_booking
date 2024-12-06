<?php

use App\Http\Controllers\RoomController;

Route::get('/', [RoomController::class, 'index']);
Route::get('/rooms/{id}', [RoomController::class, 'show']);
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
