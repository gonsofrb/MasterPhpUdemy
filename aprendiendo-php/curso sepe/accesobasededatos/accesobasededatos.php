




<?php
/**
 * Propiedades y métodos más utilizados de la librería mysquli:
 *  crear la conexión: constructor de la clase mysqli.
 *  ejecutar la consulta: $mysqli->http_build_query
 *  conocer el número de filas del resultado(SELECT):$mysqli_result->num_rows
 *  conocer el número de filas procesadas(INSERT, UPDATE Y DELETE): $mysqli->affected_rows
 *  extraer las filas del resultado: $mysqli_result->fetch_array, $mysqli_result->fetch_assoc; $mysqli_result->fetch_object y $mysqli_result->fetch_row
 *  conocer el valor del último identificador generado automáticamente para un campo auto_increment; $mysqli_insert_id
 *  recuperar información de posible error sobre la última operación efectuado en la sesión: mysqli->errno, mysqli->error
 *  
 * Aquí $mysqli representa un objeto de la clase mysqli(conexion con la base de datos) y $mysqli_result representa un objeto de la  clase mysqli_result(resultado de una consultada de selección).
 */
    require_once("conexion.inc.php");
    //creación objeto mysqli y conexion con bd
    $conexion = new mysqli($servidor, $usuario, $passwd, $basedatos);
    if($conexion->connect_errno){
        echo "Error al establecer la conexión con la base de datos: " .$conexion->connect_errno;
        exit;
    }

    $resultado = $conexion->query("SELECT * FROM clientes");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <title>Acceso base de datos</title>
</head>
<body>
    <?php
    echo "<table>\r\n";
    echo "<tr><th>Identificador</th>\r\n";
    echo "<th>Nombre</th>\r\n";
    echo "<th>Apellidos</th>\r\n";
    echo "<th>Direción</th>\r\n";
    echo "<th>Poblacion</th>\r\n";
    echo "<th>Codigo Postal</th>\r\n";
    echo "<th>Provincia</th>\r\n";
    echo "<th>Email</th>\r\n";
    echo "<th>Password</th>\r\n";
    echo "<th>Teléfono</th>\r\n";
    echo "<th>Fecha Nacimiento</th>\r\n";
    echo "<th>Edad</th></tr>\r\n";

    while($fila = $resultado->fetch_array()){
        echo "<tr>";
        for($columna = 0; $columna <= 11; $columna++){
            echo "<td>$fila[$columna]</td>\r\n";
        }
        echo "</tr>\r\n";
    }
    echo "</table>\r\n";
    $resultado->close();
    $conexion->close();

    ?>
</body>
</html>