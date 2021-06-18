<?php

class NotaController{

    public function listar(){
        //Modelo
        require_once 'models/nota.php';

        //Logica  de la accion del controlador
        $nota = new Nota();

        //$nota->setNota("Hola");
        //$nota->setContenido("Hola Mundo php mvc");



        $notas = $nota->mostrarTodos('notas');

        //Vista
        require_once 'views/nota/listar.php';

    }

    public function crear(){
                
            //Modelo
            require_once 'models/nota.php';

            $nota = new Nota();
            $nota->setUsuario_id(1);
            $nota->setTitulo("Nota desde PHP MVC");
            $nota->setDescripcion("Descripcion de mi nota");
            $guardar = $nota->guardar();

                //echo $nota->db->error;
                //die();
            
            header("Location: index.php?controller=nota&action=listar");

    }

    public function borrar(){
        
    }
}