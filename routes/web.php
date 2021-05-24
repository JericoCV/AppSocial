<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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
Route::get('registrar/ofertante',[UsersController::class,'createbidder'])->name('createbidder');
Route::get('registrar/solicitante',[UsersController::class,'createapplicant'])->name('createapplicant');
Route::get('usuario/{usuario}/edit',[UsersController::class,'edituser'])->name('edituser');
Route::put('usuario/{usuario}',[UsersController::class,'updateuser'])->name('updateuser');
Route::delete('usuario/{usuario}',[UsersController::class,'destroyuser'])->name('deleteuser');
Route::post('validate',[UsersController::class,'validateuser'])->name('validatesession');
Route::get('{users}/home',[UsersController::class,'home'])->name('home');
