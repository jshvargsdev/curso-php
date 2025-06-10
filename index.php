<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-formularios</title>
</head>

<body>
    <h1>Formulario de Registro</h1>
    <form action="/10-formularios.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        </label>
        <br>
        <label for="edad">Edad:
            <input type="number" name="edad" id="edad" placeholder="Edad">
        </label>
        <br>
        <label for="masculino">Masculino:
            <input type="radio" name="sexo" id="masculino" value="masculino">
        </label>
        <label for="femenino">Femenino:
            <input type="radio" name="sexo" id="femenino" value="femenino">
        </label>
        <br>
        <label>Intereses:</label><br>
        <label for="deporte">
            <input type="checkbox" name="intereses[]" id="deporte" value="deporte"> Deporte
        </label>
        <label for="musica">
            <input type="checkbox" name="intereses[]" id="musica" value="musica"> Música
        </label>
        <label for="lectura">
            <input type="checkbox" name="intereses[]" id="lectura" value="lectura"> Lectura
        </label>
        <br>
        <label for="">
            Imagen:
            <input type="file" name="imagen" id="imagen">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>