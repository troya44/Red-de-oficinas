<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados Oficina</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f9f9f9;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 3px;
        }
        a {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 3px;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        a:hover {
            background-color: #0056b3;
        }
        .back-link {
            background-color: #6c757d;
        }
        .back-link:hover {
            background-color: #545b62;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 style="text-align: center">{{ $oficina->nombre }}</h1>

    <h2>Empleados:</h2>
    <a href="{{ route('oficinas.empleados.create', $oficina) }}">Añadir Empleado a esta Oficina</a>
    <a href="{{ route('oficinas.empleados.index', $oficina) }}">Ver la lista completa de empleados</a>

    @if($oficina->empleados->count() > 0)
        <ul>
            @foreach($oficina->empleados as $empleado)
                <li>{{ $empleado->nombre }} {{ $empleado->primer_apellido }}</li>
            @endforeach
        </ul>
    @else
        <p>No hay empleados registrados en esta oficina.</p>
    @endif

    <a href="{{ route('oficinas.inicio') }}" class="back-link">Volver</a>
</div>
</body>
</html>
