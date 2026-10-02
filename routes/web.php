<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('about');
Route::get('/layanan', [ServiceController::class, 'index'])->name('services.index');
Route::get('/layanan/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/portofolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/portofolio/{portfolio:slug}', [HomeController::class, 'portfolioShow'])->name('portfolio.show');

Route::get('/artikel', [HomeController::class, 'articles'])->name('articles');
Route::get('/artikel/{article:slug}', [HomeController::class, 'articleShow'])->name('articles.show');

Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');

// Fallback redirect for old admin or dashboard links
Route::redirect('/dashboard', '/admin');
Route::redirect('/login', '/admin/login')->name('login');
