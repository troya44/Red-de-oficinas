<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir Oficina</title>
</head>
<h1>Añadir Oficina</h1>
<form action="{{ route('oficinas.store') }}" method="POST">
    @csrf
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="direccion">direccion:</label>
        <input type="text" id="direccion" name="direccion" required>
    </div>
    <button type="submit">Añadir Oficina</button>
</form>
</body>
</html>
