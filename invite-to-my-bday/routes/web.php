<?php

use Illuminate\Support\Facades\Route;
use App\Http\Models\Guest;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/confirm-presence', function () {
    return view('confirm-presence');
});
Route::get('/search-guest', [GuestController::class, 'searchGuest'])->name('search-guest');
Route::post('/confirm-attendance/{guestId}', [GuestController::class, 'confirmAttendance'])->name('confirm-attendance');
Route::post('/denny-attendance/{guestId}', [GuestController::class, 'dennyAttendance'])->name('denny-attendance');
Route::get('/confirm', function () {
    return view('confirm');
});
