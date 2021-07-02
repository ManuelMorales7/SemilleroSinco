<?php

class LoginModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function login($usuario, $password){
        
        $query = "SELECT usuario.id_usuario, usuario.password from usuario where id_usuario = '.$usuario.' and password '.$password.'";
        $consulta = $this->db->connect($query);

        $row = mysqli_fetch_array($consulta);

        if($row['id_usuario'] != NULL){

            session_start();
            echo "admin/index.php";
        }
        
        
        




        echo "Registro insertado";
        
    }

    

    

}

?>