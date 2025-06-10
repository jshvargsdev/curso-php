<?php

//! BREAK Y CONTINUE EN PHP

/* 

+ Estructuras de control break y continue:

Las estructuras de control break y continue se utilizan dentro de los bucles para controlar el flujo de ejecución. La instrucción break se utiliza para salir de un bucle antes de que se complete, mientras que la instrucción continue se utiliza para omitir la iteración actual del bucle y continuar con la siguiente.

*/

//+ Uso de break
for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        break; // Sale del bucle cuando i es igual a 5
    }
    echo "Número: $i\n"; // Imprime números del 0 al 4
}

//+ Uso de continue

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 === 0) {
        continue; // Omite la iteración actual si i es par
    }
    echo "Número impar: $i\n"; // Imprime números impares del 1 al 9
}
