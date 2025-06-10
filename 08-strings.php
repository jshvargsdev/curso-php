<?php

//! STRINGS en PHP

/* 

Las cadenas de texto (strings) son secuencias de caracteres que se utilizan para representar texto en PHP. Pueden contener letras, números, símbolos y espacios en blanco. Las cadenas se pueden definir utilizando comillas simples (' ') o comillas dobles (" ").

Las comillas simples son más rápidas y no interpretan variables ni caracteres especiales, mientras que las comillas dobles permiten la interpolación de variables y el uso de caracteres especiales como \n (nueva línea) y \t (tabulación).

*/

// Definición de cadenas
$cadena1 = 'Hola, mundo'; // Comillas simples
$cadena2 = "Hola, mundo"; // Comillas dobles

// Interpolación de variables
$nombre = 'Juan';
$cadena3 = "Hola, $nombre"; // Interpolación con comillas dobles

//+ Funciones y métodos comunes para trabajar con cadenas

// Longitud de una cadena
$longitud = strlen($cadena1); // Devuelve la longitud de la cadena

// Concatenación de cadenas
$cadena4 = $cadena1 . ' ' . $cadena2; // Usando el operador de concatenación (.)

// Conversión a mayúsculas y minúsculas
$mayusculas = strtoupper($cadena1); // Convierte a mayúsculas

$minusculas = strtolower($cadena2); // Convierte a minúsculas

// Reemplazo de subcadenas
$cadena5 = str_replace('mundo', 'PHP', $cadena1); // Reemplaza 'mundo' por 'PHP'

// Dividir una cadena en un array
$array = explode(', ', $cadena1); // Divide la cadena por la coma y el espacio

// Unir un array en una cadena
$cadena6 = implode(' - ', $array); // Une el array con ' - ' como separador

// Buscar una subcadena
$posicion = strpos($cadena1, 'mundo'); // Devuelve la posición de 'mundo' en la cadena

// Subcadenas
$subcadena = substr($cadena1, 0, 4); // Obtiene los primeros 4 caracteres de la cadena