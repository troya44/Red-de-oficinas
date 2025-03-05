<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Oficinas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmpleadoController extends Controller
{
    public function index(Oficinas $oficina)
    {
        $empleados = $oficina->empleados;
        return view('empleados.index', compact('oficina', 'empleados'));
    }

    public function create(Oficinas $oficina)
    {
        return view('empleados.create', compact('oficina'));
    }

    public function store(Request $request, Oficinas $oficina)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'nullable|string|max:255',
            'rol' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'dni' => [
                'required',
                'string',
                'regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i',
                Rule::unique('empleados', 'dni'),
            ],
            'email' => 'required|email|unique:empleados,email',
        ]);

        $empleado = $oficina->empleados()->create($validated);

        return redirect()->route('oficinas.empleados.index', $oficina)
            ->with('success', 'Empleado añadido exitosamente.');
    }
}
