<?php

use App\Http\Controllers\calcularController;
use Illuminate\Support\Facades\Route;

Route::get('/', [calcularController::class, 'todosDuenios']);
Route::get('/propiedades', [calcularController::class, 'todasPropiedades']);

Route::get('/calcular/{piso?}/{area}',
            [calcularController::class, 'calcularValor']);

