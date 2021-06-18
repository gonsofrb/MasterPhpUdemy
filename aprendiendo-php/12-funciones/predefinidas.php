<?php


//Debuggear
$nombre = "Manuel Fernando";
 var_dump($nombre);


//Fechas
echo date('d-m-Y');
echo "<br/>";

//Fecha en formato UNIT
echo time();
echo "<br/>";

//Matematicas
echo "Raiz cuadrada de 10: ".sqrt(10);
echo "<br/>";

//Numero aleatorio
echo "Numero aleatorio entre 10 y 40: ".rand(10, 40);
echo "<br/>";

//Numero PI
echo "Número pi ".pi();
echo "<br/>";


//Redondear
echo "Redondear: ".round(7.89234, 2);
echo "<br/>";

//Más funciones generales
 echo gettype($nombre); // nos dice el tipo que es una variable
 echo "<br/>";



//Detectar el tipo de variable
 if(is_string($nombre)){
    echo "Esa variable es un string";
 }

echo "<br/>";

if(!is_float($nombre)){
    echo "La variables nombre no es un numero con decimales";
}
echo "<br/>";



//Para averiguar si exite una variable dentro de nuestro programa

if(isset($nombre)){
    echo "La variables existe";
}else{
    echo "La variable no existe";
}
echo "<br/>";


//Limpiar el contenido de una variable, los espacios por delante y por detrás.

$frase = "    tiene espacio   ";
var_dump(trim($frase));
echo "<br/>";

//Eliminar variables / indices
$year = 2022;
unset($year);


//Comprobar si una variable esta vacia, no existe o su contenido es 0.
$texto = "";
if(empty($texto)){

    echo "La variable texto está vacia";
}else{
    echo "La variable texto TIENE CONTENIDO";
}
echo "<br/>";


//Contar caracteres de un string

$cadena = "12345";
echo strlen($cadena);
echo "<br/>";



//Encontrar caracter
$frase = "La vida es bella";

echo strpos($frase, "vida");
echo "<br/>";


//Reemplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);

echo $frase;
echo "<br/>";

//Convertir a mayúsculas o minúsculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);



















?>