<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApuestaController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/apuestas', [ApuestaController::class, 'index'])->name('apuestas.index');
Route::get('/apuestas/mas-jugadores', [ApuestaController::class, 'apuestasMasJugadores']);
Route::get('/apuestas/comparar', [ApuestaController::class, 'compararApuestas']);
Route::get('/apuestas/buscar', [ApuestaController::class, 'buscarPorJuego'])->name('apuestas.buscar');

// Nueva ruta GET para mostrar el formulario de creación de apuestas
Route::get('/apuestas/crear', [ApuestaController::class, 'mostrarFormularioCrear'])->name('apuestas.mostrarCrear');

Route::post('/apuestas/crear', [ApuestaController::class, 'crearApuesta'])->name('apuestas.crear');
