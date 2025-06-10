<?php

//! ARRAYS en PHP

/* 

Los arrays son estructuras de datos que permiten almacenar múltiples valores en una sola variable. En PHP, los arrays pueden ser indexados (numéricos) o asociativos (clave-valor). Los arrays son muy útiles para organizar y manipular colecciones de datos.

Los arrays indexados utilizan índices numéricos para acceder a sus elementos, mientras que los arrays asociativos utilizan claves personalizadas.

Los arrays pueden contener cualquier tipo de dato, incluyendo otros arrays, lo que permite crear estructuras de datos más complejas como matrices multidimensionales.

*/

// Definición de un array indexado
$arrayNumerico = [1, 2, 3, 4, 5]; // Array indexado numérico

// Definición de un array asociativo
$arrayAsociativo = [
    'nombre' => 'Juan',
    'edad' => 30,
    'ciudad' => 'Madrid'
]; // Array asociativo

// Acceso a elementos de un array
$primerElemento = $arrayNumerico[0]; // Accede al primer elemento del array indexado

$nombre = $arrayAsociativo['nombre']; // Accede al valor asociado a la clave 'nombre'

//+ Funciones y métodos comunes para trabajar con arrays:

// Longitud de un array
$longitudNumerico = count($arrayNumerico); // Devuelve la cantidad de elementos en el array indexado
$longitudAsociativo = count($arrayAsociativo); // Devuelve la cantidad de elementos en el array asociativo

// Agregar un elemento al final de un array
array_push($arrayNumerico, 6); // Agrega el número 6 al final del array indexado
$arrayAsociativo['pais'] = 'España'; // Agrega una nueva clave-valor al array asociativo

// Eliminar un elemento de un array
array_pop($arrayNumerico); // Elimina el último elemento del array indexado
unset($arrayAsociativo['edad']); // Elimina la clave 'edad' del array asociativo

// Buscar un elemento en un array
$existe = in_array(3, $arrayNumerico); // Devuelve true si el número 3 está en el array indexado
$clave = array_search('Juan', $arrayAsociativo); // Devuelve la clave asociada al valor 'Juan' en el array asociativo

// Ordenar un array
sort($arrayNumerico); // Ordena el array indexado en orden ascendente
asort($arrayAsociativo); // Ordena el array asociativo por sus valores
