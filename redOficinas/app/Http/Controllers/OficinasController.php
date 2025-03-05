<?php

namespace App\Http\Controllers;

use App\Models\Oficinas;
use Illuminate\Http\Request;

class OficinasController extends Controller
{
    public function inicio()
    {
        $oficinas = Oficinas::all();
        return view('inicio', compact('oficinas'));
    }
    public function index()
    {
        $oficinas = Oficinas::all();
        return view('oficinas.index', compact('oficinas'));
    }


    public function mostrarOficinas(string $nombre)
    {
        $oficina = Oficinas::where('nombre', $nombre)->with('empleados')->firstOrFail();
        return view('mostrarOficina', compact('oficina'));
    }

    public function añadirOficina()
    {
        return view('añadirOficina');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'direccion' => 'required|max:255',
        ]);

        $oficina = Oficinas::create($validatedData);

        return redirect()->route('oficinas.inicio')
            ->with('success', 'Oficina añadida exitosamente.');
    }

}
