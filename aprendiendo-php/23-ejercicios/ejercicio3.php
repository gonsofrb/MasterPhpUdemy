<?php

/**
 * Ejercicio 3. Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones.
 * uno para sumar
 * restar
 * dividir
 * multiplicar.
 * Mostrar resultado por pantalla
 */
$resultado = false;
   
    if(isset($_POST['n1']) && isset($_POST['n2'])){

        if(isset($_POST['sumar'])){
            $resultado = "EL resultado es:".($_POST['n1'] + $_POST['n2']);
        }
        if(isset($_POST['restar'])){
            $resultado = "EL resultado es:".($_POST['n1'] - $_POST['n2']);
        }
        if(isset($_POST['multiplicar'])){
            $resultado = "EL resultado es:".($_POST['n1'] * $_POST['n2']);
        }
        if(isset($_POST['dividir'])){
            $resultado = "EL resultado es:".($_POST['n1'] / $_POST['n2']);
        }


     }

    

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Calculadora PHP</title>
 </head>
 <body>
     <h1>Calculadora PHP</h1>
     <form action="" method="POST">
        <label for="n1">Número1</label>
        <input type="number" name="n1"><br/><br/><br/>

        <label for="n2">Número2</label>
        <input type="number" name="n2"><br/><br/><br/>

        <input type="submit" name="sumar" value="Sumar">
        <input type="submit" name="restar" value="Restar">
        <input type="submit" name="multiplicar" value="Multiplicar">
        <input type="submit" name="dividir" value="Dividir">
     </form>

     <?php 

        //Resultado

        if($resultado != false):
            echo "<h2>$resultado</h2>";
        endif;

    ?>

 </body>
 </html>