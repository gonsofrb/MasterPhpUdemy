<?php
//Iniciar la sesion
if(!isset($_SESSION)){
    session_start();
}

//conexion
$servidor ="localhost";
$usuario="root";
$password= "";
$basededatos="blog";
$db = mysqli_connect($servidor,$usuario,$password,$basededatos);


mysqli_query($db,"SET NAMES 'utf8'");

