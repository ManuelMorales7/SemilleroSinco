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
    
    
    //funcion agregar capitulo
public function agregarCapitulo($numero_capitulo, $titulo_capitulo){

        session_start();
        $res = $this->conexion->query("select numero_capitulo from capitulo where numero_capitulo = '".$numero_capitulo."' ");


        if (mysqli_num_rows($res)>0) {
          echo '1';
        }else {
          $this->conexion->query("INSERT INTO capitulo (titulo_capitulo, numero_capitulo) VALUES ('"  .$titulo_capitulo. "'," . $numero_capitulo. ")");
          echo "¡Se agrego el capitulo!";
        }

      }

//funcion eliminar capitulo
      public function eliminarCapitulo($numero_capitulo){

        session_start();
        $res = $this->conexion->query("select numero_capitulo from capitulo where numero_capitulo = '".$numero_capitulo."' ");


        if (mysqli_num_rows($res)>0) {
          $this->conexion->query("DELETE FROM capitulo WHERE numero_capitulo = '".$numero_capitulo."'");
          echo "¡Se elimino el capitulo!";
        }else {         
          echo '1';
        }

      }

//funcion editar capitulo
public function editarCapitulo($numero_capitulo, $titulo_capitulo){

  session_start();
  $res = $this->conexion->query("select numero_capitulo from capitulo where numero_capitulo = '".$numero_capitulo."' ");


  if (mysqli_num_rows($res)>0) {
    $this->conexion->query("update capitulo set titulo_capitulo = '".$titulo_capitulo."' where numero_capitulo ='".$numero_capitulo."' ");
    echo "¡Se edito el titulo del capitulo!";
  }else {         
    echo '1';
  }

}

//funcion agregar subcapitulo
public function agregarSubcapitulo($numero_subcapitulo, $titulo_subcapitulo, $numero_capitulo ){

        session_start();
        $res = $this->conexion->query("select numero_subcapitulo from temario where numero_subcapitulo = '".$numero_subcapitulo."' ");


        if (mysqli_num_rows($res)>0) {
          echo '1';
        }else {
          $this->conexion->query("INSERT INTO temario (numero_subcapitulo, titulo_subcapitulo, numero_capitulo) VALUES ("  .$numero_subcapitulo. ",'" . $titulo_subcapitulo."'," .$numero_capitulo.")");
          echo "¡Se agrego el subcapitulo!";
        }

      }

//funcion eliminar subcapitulo
      public function eliminarSubcapitulo($numero_subcapitulo){

        session_start();
        $res = $this->conexion->query("select numero_subcapitulo from temario where numero_subcapitulo = '".$numero_subcapitulo."' ");


        if (mysqli_num_rows($res)>0) {
          $this->conexion->query("DELETE FROM temario WHERE numero_subcapitulo = '".$numero_subcapitulo."'");
          echo "¡Se elimino el subcapitulo!";
        }else {         
          echo '1';
        }

      }

//funcion editar subcapitulo
public function editarSubcapitulo($numero_subcapitulo, $titulo_subcapitulo){

  session_start();
  $res = $this->conexion->query("select numero_subcapitulo from temario where numero_subcapitulo = '".$numero_subcapitulo."' ");


  if (mysqli_num_rows($res)>0) {
    $this->conexion->query("update temario set titulo_subcapitulo = '".$titulo_subcapitulo."' where numero_subcapitulo ='".$numero_subcapitulo."' ");
    echo "¡Se edito el titulo del subcapitulo!";
  }else {         
    echo '1';
  }

}

    
}


?>
