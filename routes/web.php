<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OfertanteController;
use App\Http\Controllers\SolicitanteController;
use App\Http\Controllers\CalificacionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Users.login');
})->name('/');
Route::get('registrar',[UsersController::class,'createuser'])->name('createuser');
Route::post('registrar',[UsersController::class,'newuser'])->name('saveuser');
Route::get('registrar/{users}/ofertante',[OfertanteController::class,'createbidder'])->name('createbidder');
Route::get('registrar/{users}/solicitante',[SolicitanteController::class,'createapplicant'])->name('createapplicant');
Route::post('registrar/{users}/solicitante',[SolicitanteController::class,'newapplicant'])->name('newapplicant');
Route::post('registrar/{users}/ofertante',[OfertanteController::class,'newbidder'])->name('newbidder');
Route::delete('usuario/{usuario}',[UsersController::class,'destroyuser'])->name('deleteuser');
Route::post('validate',[UsersController::class,'validateuser'])->name('validatesession');
Route::get('{users}/home',[UsersController::class,'home'])->name('home');
Route::get('{users}/profile',[UsersController::class,'profile'])->name('profile');

require ('oferta.php');

Route::post('{users}/profile',[CalificacionController::class, 'newrating'])->name('rating');
//Route::get('{users}/profile',[CalificacionController::class, "mostrarrating"])->name('profile');

Route::get('{users}/profile/vercomentario',[UsersController::class, 'verrating'])->name('vercali');

