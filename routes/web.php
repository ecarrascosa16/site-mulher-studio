<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceScheduleController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

// Declarando middleware admin
Route::middlewareGroup('admin', [AdminMiddleware::class]);

// Página inicial
Route::get('/', function () {
    return view('home');
})->name('home');

// Grupo de rotas para admin
Route::middleware(['auth', 'admin'])->group(function () {
    // service
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service', [ServiceController::class, 'store'])->name('service.store');
    // service schedule
    Route::get('/admin/service-schedules', [ServiceScheduleController::class, 'index'])->name('admin.service-schedules.index');
    Route::post('/admin/service-schedules', [ServiceScheduleController::class, 'store'])->name('admin.service-schedules.store');
    Route::delete('/admin/service-schedules/{id}', [ServiceScheduleController::class, 'destroy'])->name('admin.service-schedules.destroy');
});


// Rotas públicas para visualização de serviços
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service.show');

// Rota AJAX (GET) para buscar horários disponíveis
Route::get('/services/{id}/available-times', [AppointmentController::class, 'getAvailableTimes'])
    ->name('appointments.available-times');

// Rota para salvar agendamento (POST) — protegida com auth
Route::middleware('auth')->post('/appointments', [AppointmentController::class, 'store'])
    ->name('appointments.store');

require __DIR__.'/auth.php';
