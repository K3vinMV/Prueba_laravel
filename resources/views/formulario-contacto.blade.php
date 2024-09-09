<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Formulario de contacto</h1>

    <form action="/contacto-recibe" method="POST">
        @csrf
        <label form="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}"><br>
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label form="correo">Correo</label>
        <input type="email" name="correo" value="{{ old('correo') }}"><br>
        @error('correo')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label form="mensaje">Mensaje</label><br>
        <textarea name="mensaje" cols="30" rows="4">{{ old('mensaje') }}</textarea><br>
        <input type="submit" name="Enviar"><br>
        @error('mensaje')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
</body>

</html>