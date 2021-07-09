<?php

class conexion{

    private $conexion;
    private $server = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $db = "Temario";
    


  
    public function __construct(){
        $this->conexion = new mysqli($this->server, $this->usuario, $this->pass, $this->db);
        
        if ($this->conexion->connect_errno) {
            die("Error: (".$this->conexion->connect_errno.")");
            return 0;
        }else{
            return 1;
        }
  
    }

  
    public function cerrar(){
        $this->conexion->close();
        return 1;
    }
  


    public function login($user, $pass){

        $query = "select * from usuario where usuario ='$user' and password = '$pass' ";
        $consulta = $this->conexion->query($query);
        $row = mysqli_fetch_array($consulta);
  
            if($row['id_usuario'] > 0){

                session_start();
                $_SESSION['validar'] = 1;
                echo "admin.php";
                return 0;
            
            }else{

                echo '1';
                return 1; 
            }
    }

      
  
    public function registrar_usuario($nombre, $apellido, $usuario, $password){
  
        session_start();
        $res = $this->conexion->query("select usuario from usuario where usuario = '$usuario' ");
        
            if($res == $usuario){

                echo '1';
                return 1;      

            }else{

                $this->conexion->query("insert into usuario 
                (nombre, apellido, usuario, password) values ('$nombre','$apellido','$usuario','$password')");
                echo "¡Registro exitoso!";
                return 0;

            }
    }

    public function permission_asigment($rol, $create, $read, $update, $delete, $audit){

        session_start();
        $query = "select id_rol from rol where rol = '$rol' ";
        $id_rol = $this->conexion->query($query);

        if(isset($id_rol)){

            $this->conexion->query("insert into permisos values ('$read', '$update', '$delete', '$create', '$id_rol')");
            echo "Asignacion de permisos lista";
            return 0;

        }else{
            echo '1';
        }
        


        
    }
    
}


?>








