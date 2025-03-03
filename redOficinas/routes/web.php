<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinasController;



Route::get('/', [OficinasController::class, 'inicio'])->name('oficinas.inicio');
Route::get('/oficina/{nombre}', [OficinasController::class, 'mostrarOficinas'])->name('mostrarOficinas');
Route::get('//añadirOficina', [OficinasController::class, 'añadirOficina'])->name('añadirOficina');
Route::post('/oficinas', [OficinasController::class, 'store'])->name('oficinas.store');

