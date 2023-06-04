<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::view('/', 'welcome')->name('welcome');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/layanan', 'layanan')->name('layanan');
Route::get('/booking', [BookingController::class, 'booking'])->name('booking');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/payment/{booking}', [BookingController::class, 'payment'])->name('payment');
Route::post('/payment/{booking}', [BookingController::class, 'processPayment'])->name('payment.process');
