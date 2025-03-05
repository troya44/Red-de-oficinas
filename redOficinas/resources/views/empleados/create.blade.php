<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Empleado - {{ $oficina->nombre }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .error-list {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 4px;
            margin-top: 20px;
        }
        .error-list ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Añadir Empleado a {{ $oficina->nombre }}</h1>
    <form action="{{ route('oficinas.empleados.store', $oficina) }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required value="{{ old('nombre') }}">
        </div>
        <div>
            <label for="primer_apellido">Primer apellido:</label>
            <input type="text" id="primer_apellido" name="primer_apellido" required value="{{ old('primer_apellido') }}">
        </div>
        <div>
            <label for="segundo_apellido">Segundo apellido:</label>
            <input type="text" id="segundo_apellido" name="segundo_apellido" value="{{ old('segundo_apellido') }}">
        </div>
        <div>
            <label for="rol">Rol:</label>
            <input type="text" id="rol" name="rol" value="{{ old('rol') }}">
        </div>
        <div>
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
        </div>
        <div>
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required value="{{ old('dni') }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="{{ old('email') }}">
        </div>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('oficinas.empleados.index', $oficina) }}">Volver a la lista de empleados</a>

    @if ($errors->any())
        <div class="error-list">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>
