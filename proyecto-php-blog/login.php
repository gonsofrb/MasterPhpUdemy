<?php
//INICIAR LA SESION Y LA CONEXION A LA BASE DE DATOS
    require_once 'includes/conexion.php';



//RECOGER DATOS DEL FORMULARIO

if(isset($_POST['enviar'])){

         //! borrar sesion de error antigua no funciona correctamente al cargar la página no borra, solo borra cuando inicia sesión
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }

        //Recojo datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

   
        //HACER CONSULTA  PARA COMPROBAR LAS CREDENCIALES DEL USUARIO
    $sql ="SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db,$sql);

   
   
    if($login  && mysqli_num_rows($login) == 1 ){
        
        $usuario = mysqli_fetch_array($login);

        //comprobar la contraseña
       $verify = password_verify($password,$usuario['password']);

       if($verify){

        //UTILIZAR UNA SESION PARA GUARDAR LOS DATOS DEL USUARIO LOGUEADO
        $_SESSION['usuario'] = $usuario;
       }else{
        //SI ALGO FALLA, ENVIAR UNA SESIÓN CON EL FALLO
        $_SESSION['error_login'] = "Login incorrecto";
       }

    }else{
        //mensaje de error
        $_SESSION['error_login'] = "Login incorrecto";
    }


}

    header('Location: index.php');













//REDIRIGIR AL index.php





?>