<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Oficinas</title>
</head>
<body>
<h1>Lista de Oficinas</h1>
<ul>
    @foreach($oficinas as $oficina)
        <li><a href="{{ route('mostrarOficinas', $oficina->nombre) }}">{{ $oficina->nombre }}</a></li>
    @endforeach
</ul>
<a href="{{ route('añadirOficina') }}">Añadir Nueva Oficina</a>
</body>
</html>
