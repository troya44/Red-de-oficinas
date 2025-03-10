<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Oficinas</title>
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

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a {
            display: block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        ul li a:hover {
            background-color: #0056b3;
        }

        .btn-add {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #28a745; /* Color verde */
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-add:hover {
            background-color: #218838; /* Verde oscuro */
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Lista de Oficinas</h1>
    <ul>
        @foreach($oficinas as $oficina)
            <li><a href="{{ route('mostrarOficinas', $oficina->nombre) }}">{{ $oficina->nombre }}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('añadirOficina') }}" class="btn-add">Añadir Nueva Oficina</a>
</div>
</body>
</html>
