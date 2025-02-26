<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EstadioController;
use App\Http\Controllers\JugadorasController;
use App\Http\Controllers\PartidosController;



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Bienvenido a la Guía de Equipos de fútbol femenino.";

});
/* Route::get('/equipos', [EquipoController::class, 'index']); */
/* Route::get('/equipos/{id}', [EquipoController::class, 'show']);
 */
Route::get('/',function(){
    return view('welcome');
});
Route::resource('equipos', EquipoController::class);
Route::resource('estadios', EstadioController::class);
Route::resource('jugadoras',JugadorasController::class);
Route::resource('partidos',PartidosController::class);





