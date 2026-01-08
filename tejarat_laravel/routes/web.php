<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\DefenseController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::prefix('exports')->name('exports.')->group(function () {
    Route::get('/', [ExportController::class, 'index'])->name('index');
    Route::get('/about', [ExportController::class, 'about'])->name('about');
    Route::get('/message', [ExportController::class, 'message'])->name('message');
    Route::get('/partner', [ExportController::class, 'partner'])->name('partner');
    Route::get('/profile', [ExportController::class, 'profile'])->name('profile');
    Route::get('/services', [ExportController::class, 'services'])->name('services');
});

Route::prefix('defense')->name('defense.')->group(function () {
    Route::get('/', [DefenseController::class, 'index'])->name('index');
    Route::get('/about', [DefenseController::class, 'about'])->name('about');
    Route::get('/message', [DefenseController::class, 'message'])->name('message');
    Route::get('/partner', [DefenseController::class, 'partner'])->name('partner');
    Route::get('/profile', [DefenseController::class, 'profile'])->name('profile');
    Route::get('/services', [DefenseController::class, 'services'])->name('services');
});

