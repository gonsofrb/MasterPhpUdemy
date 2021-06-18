<?php

/**
 * Sesión: Almacenar y persistir datos del usuario mientras que navega en un sitio web hasta que cierra sesión o cierra el navegador.
 */

// Iniciar la sesión
session_start();

//variable local
$variable_nomal = "soy una cadena de texto";

//variable de sesión
$_SESSION['variable_persistente'] = "HOLA SOY UNA SESION ACTIVA";


echo $variable_nomal."<br/>";


echo $_SESSION['variable_persistente'];












?>