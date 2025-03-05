<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio - Listado de Oficinas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #444;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f2f2f2;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .add-office {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .add-office:hover {
            background-color: #218838;
            text-decoration: none;
        }
        .intro {
            text-align: center;
            margin-bottom: 20px;
            font-style: italic;
            color: #666;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Listado de Oficinas</h1>
    <p class="intro">Aquí se verán todas las oficinas que hay y se podrán añadir</p>
    <a href="{{ route('añadirOficina') }}" class="add-office">Añadir Oficina</a>
    <ul>
        @foreach($oficinas as $oficina)
            <li><a href="{{ route('mostrarOficinas', $oficina->nombre) }}">{{ $oficina->nombre }} - {{ $oficina->direccion }}</a></li>
        @endforeach
    </ul>
</div>
</body>
</html>
