<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Oficinas;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inicio(){
        $empleados = Empleados::all();
        return view('inicio', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function mostrarEmpleados($id)
    {
        $empleados = Empleados::where('id', $id)->firstOrFail();
        return view('mostrarEmpleado', compact('empleados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleados $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleados $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleados $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleados $empleado)
    {
        //
    }
}
