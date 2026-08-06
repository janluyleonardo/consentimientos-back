<?php

use App\Http\Controllers\ConsentimientoController;
use Illuminate\Support\Facades\Route;

Route::get('/consentimientos/telefono/{telefono}', [ConsentimientoController::class, 'showByTelefono']);
Route::get('/consentimientos', [ConsentimientoController::class, 'index']);
Route::post('/consentimientos', [ConsentimientoController::class, 'store']);
