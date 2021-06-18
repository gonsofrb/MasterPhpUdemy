<?php

if(isset($_POST)){

     //Conexion a la base de datos.
     require_once 'includes/conexion.php';

    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db,$_POST['titulo']) :  false;
    $descripcion =  isset($_POST['descripcion']) ? mysqli_real_escape_string($db,$_POST['descripcion']) :  false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria']:  false;
   $usuario = $_SESSION['usuario']['id'];
    //Array de errores
    $errores = array();


    //Validar los datos antes de guardarlos en la base de datos
    //Validar campo titulo
    if(empty($titulo)){
      $errores['titulo'] = "El título no es válido";
       
    }
    if(empty($descripcion)){
        $errores['descripcion'] = "La descripcion no es válida";
         
    }

    if(empty($categoria) && !is_numeric($categoria)){
        $errores['categoria'] = "La categoria no es válida";
    }



    if(count($errores) == 0){
       
        $sql = "INSERT INTO entradas VALUES(NULL,$usuario,$categoria,'$titulo','$descripcion',CURDATE());";
        $guardar = mysqli_query($db,$sql);

        header("Location: index.php");
        
        // var_dump("hola1");
        // die();
        // var_dump(mysqli_error());
        // die();
    }else{
        // var_dump("hola2");
        // die();
        $_SESSION['errores_entrada'] = $errores;
        header("Location: crear_entradas.php");
    }

}



