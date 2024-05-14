<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/organisations', function () {
    return view('organisations');
})->name('organisations');

Route::get('/donation-history', [DonationController::class, 'showDonationHistory'])->name('donation-history');


Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/logout', function () {
    return view('main');
})->name('logout');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [YourController::class, 'register'])->name('register-submit');
Route::post('/login', [AuthController::class, 'login'])->name('login-submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/donate/submit', [DonationController::class, 'donate'])->name('donate-form');

Route::delete('/donations/{id}', [DonationController::class, 'deleteDonation'])->name('delete-donation');
Route::put('/donations/{id}', [DonationController::class, 'updateDonation'])->name('update-donation');

Route::get('/users', [YourController::class, 'showUsers'])->name('users');