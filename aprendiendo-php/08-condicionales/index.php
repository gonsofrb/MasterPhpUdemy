<?php

/*
//CONDICONAL IF
IF:
if(condicion){
instrucciones
}else{
otras instrucciones
}

//OPERADORES DE COMPARACIÓN

==   igual
===  identico
!=   diferente
<>   diferente
!==  no identico
<    menor que
>    maryor que
<=   menor o igual que
>=   mayor  o igual que

//OPERADORES LOGICOS
&& AND  Y
|| OR O
!  NOT NO
and,or
 */

//Ejemplo1
$color = "verde";

if ($color == "rojo") {
    echo "El color es rojo";
} else {
    echo "El color NO es rojo";
}
echo "<br/>";

//Ejemplo2
$year = 2021;

if ($year > 2020) {
    echo "Es un año posterior a 2020";
} else {
    echo "Es un año anterior a 2020";
}

//Ejemplo3
$nombre = "David";
$ciudad = "Barcelona";
$continente = "Asia";
$edad = 40;
$edad_mayoria = 18;

if ($edad >= $edad_mayoria) {
    echo "<h1>$nombre es mayor de edad</h1>";
    if ($continente == "Europa") {
        echo "<h2>Y es de $ciudad</h2>";
    } else {
        echo "No es Europeo";
    }

} else {
    echo "<h2>$nombre no es mayor de edad</h2>";
}
echo "<hr>";

//Ejemplo4
$dia = 7;

/*
if($dia == 1){
echo "Es lunes";
}else{
if($dia == 2){
echo "Es martes";
}else{
if($dia == 3){
echo "Es miércoles";
}else{
if($dia == 4){
echo "Es jueves";
}else{
if($dia == 5){
echo "Es viernes";
}else{
echo "Es fin de semana";
}
}
}
}
}
 */
//elseif
if ($dia == 1) {
    echo "Lunes";
} elseif ($dia == 2) {
    echo "Martes";
} elseif ($dia == 3) {
    echo "Miercoles";
} elseif ($dia == 4) {
    echo "Jueves";
} elseif ($dia == 5) {
    echo "Viernes";
} else {
    echo "Es fin de semana";

}
echo "<hr>";

//Switch
switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es fin de semana";

}

echo "<hr>";

//Ejemplo 5
//operadores lógicos
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 66;
if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {

    echo "Está en edad de trabajar";
} else {

    echo "No puede trabajar";
}

echo "<hr>";
$pais = "Francia";

if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo "En este pais se habla español";
} else {
    echo "No se habla español";
}

echo "<hr>";


//GOTO
goto marca;

echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
echo "<h1>Me he saltado 4 echos</h1>";
