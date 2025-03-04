<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinasController;
use App\Http\Controllers\EmpleadosController;



Route::get('/', [OficinasController::class, 'inicio'])->name('oficinas.inicio');
Route::get('/oficina/{nombre}', [OficinasController::class, 'mostrarOficinas'])->name('mostrarOficinas');
Route::get('//añadirOficina', [OficinasController::class, 'añadirOficina'])->name('añadirOficina');
Route::post('/oficinas', [OficinasController::class, 'store'])->name('oficinas.store');
Route::get('/oficina/{id}', [OficinasController::class, 'mostrarEmpleados'])->name('mostrarEmpleados');
