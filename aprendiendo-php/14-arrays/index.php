<?php

/*
  ARRAYS
  Un arrays es una coleccion o un conjunto de datos/valores , bajo un único nombre.
  Para acceder a esos valores podemos usar un indice numérico o alfanumérico.

*/

$peliculas ="Batman";

//Declaracion de array                                              
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');

//Declaracion de array
$cantantes = ['2pac','Drake','Jennifer Lopez'];


var_dump($peliculas[2]);
var_dump($cantantes);

echo $peliculas[0];
echo "<br/>";
echo $cantantes[2];

//Recorrer el array con for

echo "<h1>Listado de peliculas</h1>";

echo "<ul>";
for($i = 0; $i < count($peliculas); $i++){
        echo "<li>".$peliculas[$i]."</li>";
}

echo "</ul>";

//Recorrer con Foreach..recorreme el array de cantantes y por cada iteracion creame una variable llamda cantante con el contenido de ese indice.

echo "<h1>Listado de cantantes</h1>";
echo "<ul>";


foreach ($cantantes as $cantante) {
    # code...
    echo "<li>".$cantante."</li>";
}

echo "</ul>";


//Array asociativo
$personas = array(
    'nombre' => 'Manuel Fernando',
    'apellidos' => 'Rodriguez',
    'web' => 'no tengo'
);

var_dump($personas);

echo "<hr/>";

//Array multidimensional

$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com',
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ),
    array(
        'nombre' => 'Juan',
        'email' => 'juan@juan.com'
    )
);

echo $contactos[2]['email'];


foreach ($contactos as $key => $contacto) {
    # code...
    var_dump($contacto['nombre']);

}


































?>