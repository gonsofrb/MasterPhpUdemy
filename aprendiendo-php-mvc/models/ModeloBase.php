<?php
 require_once 'config/database.php';

class ModeloBase{

    public $db;

    public function __construct(){
        $this->db = dataBase::conectar();
    }


    public function mostrarTodos($tabla){

      $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
      return $query;
        

    }




}



?>