<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\OfertanteController;
use App\Http\Controllers\SolicitanteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BusquedaController;

Route::post('/busqueda',[BusquedaController::class, 'recognize'])->name('search');

