<?php

//! CONDICIONALES EN PHP

/*
+ Estructuras de control condicionales:

Las estructuras de control condicionales se utilizan para ejecutar diferentes bloques de código según si una condición es verdadera o falsa. Las estructuras más comunes son if, else if, else, operador ternario,  el switch y el match.

*/

//+ Condicional if
$edad = 18;
if ($edad >= 18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";
}

//+ Condicional if-else if-else
$nota = 85;

if ($nota >= 90) {
    echo "Excelente";
} elseif ($nota >= 75) {
    echo "Bueno";
} elseif ($nota >= 60) {
    echo "Regular";
} else {
    echo "Insuficiente";
}


//+ Condicional switch
$dia = "Lunes";

switch ($dia) {
    case "Lunes":
        echo "Hoy es lunes.";
        break;
    case "Martes":
        echo "Hoy es martes.";
        break;
    case "Miércoles":
        echo "Hoy es miércoles.";
        break;
    case "Jueves":
        echo "Hoy es jueves.";
        break;
    case "Viernes":
        echo "Hoy es viernes.";
        break;
    default:
        echo "No es un día de la semana válido.";
}

//+ Condicional ternario
$esMayorDeEdad = ($edad >= 18) ? "Eres mayor de edad." : "Eres menor de edad.";


//+ Condicional match (PHP 8.0+)
$color = "rojo";

$mensaje = match ($color) {
    "rojo" => "El color es rojo.",
    "verde" => "El color es verde.",
    "azul" => "El color es azul.",
    default => "Color no reconocido."
};
