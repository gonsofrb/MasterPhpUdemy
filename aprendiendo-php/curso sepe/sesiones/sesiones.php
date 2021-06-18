<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <?php
    /*
        Las sesiones tienen un identificador que se guarda, por defecto, en una cookie que recibe el navegador la primera vez que se crea la sesión y que viaja con cada página a partir de ese momento para identificar esa sesión.
        Para acceder a la información almacenada en la sesion, se utiliza el array superglobal $_SESSION.
    */ 
    session_start(); //Iniciamos sesión.

        if((!isset($_POST["botEnviar"])) && (!isset($_POST["botDesconectar"]))) //El formulario solo se mostrará cuando no se haya pulsado en ninguno de los dos botones
        {
    ?>
    <p>Elija el producto y pulse en Enviar:</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <select size="1" name="Productos">
            <option>Placa MMX-100</option>
            <option>Placa MMX-200</option>
            <option>Teléfono ALSTER</option>
            <option>Teléfono MOVILON</option>
            </select>
            <input type="submit" name="botEnviar" id="botEnviar" value="Enviar">
            <input type="submit" name="botDesconectar" id="botDesconectar" value="Desconectar">
    </form>        
    <?php
    }else{
        if(isset($_POST["botDesconectar"]))
        {

                //Se destruye la información de la sesión, pero no así la cookie que identificada esa sesión, ya que está en la memoria del navegador.
            session_destroy();
            echo "<p>Sesión finalizada</p>";
        }else
        
        {



            
            //Primero comprobamos si ya existe la variable total en el array $_SESSION.En caso negativo, establecemos el valor inicial de cero.
        if(!isset($_SESSION["Total"])){
            $_SESSION["Total"] = 0;
        }
            switch($_POST["Productos"]){
                case "Placa MMX-100":
                    $_SESSION["Total"] = $_SESSION["Total"] + 700;
                    break;
                case "Placa MMX-200":
                    $_SESSION["Total"] = $_SESSION["Total"] + 1400;
                    break;
                case "Teléfono ALSTER":
                    $_SESSION["Total"] = $_SESSION["Total"] + 850;
                    break;
                case "Teléfono MOVILON":
                    $_SESSION["Total"] = $_SESSION["Total"] + 623;
                    break;     
            
            }

        echo "<p>Total a facturar: ". $_SESSION["Total"]. "</p>";
        echo "<a href='" . $_SERVER["PHP_SELF"] . "'>Volver</a>";
        }





    }
    ?>

</body>
</html>