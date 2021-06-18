<?php

class UsuarioController{

    public function mostrarTodos(){
        require_once 'models/usuario.php';

        $usuario = new Usuario;

        $todos_los_usuarios = $usuario->mostrarTodos('usuarios');

        require_once 'views/usuarios/mostrar_todos.php';

    }

    public function crearUsuario(){
        require_once 'views/usuarios/crear.php';

    }




}