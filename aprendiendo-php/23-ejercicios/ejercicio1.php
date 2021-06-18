<?php

/**
 * Ejercicio 1. Crear una sesión que aumente su valor en 1 o disminuya en 1 en función
 * de si el parámetro GET counter está a uno o a cero. 
 */

 session_start();


 if(!$_SESSION['numero']){
    $_SESSION['numero'] = 0;
 }

 if(isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION['numero']++;
 }

 if(isset($_GET['counter']) && $_GET['counter'] == 0){
    $_SESSION['numero']--;
 }
?>

<h1>El valor de la sesion numero es: <?= $_SESSION['numero']; ?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br/>
<a href="ejercicio1?counter=0">Disminuir el valor</a>
