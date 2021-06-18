<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Imprimir por pantalla -  Master en PHP</title>
</head>

<body>
    <h1>Master en PHP <?php echo "Manuel Fernando"; ?></h1>

    <?="Bienvenido al curso mas grande de PHP"
          // Es como hacer un echo con estas llaves. ?> 

    <?php
        echo '<h3>Listado de videojuegos</h3>';

        /*Esta es una
         lita de videojuegos
          modernos.*/

        echo '<ul>'
        . '<li>GTA</li>'
        . '<li>FIFA</li>'
        . '<li>Mario Bros</li>'
        . '</ul>';
        
        

        //Parrafo explicativo
        echo '<p>Esta es toda' .' - '. 'lista de juegos</p>';

       
        ?>

</body>

</html>

