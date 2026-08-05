<?php

use App\Http\Controllers\ConsentimientoController;
use Illuminate\Support\Facades\Route;

Route::get('/consentimientos/{cedula}', [ConsentimientoController::class, 'showByCedula']);
Route::post('/consentimientos', [ConsentimientoController::class, 'store']);
