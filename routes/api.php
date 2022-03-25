<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CineController as APICineController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/funciones", [APICineController::class, 'showFunc']) -> name('api.funciones.showFunc');

Route::get("/peliculas", [APICineController::class, 'showPelis']) -> name('api.peliculas.showPelis');

Route::get("/generos", [APICineController::class, 'showGeneros']) -> name('api.generos.showGeneros');

Route::get("/salas", [APICineController::class, 'showSalas']) -> name('api.salas.showSalas');
