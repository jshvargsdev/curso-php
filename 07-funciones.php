<?php

//! FUNCIONES EN PHP

declare(strict_types=1); // Habilita el modo estricto para tipos de datos

/* 

Las funciones son bloques de código reutilizables que realizan una tarea específica. En PHP, puedes definir tus propias funciones o utilizar funciones predefinidas. Las funciones pueden aceptar parámetros y devolver valores.

*/

// Definición de una función simple
function saludar(): void
{
    echo "¡Hola, mundo!\n";
}

function saludarConNombre(string $nombre = "Usuario"): void
{
    echo "¡Hola, $nombre!\n"; // Imprime un saludo personalizado
}

// Llamada a la función
saludar(); // Imprime: ¡Hola, mundo!

// Definición de una función con parámetros
function sumar(int $a, int $b): int
{
    return $a + $b; // Devuelve la suma de los dos números
}

// Llamada a la función con argumentos
$resultado = sumar(5, 3);

echo "La suma es: $resultado\n"; // Imprime: La suma es: 8

// Funcióna anónima
$suma = function (int $a, int $b): int {
    return $a + $b; // Devuelve la suma de los dos números
};

/* 

+ Ambito de las funciones:

Las funciones en PHP tienen un ámbito local, lo que significa que las variables definidas dentro de una función no son accesibles fuera de ella. Sin embargo, puedes utilizar la palabra clave global para acceder a variables globales dentro de una función.

*/

$variableGlobal = "Soy una variable global";

function mostrarVariableGlobal(): void
{
    global $variableGlobal; // Accede a la variable global
    echo "Variable global: $variableGlobal\n"; // Imprime: Variable global: Soy una variable global
}
