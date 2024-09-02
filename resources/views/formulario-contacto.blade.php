<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de contacto</h1>

    <form action="/contacto-recibe" method ="POST">
        @csrf 
        <label form="nombre">Nombre</label>
        <input type="text" name="nombre"><br>

        <label form="correo">Correo</label>
        <input type="email" name="correo"><br>

        <label form="mensaje">Mensaje</label><br>
        <textarea name="mensaje" cols="30" rows="4"></textarea><br>
        <input type="submit" name="Enviar"><br>
</body>
</html>