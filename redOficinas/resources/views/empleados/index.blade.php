<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados de {{ $oficina->nombre }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            color: #444;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        a {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .success-message {
            color: green;
            font-weight: bold;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Empleados de {{ $oficina->nombre }}</h1>

    <a href="{{ route('oficinas.empleados.create', $oficina) }}">Añadir Empleado</a>

    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Rol</th>
            <th>Fecha de Nacimiento</th>
            <th>DNI</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->primer_apellido }} {{ $empleado->segundo_apellido }}</td>
                <td>{{ $empleado->rol }}</td>
                <td>{{ $empleado->fecha_nacimiento }}</td>
                <td>{{ $empleado->dni }}</td>
                <td>{{ $empleado->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('mostrarOficinas', $oficina->nombre) }}">Volver a la Oficina</a>
</div>
</body>
</html>
