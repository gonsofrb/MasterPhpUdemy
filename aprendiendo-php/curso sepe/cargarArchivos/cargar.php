<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar archivos</title>
</head>
<body>
    <?php
        if(!isset($_POST["botEnviar"]))
        {
    ?>

            <div id="layer2">
                <p><strong>Datos Personales</strong></p>
                <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               
                    
                        <label>Nombre:</label>
                        <input name="nombre"  type="text" id="nombre" ><br/><br/>
                    
                   
                        <label>Apellidos:</label>
                        <input name="apellidos" type="text" id="apellidos" ><br/><br/>
                   
                   
                        <label>Fecha de nacimiento:</label>
                        <input name="fechanacimiento" type="text" id="fechanacimiento"><br/><br/>

                        <label>Teléfono:</label>
                        <input name="telefono" type="number" id="telefono"><br/><br/>
                 
                   
                        Dirección:
                        <textarea name="direccion"  id="direccion"></textarea><br/><br/>

                        <label>Contraseña:</label>
                        <input name="contraseña" type="password" id="contraseña"><br/><br/>
                   
                        <label>Repetir Contraseña:</label>
                        <input name="repContraseña" type="password" id="repContraseña"><br/><br/>
                   
                        
                        <input type="submit" name="botEnviar" id="botEnviar" value="Enviar">
                        <input type="reset" name="botRestablecer" value="Restablecer" id="botRestablecer">
                        
                   
               
                </form> 
            </div>
            <?php
        }
        else
        {               /*La funcion fopen necesita dos parámetros: en el primero
                        indicamos el archivo que queremos abrir y en el segundo el modo con el que lo haremos*/
          $fd = fopen("usuarios/results.txt", "a+");
          $contenido = "";
          //se utilizar el bucle foreach para ir recogiendo la información del formulario que está almacenada en el array $_POST
          foreach($_POST as $valor){
              $contenido .= $valor . ";;";
          }
          //Se añade un salto de línea

          $contenido .= "\r\n";

          //funcion para escribir
          fwrite($fd, $contenido);
          
          //con esta linea ponemos el marcador de posicion del archivo al principio del mismo
          rewind($fd);

          /**
           * Ahora recorremos el archivo (mientras no se llegue al final, para lo que se utiliza la funcion feof), obtenemos línea a línea su contenido (con la funcion fgets),la codificamos con htmlspecialchars para que no contenga código ejecutable y finalmente la imprimimos en la página
           */
          while(!feof($fd)){
            $fline = fgets($fd);
            $fline = htmlspecialchars($fline);
            echo "<p>$fline</p>";
          }


          
          //para cerrar el archivo
          fclose($fd);
          echo "<p>Gracias por registrarse en tiendaDetalle.com</p>";
        }
            ?>

</body>
</html>