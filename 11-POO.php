<?php

//! PROGRAMACIÓN ORIENTADA A OBJETOS

/* 

La Programación Orientada a Objetos (POO) es un paradigma de programación que utiliza "objetos" para representar datos y comportamientos. Los objetos son instancias de clases, que son plantillas que definen las propiedades y métodos que los objetos pueden tener.

Las principales características de la POO son:

1. **Encapsulamiento**: Agrupa datos y métodos que operan sobre esos datos en una sola unidad (clase). Esto permite ocultar la implementación interna y exponer solo lo necesario.

2. **Abstracción**: Permite representar conceptos complejos mediante clases y objetos, simplificando la interacción con el sistema.

3. **Herencia**: Permite crear nuevas clases basadas en clases existentes, heredando sus propiedades y métodos. Esto promueve la reutilización del código.

4. **Polimorfismo**: Permite que diferentes clases puedan ser tratadas como instancias de una clase común, facilitando la flexibilidad y extensibilidad del código.

*/

// Definición de una clase
class Persona
{
    // Propiedades
    public string  $nombre;
    public int $edad;

    // Constructor
    public function __construct(string $nombre,  int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método
    public function saludar()
    {
        return "Hola, mi nombre es {$this->nombre} y tengo {$this->edad} años.";
    }
}

// Creación de un objeto (instancia de la clase)
$persona = new Persona("Juan", 30);

// Uso del método del objeto
echo $persona->saludar(); // Salida: Hola, mi nombre es Juan y tengo 30 años.

// Definición de una clase base
class Animal
{
    public string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function hacerSonido()
    {
        return "El animal hace un sonido.";
    }
}

// Definición de una clase derivada (heredada de Animal)
class Perro extends Animal
{
    public function hacerSonido()
    {
        return "El perro {$this->nombre} ladra.";
    }
}

// Creación de un objeto de la clase derivada
$perro = new Perro("Rex");

// Uso del método del objeto derivado
echo $perro->hacerSonido(); // Salida: El perro Rex ladra.

// Definición de una clase abstracta
abstract class Vehiculo
{
    public string $marca;

    public function __construct(string $marca)
    {
        $this->marca = $marca;
    }

    // Método abstracto
    abstract public function arrancar();
}

// Definición de una clase concreta que hereda de la clase abstracta
class Coche extends Vehiculo
{
    public function arrancar()
    {
        return "El coche {$this->marca} está arrancando.";
    }
}

// Creación de un objeto de la clase concreta
$coche = new Coche("Toyota");

// Uso del método del objeto concreto
echo $coche->arrancar(); // Salida: El coche Toyota está arrancando.