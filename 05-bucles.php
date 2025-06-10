<?php

//! Bucles en PHP

/* 

+ Estructuras de control de bucles:

Los bucles se utilizan para ejecutar un bloque de código varias veces, ya sea un número específico de veces o mientras se cumpla una condición. Los bucles más comunes son for, while,  do-while y el foreach.

*/

//+ Bucle for
for ($i = 0; $i < 5; $i++) {
    echo "Número: $i\n"; // Imprime números del 0 al 4
}

//+ Bucle while
$contador = 0;
while ($contador < 5) {
    echo "Contador: $contador\n"; // Imprime números del 0 al 4
    $contador++;
}

//+ Bucle do-while
$contador = 0;
do {
    echo "Contador do-while: $contador\n"; // Imprime números del 0 al 4
    $contador++;
} while ($contador < 5);

//+ Bucle foreach (para arrays)
$frutas = ["Manzana", "Banana", "Naranja"];
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta\n"; // Imprime cada fruta del array
}
