<?php
/**
 * Ejercicio 4. Crear un script en PHP que tenga 4 variables, una de tipo array, otra de tipo string, otra int y otra booleana y que imprima un mensaje segun el tipo de variable que vea.
 */

$matriz = array("hola mundo", 88);
$titulo = "Master en PHP";
$numero = 44;
$verdadero = true;


if(is_array($matriz)){
    echo "<h1>Hola soy un array</h1>";
}else{
    echo "<h3>No soy un array</h3>";
}

if(is_string($titulo)){
    echo "<h1>$titulo</h1>";
}else{
    echo "<h3>No soy un string</h3>";
}

if(is_integer($numero)){
    echo "<h1>$numero</h1>";
}else{
    echo "<h3>No soy un int</h3>";
}


if(is_bool($verdadero)){
    echo "<h1>Hola soy un boleano verdadero</h1>";
}else{
    echo "<h3>No soy un boleano verdadero</h3>";
}





?>