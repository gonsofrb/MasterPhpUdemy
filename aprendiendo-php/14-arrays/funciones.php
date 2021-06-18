<?php

$cantantes = ['2pac','Drake','Jennifer Lopez', 'Alfredo'];
$numeros = [1,2,5,8,3,4];

sort($numeros); //Ordena los números
var_dump($numeros);


asort($cantantes); //ordena alfabeticamente 
arsort($cantantes); //ordena alfabeticamente orden inverso
var_dump($cantantes);



//Añadir elementos a un array
$cantantes[] = "Natos";
array_push($cantantes,'Waor');

array_pop($cantantes);//elimina el último elemento
unset($cantantes[2]); // Eliminar un elemento en concreto

//Sacar un elemento aleatorio
 $indice = array_rand($cantantes);
echo $cantantes[$indice];


var_dump($cantantes);



//Dar la vuelta a un array
var_dump (array_reverse($numeros));


//Buscar dentro de un array
$resultado = array_search('Alfredo', $cantantes);
var_dump($resultado);


//Contar numero de elementos
echo count($cantantes);
echo "<br/>";
echo sizeof($cantantes);




?>