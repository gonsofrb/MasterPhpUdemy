<?php
/**
 * Variables locales:son las que se declaran dentro de una función y no pueden ser usadas fuera de la función, solo están disponibles dentro a no ser que hagamos un return.
 * 
 * 
 * Variables globales: son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones
 */
//Variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres ";

echo $frase;



function holaMundo(){

    global $frase; //En php hay que declararla con global para poder acceder aun siendo una variable global.
    echo "<h1>$frase</h1>";

$year = 2021;//variable local..para poder utilizar hay que hacer un return de $year.
echo "<h2>$year</h2>";

return $year;
}


 echo holaMundo();


//echo $year;




//Funciones variables

function buenosDias(){
    return "<h1>Hola ! Buenos dias</h1>";
}

function buenasTardes(){
    return "<h1>Hey!! Que tal ha ido la comida?</h1>";
}

function buenasNoches(){
    return "<h1>¿te vas a dormir ya?</h1>";
}

$horario = "buenasNoches";

 echo $horario();
























?>


