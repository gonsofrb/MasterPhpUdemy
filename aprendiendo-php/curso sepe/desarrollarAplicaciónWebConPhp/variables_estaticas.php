<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Variables estáticas</title>
    </head>
    <body>

        <?php
            function contar(){

                //si ponemos static $cuenta = 1; sigue siendo local, auque recuerda su valor anterior en cada llamada a la función.
                $cuenta = 1;

                if($cuenta == 1){
                    echo "<p>Esta es la primera vez.</p>";

                }else{
                    echo "<p>Esta es la vez número $cuenta.</p>";
                }

                $cuenta++;
            }

            for($i = 1; $i <=5 ; $i++){
                echo contar();
            }



        ?>
    
    </body>
</html>