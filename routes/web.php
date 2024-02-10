<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\InicioController;

Route::get('/libro', [Inicio::class, 'leer']);
Route::get('/parte2', [Inicio::class, 'pruebaAjax']);
Route::get('/parte3', [Inicio::class, 'pruebaAjax2']);
Route::get('/final', [Inicio::class, 'final_1']);
Route::get('/final2', [Inicio::class, 'final_2']);
Route::get('/final3', [Inicio::class, 'final_3']);
Route::get('/final4', [Inicio::class, 'final_4']);
//Route::get('/tienda', [InicioController::class, 'bienvenida']);
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
// Route::get('/inicio', [Controller::class, 'ofertas']);
// Route::get('/productos', [Inicio::class, 'ofertas']);
 Route::get('/', function () {
      return view('vistaOfertas');
 });
