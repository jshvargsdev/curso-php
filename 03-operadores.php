<?php

//! OPERADORES EN PHP


/* 

+ Operadores aritméticos:

Operadores aritméticos son utilizados para realizar operaciones matemáticas básicas como suma, resta, multiplicación, división y módulo.

*/

// Suma
$suma = 5 + 3; // Resultado: 8

// Resta
$resta = 10 - 4; // Resultado: 6

// Multiplicación
$multiplicacion = 7 * 2; // Resultado: 14

// División
$division = 20 / 4; // Resultado: 5

// Módulo (resto de la división)
$modulo = 10 % 3; // Resultado: 1

/* 

+ Operadores lógicos y de comparación:

Los operadores de comparación se utilizan para comparar dos valores y devolver un valor booleano (verdadero o falso). Los operadores de comparación más comunes son igual (==), compara que también se igual el tipo (===) diferente (!=), mayor que (>), menor que (<), mayor o igual que (>=) y menor o igual que (<=).

Los operadores lógicos se utilizan para combinar expresiones booleanas y devolver un valor booleano (verdadero o falso). Los operadores lógicos más comunes son AND (&&), OR (||) y NOT (!).

*/

// Comparación
$esIgual = (5 == 5); // Resultado: true

$esIgualTipo = (5 === '5'); // Resultado: false (compara tipo y valor)

$esDiferente = (5 != 3); // Resultado: true

$esMayor = (10 > 5); // Resultado: true

$esMenor = (3 < 7); // Resultado: true

$esMayorIgual = (5 >= 5); // Resultado: true

$esMenorIgual = (4 <= 6); // Resultado: true

// Lógicos

$yLogico = (true && false); // Resultado: false (AND)

$oLogico = (true || false); // Resultado: true (OR)

$noLogico = !true; // Resultado: false (NOT)

/* 

+ Operadores de asignación:

Los operadores de asignación se utilizan para asignar un valor a una variable. El operador de asignación más común es el igual (=). También existen operadores de asignación compuestos como +=, -=, *=, /= y %= que combinan una operación aritmética con la asignación.

*/

// Asignación simple
$variable = 10; // Asigna el valor 10 a la variable

// Asignación compuesta
$variable += 5; // Suma 5 al valor actual de la variable (ahora es 15)
$variable -= 3; // Resta 3 al valor actual de la variable (ahora es 12)
$variable *= 2; // Multiplica el valor actual de la variable por 2 (ahora es 24)
$variable /= 4; // Divide el valor actual de la variable por 4 (ahora es 6)
$variable %= 2; // Calcula el módulo del valor actual de la variable con 2 (ahora es 0)

/* 

+ Operadores de incremento y decremento:

Los operadores de incremento (++) y decremento (--) se utilizan para aumentar o disminuir el valor de una variable en 1. Pueden ser utilizados en forma prefija (antes de la variable) o posfija (después de la variable).

*/

// Incremento
$numero = 5;
$numero++; // Incrementa el valor de la variable en 1 (ahora es 6)
$numero--; // Decrementa el valor de la variable en 1 (ahora es 5)
