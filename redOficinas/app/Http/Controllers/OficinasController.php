<?php

namespace App\Http\Controllers;

use App\Models\Oficinas;
use Illuminate\Http\Request;

class OficinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

        public function inicio(){
        $oficinas = Oficinas::all();
        return view('inicio', compact('oficinas'));
    }


    public function mostrarOficinas(string $nombre)
    {
        $oficina = Oficinas::where('nombre', $nombre)->firstOrFail();
        return view('mostrarOficina', compact('oficina'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function añadirOficina(Request $request)
    {
        return view('añadirOficina');
    }

        public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|unique',
            'direccion' => 'required|max:255',
        ]);

        // Crear un nuevo coche
        $oficinas = new Oficinas();
        $oficinas->nombre = $request->nombre;
        $oficinas->direccion = $request->direccion;

        // Guardar el coche en la base de datos
        $oficinas->save();

        // Redireccionar a la página de detalles del coche

        return redirect()->route('oficinas.inicio')
            ->with('success', 'Oficina añadida exitosamente.');

    }


    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(Oficinas $oficinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oficinas $oficinas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oficinas $oficinas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oficinas $oficinas)
    {
        //
    }
}
