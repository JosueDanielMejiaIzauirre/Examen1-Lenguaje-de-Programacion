<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;
use App\Http\Controllers\contactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/directorio', [directorioController::class, 'index'])->name('directorio.inicio');

Route::get('/directorio/crear', [directorioController::class, 'create'])->name('directorio.crear');
Route::post('/directorio/guardar', [directorioController::class, 'store'])->name('directorio.store');


Route::get('/directorio/buscar/{correo}', [directorioController::class, 'buscar'])->name('directorio.buscar');

Route::get('/directorio/ver', [directorioController::class, 'ver'])->name('directorio.ver');

Route::get('/directorio/eliminar', [directorioController::class, 'eliminar'])->name('directorio.eliminar');

Route::get('/directorio/agregarcontacto', [contactoController::class, 'agregar'])->name('directorio.agregar');
