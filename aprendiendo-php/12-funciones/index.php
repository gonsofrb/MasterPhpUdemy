<?php
/**
 * FUNCIONES:
 * Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto
 * y que pueden reutilizarse solamente invocando a la función tantas veces como queramos.
 *
 * function nombre_de_mi_función($parametro){
 *
 *          //Bloque // CONJUNTO DE INSTRUCCIONES
 * }
 *
 * nombre_de_mi_funcion($mi_parámetro);
 *
 *
 */

//Ejemplo 1

function muestraNombres()
{
    echo "Manuel Fernando <br/>";
    echo "Rodriguez Borrero <br/>";
    echo "Inés Borrero <br/>";
    echo "Cándido Rodríguez <br/>";
    echo "<hr/>";
}

//Invocar funcion
muestraNombres();

//Ejemplo 2

function tabla($numero)
{
    echo "<h3>Tabla del multiplicar del numero : $numero </h3>";
    for ($i = 1; $i <= 10; $i++) {
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion <br/>";

    }
}

if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
    tabla(6);

} else {
    echo "Debe introducir un numero por la url";
}

for ($i = 0; $i <= 10; $i++) {
    tabla($i); //me muestra las tablas del 1 al 10
}

echo "<hr/>";
//Ejemplo 3

function calculadora($numero1, $numero2, $negrita = false)
{
//Conjunto de instrucciones a ejecutar
    $cadena_texto = "";

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $divi = $numero1 / $numero2;

    if ($negrita) {

        $cadena_texto .= "<h1>";

    }

    $cadena_texto .= "Suma: $suma <br/>";
    $cadena_texto .= "Resta: $resta <br/>";
    $cadena_texto .= "Multiplicacion: $multi <br/>";
    $cadena_texto .= "Division: $divi <br/>";

    if ($negrita) {

        $cadena_texto .= "</h1>";

    }

    $cadena_texto .= "<hr/>";
    return $cadena_texto;

}

echo calculadora(3, 5, true);
calculadora(2, 9, false); // Devuelve el resultado pero no se imprime porque no lleva el echo.
echo calculadora(10, 6);

//Ejemplo 4...una funcion dentro de otra

function getNombre($nombre){
$texto = "El nombre es: $nombre";
return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveNombre($nombre, $apellidos)
{
    $texto = getNombre($nombre)
            . "<br/>" .
        getApellidos($apellidos);
        
    return $texto;
}

echo devuelveNombre("Pepe", "Perez");
