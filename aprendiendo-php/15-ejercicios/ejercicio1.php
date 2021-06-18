<?php

/**
 * Ejercicio 1. Hacer un programa en PHP que tenga una array con 8 numeros enteros
 * y que haga lo siguiente:
 *  Recorrerlo y mostrarlo
 * Ordenador y mostrarlo
 * Mostrar su longitud
 * Buscar algun elemento. (buscar por el parametro que me llegue por la url)

 */

//FUNCIONES
function mostrarArray($numeros){
    $resultado = "";
    foreach ($numeros as $numero) {

        //$resultado = $resultado.$numero."<br/>";
        $resultado.= $numero."<br/>";
    }
    return $resultado;
}

$numeros = array(3, 5, 9, 4, 7, 12, 34, 6);

//Recorrer y mostrar

echo "<h1>Recorrer y mostrar</h1>";
echo mostrarArray($numeros);

//ordenarlo y mostrarlo

echo "<h1>Ordenar y mostrar</h1>";

sort($numeros);
echo mostrarArray($numeros);


//Mostrar su longitud
echo "<h1>Número total de elementos</h1>";

echo count($numeros);

//Buscar algún elemento
$busqueda = 12;
echo "<h1>Buscar en el array el número $busqueda</h1>";

$search = array_search($busqueda, $numeros);

if(!empty($search)){
    echo "<h4>El numero buscado existe en el array, en el indice: $search</h4>";
}else{
    echo "No existe el numero buscado";
}

?>