<?php
if(empty($_COOKIE["Veces"])){
    //establecemos la cookie con tiempo de caducidad a 7 días
    setcookie("Veces", 1, time() + (3600 * 24 * 7));
}else{
    setcookie("Veces", $_COOKIE["Veces"] + 1, time() + (3600 * 24 * 7));//En el caso de que no sea la primera vez, simplemente incrementamos el valor de la cookie, para lo que volvemos a utilizar la función setcookie.
    $Fecha_anterior = $_COOKIE["Momento"]["Fecha"];
    $Hora_anterior = $_COOKIE["Momento"]["Hora"];
    //La cookie Momento tiene dos subvalores: el valor Fecha y Hora.
}
$fecha = getdate(time());
$dia = $fecha["mday"]. "/" . $fecha["mon"]. "/" . $fecha["year"];
$hora = $fecha["hours"] . ":" . $fecha["minutes"] . $fecha["seconds"];

//Así hemos modificado o creado si es la primera vez , la cookie Momento..estableciendo sus subvalores Fecha Y Hora , a la fecha y hora del servidor.Para eso se han utilizado las funciones getdate y time.
setcookie("Momento[Fecha]", $dia , time() + (3600 * 24 * 7));
setcookie("Momento[Hora]" ,$hora , time() + (3600 * 24 * 7));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>

<?php
if(isset($Fecha_anterior)){
        echo "Usted visitó esta página por última vez el <b>$Fecha_anterior</b> a las <b>$Hora_anterior</b>";

        echo "<br/>Ha visitado esta página un total de: <b>" .$_COOKIE["Veces"] . "</b>veces.";
}else{
    echo "Bienvenido a nuestra página web
    ";
}
    
?>
</body>
</html>