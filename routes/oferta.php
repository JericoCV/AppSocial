<?php
use App\Http\Controllers\OfertaController;
use Illuminate\Support\Facades\Route;

Route::get('{usertype}/NuevaOferta', [OfertaController::class, 'createoffer'])->name('createoffer');
Route::post('{usertype}/NuevaOferta',[OfertaController::class, 'saveoffer'])->name('saveoffer');

Route::get('{offer}/EditarOferta', [OfertaController::class, 'offeredit'])->name('offeredit');
Route::put('{offer}/EditarOferta',[OfertaController::class, 'offerupdate'])->name('offerupdate');


