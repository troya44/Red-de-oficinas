<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados Oficina</title>
</head>
<body>
<h1>Empleados de la Oficina</h1>
<ul>
    <li>Nombre de la oficina: {{ $oficina->nombre }}</li>
</ul>
<a href="{{ route('oficinas.inicio') }}">Volver</a>
</body>
</html>
