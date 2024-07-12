<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/clientes', ClienteController::class);

Route::resource('/proyectos', ProyectoController::class);