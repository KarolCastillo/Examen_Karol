<?php

use Illuminate\Support\Facades\Route;

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
Route:: view('/','auth.login');

route::get("/LISTADO",[\App\Http\Controllers\EmpleadoController::class,'listado']);
route::get("/CREAR",[\App\Http\Controllers\EmpleadoController::class,'crear']);
route::get("/GUARDAR",[\App\Http\Controllers\EmpleadoController::class,'save'])->name("save");
route::get("/EDITAR/{id}",[\App\Http\Controllers\EmpleadoController::class,'modificar'])->name('modificar');
route::get("/edita/{id}",[\App\Http\Controllers\EmpleadoController::class,'edit'])->name('edit');
route::get("/info/{id}",[\App\Http\Controllers\EmpleadoController::class,'show'])->name('show');
route::delete("/delete/{id}",[\App\Http\Controllers\EmpleadoController::class,'delete'])->name('delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
