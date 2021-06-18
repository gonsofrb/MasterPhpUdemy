<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios en PHP</title>
</head>

<body>
   <?php
   if (!$_POST)
   {
   ?>

    <form name="form1" method="post" action="index.php">
        <label align="center">Usuario:
        <input name="Usuario" type="text" id="Usuario"/>
        <br/>
        </label>
        <label align="center">E-mail:
        <input name="Email" type="text" id="Email"/>
        <br/>
        </label>
        <label align="center">Password:
        <input name="Password" type="text" id="Password"/>
        <br/>
        </label>

        <input type="Submit" name="Submit" value="Enviar"/>
    </form>

    <?php
   }
   else
   {
     function ValidarEmail()
     {

        global $email;
         if (strpos($email, "@") === FALSE)
            return FALSE;
         else
            return TRUE;   
     }  

     function ValidarPassword()
     {
        global $password;
        if(strlen($password) < 6)
            return FALSE;
        else
            return TRUE;    

     }

     $usuario = $_POST["Usuario"];
     $password = $_POST["Password"];
     $email = $_POST["Email"];

     if(ValidarEmail() && ValidarPassword())
            echo "<h1>Formato correcto</h1>";
     else   
            echo "<h1>Formato incorrecto</h1>";   


   }
    ?>

</body>

</html>