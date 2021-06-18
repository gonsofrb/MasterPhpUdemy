<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio de sesión</title>
        <meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
    </head>
    <body>

    <style type="text/css">
        .error{
            color: #F00;
        }
        
    </style>

        <?php
            $primeravez = FALSE;
            if(empty($_POST["botEnviar"])){
                $primeravez = TRUE;
                $_POST["email"] = "";
                $_POST["password"] = "";
            }


            /*
            funcion para escapar datos de un input addslashes() limpia las ""
            función para espacar datos da un input stripslashes() elimina las /
            */ 
        ?>




        <div id="Layer1">
            <p><font color="#0000FF" size="+1" face="Comic Sans MS">tiendaDetalles.com</font><strong></strong> </p> 
        </div>

        <div id="Layer2">
            <p><strong>DETALLES DE SU CUENTA</strong></p>
            <p>Para acceder a su cuenta de usuario, debe identificarse.</p>
            <form name="form1" method="post" action="">
            <table width="100%" border="1" cellpadding="4">
                <tr>
                    <td width="25%">Email :</td>
                    <td width="75%"><input name="email" type="text" id="email"
                    value="<?php echo $_POST["email"];?>"> </td>
                </tr>
                <?php
                    if(!$primeravez)
                        if(empty($_POST["email"]))
                            echo "<tr><td></td><td class='error'>Tiene que introducir su email!</td></tr>";
                        elseif(!preg_match("/^[a-zA-z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/i",$_POST["email"]))    
                        echo "<tr><td></td><td class='error'>¡Email no válido!</td></tr>";

                    {
                        
                    }
                ?>
                <tr>
                <td>Password :</td>
                <td><input name="password" type="text" id="password" value="<?php echo $_POST["password"]; ?>"></td>
                <?php
                    if(empty($_POST["password"]) && (!$primeravez)){
                        echo "<tr><td></td><td class='error'>Tiene que introducir su contraseña!</td></tr>";
                    }
                ?>
                </tr>
            </table>
            <p alingn="center">
                <input name="botEnviar" type="submit" id="botEnviar" value="Enviar"></p>
             </form>       
        </div>
    </body>
</html>
