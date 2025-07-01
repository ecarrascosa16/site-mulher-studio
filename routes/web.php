<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::middlewareGroup('admin', [AdminMiddleware::class]);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service', [ServiceController::class, 'store'])->name('service.store');
});

Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

Route::get('/service/{id}', [ServiceController::class, 'show'])->name("service.show");

require __DIR__.'/auth.php';
