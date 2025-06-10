<?php

//! FORMULARIOS en PHP

/* 

Los formularios son una parte fundamental de las aplicaciones web, ya que permiten a los usuarios enviar datos al servidor. En PHP, los formularios se manejan principalmente a través de los métodos GET,  POST y REQUEST. Los formularios pueden contener diferentes tipos de campos, como texto, contraseñas, casillas de verificación, botones de radio, listas desplegables, etc.

Los datos enviados a través de un formulario se pueden procesar en el servidor utilizando PHP, lo que permite validar, almacenar o manipular la información según sea necesario.

1. $_GET: 
    - Recoge los datos enviados por el formulario usando el método GET.
    - Los datos se envían en la URL y son visibles.
    - Ejemplo: $_GET['campo']

2. $_POST: 
    - Recoge los datos enviados por el formulario usando el método POST.
    - Los datos no son visibles en la URL y es más seguro para información sensible.
    - Ejemplo: $_POST['campo']

3. $_REQUEST: 
    - Recoge los datos enviados tanto por GET como por POST (y también por COOKIE).
    - Útil si no se sabe qué método se usará, pero puede ser menos seguro.
    - Ejemplo: $_REQUEST['campo']

*/

// Recoge los datos del formulario usando desestructuración de arrays
['nombre' => $nombre, 'edad' => $edad, 'sexo' => $sexo, 'intereses' => $intereses] = $_REQUEST;
$image = $_FILES['imagen'] ?? null;

$patch = $_SERVER['DOCUMENT_ROOT'] . 'assets/img/' . ($image['name'] ?? '');

echo "<h1>Datos del formulario</h1>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Edad: $edad</p>";
echo "<p>Sexo: $sexo</p>";

echo "<p>Intereses:</p>";
foreach ($intereses as $index => $interes) {
    $idx = $index + 1;
    echo "<p>$idx. $interes</p>";
}

if ($image) {
    move_uploaded_file($image['tmp_name'], $patch);
    echo "<p>Imagen subida: <img src='/img/{$image['name']}' alt='Imagen subida' width='200'></p>";
}
