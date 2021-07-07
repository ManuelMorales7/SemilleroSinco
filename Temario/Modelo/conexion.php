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

        $query = "select * from usuarios where usuario ='$user' and password = '$pass' ";
        $consulta = $this->conexion->query($query);
  
            if(mysqli_num_rows($consulta)>0){
                session_start();
                echo "admin.php";
                return 0;
            }else{
                
                return 1;
            }
      }

      
  
    function registrar_usuario($nombre, $apellido, $usuario, $password){
  
        session_start();
        $res = $this->conexion->query("select nombre, usuario from usuarios where usuario = '.$usuario.' ");
        
            if(mysqli_num_rows($res)>0){

                echo '1';
                return 1;      

            }else{

                $this->conexion->query("insert into usuarios values('$nombre','$apellido','$usuario','$password')");
                echo "¡Registro exitoso!";
                return 0;

            }
    }
    
}


?>