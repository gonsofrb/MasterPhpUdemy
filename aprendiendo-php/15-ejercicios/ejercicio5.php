<?php

/*
Ejercicio 5. Crear un array con el contenido de la tabla:
Accion      aventura   deportes
GTA         ASSASINS    FIFA 19
COD         CRASH       PES  19
FUGB         PRINCE OF   MOTO GP 19
            PERSIA

Cada fila debe ir en un fichero separado(includes).



 */


$tabla = array(
    "ACCION" => array("GTA 5", "CALL OF DUTY", "PUGB"),
    "AVENTURA" => array("Assasins Creed", "Crash Bandicoot", "Prince of Persia"),
    "DEPORTES" => array("Fifa 19", "PES 19", "Moto GP 19")
);

//var_dump($tabla);
 $categorias = array_keys($tabla); // para sacar el nombre de los indices y tenerlos guardados.
?>

<table border="1">
    <?php require_once 'ejercicio5/encabezados.php'; ?>
    <?php require_once 'ejercicio5/primera.php'; ?>
    <?php require_once 'ejercicio5/segunda.php'; ?>
    <?php require_once 'ejercicio5/tercera.php'; ?>
</table>