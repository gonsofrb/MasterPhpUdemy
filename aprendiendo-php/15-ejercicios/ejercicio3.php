<?php

/**
 * Ejercicio 3. Programa que compruebe si una variable está vacia y si está vacia rellenarla con texto en minúsculas y mostrarlo en mayúsculas y negrita.
 */

$texto = "";

if(empty($texto)){

    $texto = "hola soy el relleno de texto";
    $textoMayus =strtoupper($texto);
    echo "<strong>$textoMayus</strong>";

}else{
    echo "la variable tiene este contenido dentro: ".$texto;
}






































?>