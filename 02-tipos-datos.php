<?php

//! TIPOS DE DATOS EN PHP

/*

+ ¿Qué son los tipos de datos?

Los tipos de datos son categorías que definen el tipo de valor que una variable puede almacenar. En PHP, existen varios tipos de datos, y es importante entenderlos para manipular correctamente la información en tus programas.

Los tipos de datos en PHP se dividen en dos categorías principales: tipos escalares y tipos compuestos.

+ Tipos escalares
Los tipos escalares son aquellos que representan un solo valor. En PHP, los tipos escalares incluyen:
- Enteros (int): Números enteros, positivos o negativos, sin decimales.
- Flotantes (float): Números con decimales, también conocidos como números de punto flotante.
- Cadenas de texto (string): Secuencias de caracteres, que pueden incluir letras, números y símbolos.
- Booleanos (bool): Valores lógicos que pueden ser `true` (verdadero) o `false` (falso).

+ Tipos compuestos
Los tipos compuestos son aquellos que pueden contener múltiples valores. En PHP, los tipos compuestos incluyen:
- Arreglos (array): Colecciones de valores, que pueden ser de cualquier tipo de dato. Los arreglos pueden ser indexados numéricamente o asociativos (clave-valor).
- Objetos (object): Instancias de clases, que pueden contener propiedades y métodos. Los objetos son una parte fundamental de la programación orientada a objetos en PHP.

*/

// Ejemplos de tipos escalares
$entero = 42; // Entero
$flotante = 3.14; // Flotante
$cadena = "Hola, mundo!"; // Cadena de texto
$booleano = true; // Booleano

// Ejemplos de tipos compuestos
$arreglo = [1, 2, 3, "cuatro"]; // Arreglo indexado
$arregloAsociativo = ["clave1" => "valor1", "clave2" => "valor2"]; // Arreglo asociativo