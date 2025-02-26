<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//user route

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//end

//admin routes

//localhost:8800/admin
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

//end

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
