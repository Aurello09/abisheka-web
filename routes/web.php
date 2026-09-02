<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('about');
Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');

Route::get('/layanan', [ServiceController::class, 'index'])->name('services.index');
Route::get('/layanan/{service}', [ServiceController::class, 'show'])->name('services.show');
