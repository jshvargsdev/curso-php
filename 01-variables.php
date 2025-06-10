<?php

//! VARIABLES Y CONSTANTES EN PHP

/* 

+ ¿Qué son las variables?

Las variables son contenedores que almacenan datos. En PHP, se definen con el símbolo `$` seguido del nombre de la variable. Los nombres de las variables deben comenzar con una letra o un guion bajo, y pueden contener letras, números y guiones bajos.

Las variables son sensibles a mayúsculas y minúsculas, lo que significa que `$variable` y `$Variable` son dos variables diferentes.

*/

// Definición de una variable
$miVariable = "Hola, mundo!";

// Imprimir el valor de la variable
echo $miVariable; // Salida: Hola, mundo!

/* 

+ ¿Qué son las constantes?

Las constantes son similares a las variables, pero su valor no puede cambiar una vez que se ha definido. En PHP, se definen utilizando la función `define()` o la palabra clave `const`. Las constantes son útiles para valores que no deben modificarse durante la ejecución del script, como configuraciones o parámetros.

Las constantes no llevan el símbolo `$` y, por convención, se escriben en mayúsculas y separadas por guiones bajos.

*/

// Definición de una constante
define("MI_CONSTANTE", "Valor constante");

const MI_OTRA_CONSTANTE = "Otra constante";

// Imprimir el valor de la constante
echo MI_CONSTANTE; // Salida: Valor constante
echo MI_OTRA_CONSTANTE; // Salida: Otra constante