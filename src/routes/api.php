<?php

use App\Http\Controllers\api\ClienteController;

Route::get('cliente', [ClienteController::class, 'index']);

Route::post('cliente', [ClienteController::class, 'store']);

Route::put('cliente/{id}', [ClienteController::class, 'update']);

Route::delete('cliente/{id}', [ClienteController::class, 'destroy']);

Route::get('cliente/{id}', [ClienteController::class, 'show']);

Route::get('/consulta/final-placa/{numero}', [ClienteController::class, 'showBoard']);