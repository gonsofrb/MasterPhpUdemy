<?php
/**
 * Ejercicio 5: Hacer un programa que muestre todos los numeros entre dos numeros que nos lleguen por la url usando ($_GET).
 */

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {

        for ($i = $numero1; $i <= $numero2; $i++) {
            echo "<h3>$i</h3>";
        }
    } else {
        echo "<p>El numero 1 tiene que ser menor al numero 2</p>";
    }

} else {

    echo "<h3>Introduce dos números por la url</h3>";
}
