<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinasController;
use App\Http\Controllers\EmpleadoController;


Route::get('/', [OficinasController::class, 'inicio'])->name('oficinas.inicio');
Route::get('/oficinas', [OficinasController::class, 'index'])->name('oficinas.index');
Route::get('/oficinas/añadir', [OficinasController::class, 'añadirOficina'])->name('añadirOficina');
Route::post('/oficinas', [OficinasController::class, 'store'])->name('oficinas.store');
Route::get('/oficinas/{nombre}', [OficinasController::class, 'mostrarOficinas'])->name('mostrarOficinas');
Route::get('/oficinas/{oficina}/empleados', [EmpleadoController::class, 'index'])->name('oficinas.empleados.index');
Route::get('/oficinas/{oficina}/empleados/create', [EmpleadoController::class, 'create'])->name('oficinas.empleados.create');
Route::post('/oficinas/{oficina}/empleados', [EmpleadoController::class, 'store'])->name('oficinas.empleados.store');
