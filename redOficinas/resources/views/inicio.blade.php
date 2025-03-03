<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
Aquí se verán todas las oficinas que hay y se podrán añadir
<h1>Listado de Oficinas</h1>
<a href="{{ route('añadirOficina') }}">Añadir Oficina</a>
<ul>
    @foreach($oficinas as $oficinas)
        <li><a href="{{ route('mostrarOficinas', $oficinas->nombre) }}">{{ $oficinas->nombre }} - {{ $oficinas->direccion }}</a></li>
    @endforeach
</ul>
</body>
</html>
