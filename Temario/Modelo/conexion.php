<?php
class conexion{
  private $conexion;
    private $server = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $db = "Temario";
    private $username;
    private $user_id;
    


  
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

        $this->username = $user;

        $query = "select * from usuario where usuario ='$this->username' and password = '$pass' ";
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


    public function role_creation($role, $user){

        session_start();
        $query = "select id_usuario from usuario where usuario = '$user' ";
        $user_id = $this->conexion->query($query);
        $row = mysqli_fetch_array($user_id);
        $id_duplicate = implode('', $row);
        $id = substr($id_duplicate, -1);

        $this->user_id->$id;
        

            if($row['id_usuario'] > 0){
                $this->conexion->query("insert into rol (id_usuario, rol) values ('$id', '$role')");
                echo "Rol creado de forma exitosa";
                return 0;
            }else{
                echo '1';
            }
    }


    public function permission_asigment($username, $create, $read, $update, $delete, $audit){

        session_start();

        $query = "select usuario from usuario where usurio = $username";
        $usuario = $this->conexion->query($query);

                
        $query_join = "select r.id_rol as ROL from rol as r inner join usuario 
        as u on u.id_usuario=r.id_usuario where u.id_usuario='$this->user_id';";
        $rol_id = $this->conexion->query($query_join);
        $row_join = mysqli_fetch_array($rol_id);
        $id_duplicate_join = implode('', $row_join);
        $id_join = substr($id_duplicate_join, -1);

        if($username == $usuario){

            $this->conexion->query("insert into permisos values ('$create', '$read', '$update', '$delete', '$audit', '$id_join' )");
            echo "Asignacion de permisos lista";
            return 0;

        }else{
            echo '1';
        }
        


        
    }
    
     

//funcion agregar capitulo
//http://localhost/pagina/Vista/agregarcapitulo.php
public function agregarCapitulo($numero_capitulo, $titulo){

        session_start();
        //llama la conexion de la base de datos y crear un query para recuperar esos datos 
        $res = $this->conexion->query("SELECT numero_capitulo, titulo from numero_capitulo where numero_capitulo = '".$numero_capitulo."' ");
        
//si encontro una fila que coincide con ese query muestre el mensaje uno que esta en operaciones.js que es ya existe
        if (mysqli_num_rows($res)>0) {
          echo '1';
          //si encontro ninguna coincidencia ejecute este query muestre el mensaje 
        }else {
          $this->conexion->query("INSERT INTO numero_capitulo (titulo, numero_capitulo) VALUES ('"  .$titulo. "','" . $numero_capitulo. "')");
          echo "¡Se agrego el capitulo!";
        }

      }

//funcion eliminar capitulo
//http://localhost/pagina/Vista/eliminarcapitulo.php
      public function eliminarCapitulo($numero_capitulo){

        session_start();
        
        $res = $this->conexion->query("SELECT numero_capitulo from numero_capitulo  where numero_capitulo = '".$numero_capitulo."' ");


        if (mysqli_num_rows($res)>0) {
          $this->conexion->query("DELETE numero_capitulo FROM numero_capitulo WHERE numero_capitulo = '".$numero_capitulo."'");
          
          //$this->conexion->query("DELETE numero_capitulo, id_padre FROM numero_capitulo WHERE numero_capitulo = '".$numero_capitulo."'");
          //$this->conexion->query("CALL `eliminar capitulo`('"  .$numero_capitulo. ")");
          echo "¡Se elimino el capitulo!";
        }else {         
          echo '1';
        }

      }

//funcion editar capitulo
//http://localhost/pagina/Vista/editarcapitulo.php
public function editarCapitulo($numero_capitulo, $titulo){

  session_start();
  $res = $this->conexion->query("SELECT numero_capitulo from numero_capitulo where numero_capitulo = '".$numero_capitulo."' ");


  if (mysqli_num_rows($res)>0) {
    $this->conexion->query("UPDATE numero_capitulo set titulo = '".$titulo."' where numero_capitulo ='".$numero_capitulo."' ");
    echo "¡Se edito el titulo del capitulo!";
  }else {         
    echo '1';
  }

}

//funcion agregar subcapitulo
//http://localhost/pagina/Vista/agregarsubcapitulo.php
public function agregarSubcapitulo($numero_subcapitulo, $titulo, $numero_capitulo ){

        session_start();
        
        $res = $this->conexion->query("SELECT numero_capitulo from numero_capitulo where numero_capitulo = '".$numero_subcapitulo."' ");
        //SELECT id from numero_capitulo where numero_capitulo = '2.1'

        if (mysqli_num_rows($res)>0) {
          echo '1';
        }else {
          
          $query="SELECT id from numero_capitulo where numero_capitulo = '$numero_capitulo'";
          //echo "aca".$query;
          $numero=$this->conexion->query($query);
          ///$numero=mysqli_query($res, $query);
          //echo "aca".$numero;
          $row = mysqli_fetch_array($numero);
          //$row = mysqli_fetch_assoc($numero);
          $id2 = implode('',$row);
          $id = substr($id2, 0, 2);
          //echo "aca".$id;


          $this->conexion->query("INSERT INTO numero_capitulo (numero_capitulo, padre_id) VALUES ('"  .$numero_subcapitulo. "','" . $id."')");
          $this->conexion->query("INSERT INTO desc_capitulo ( titulo, id_capitulo) VALUES ('" . $titulo."','" .$numero_capitulo."')");
          //INSERT INTO numero_capitulo and desc_capitulo( numero_capitulo,padre_id, titulo) 
//SELECT o.numero_capitulo , o.padre_id , u.titulo FROM desc_capitulo u INNER JOIN numero_capitulo o ON  o.padre_id = u.id_capitulo
          echo "¡Se agrego el subcapitulo!";
        }
      

      }

//funcion eliminar subcapitulo
//http://localhost/pagina/Vista/eliminarsubcapitulo.php
      public function eliminarSubcapitulo($numero_subcapitulo){

        session_start();
        $res = $this->conexion->query("SELECT numero_capitulo from numero_capitulo where numero_capitulo = '".$numero_subcapitulo."' ");


        if (mysqli_num_rows($res)>0) {
          $this->conexion->query("DELETE FROM numero_capitulo WHERE numero_capitulo = '".$numero_subcapitulo."'");
          //$this->conexion->query("CALL `eliminar subcapitulo`('"  .$numero_subcapitulo. ")");
          echo "¡Se elimino el subcapitulo!";
        }else {         
          echo '1';
        }

      }

//funcion editar subcapitulo
//http://localhost/pagina/Vista/editarsubcapitulo.php
public function editarSubcapitulo($numero_subcapitulo, $titulo){

  session_start();
  $res = $this->conexion->query("SELECT numero_capitulo from numero_capitulo where numero_capitulo = '".$numero_subcapitulo."' ");


  if (mysqli_num_rows($res)>0) {
    $query="SELECT id from numero_capitulo where padre_id = '$numero_subcapitulo'";
    //SELECT id from numero_capitulo where numero_capitulo = '1.1.1'
          //echo "aca".$query;
          $numero=$this->conexion->query($query);
          ///$numero=mysqli_query($res, $query);
          //echo "aca".$numero;
          $row = mysqli_fetch_array($numero);
          //$row = mysqli_fetch_assoc($numero);
          $id2 = implode('',$row);
          $id = substr($id2, 0, 2);
          //echo "aca".$id;
          $this->conexion->query("UPDATE desc_capitulo set titulo = '".$titulo."' where id_capitulo ='".$id."' ");
          //$this->conexion->query("UPDATE desc_capitulo set titulo = '".$titulo."' where id_capitulo ='".$id."' ");
    echo "¡Se edito el titulo del subcapitulo!";

    
  }else {         
    echo '1';
  }

}

//funcion visualizar temario
//http://localhost/pagina/Vista/consulta.php
public function consultarTemario(){

  $consulta = $this->conexion->query("select n.numero_capitulo as numero_capitulo, d.titulo as titulo from numero_capitulo as n inner join desc_capitulo as d on n.id=d.id_capitulo order by numero_capitulo asc");
 SELECT c.id as id, c.numero_capitulo as numero_capitulo, c.padre_id as padre_id, t.id_capitulo as id_capitulo, t.titulo as titulo from numero_capitulo as c inner join desc_capitulo as t ORDER BY c.numero_capitulo
  while ($row = mysqli_fetch_array($consulta)) {
    

      echo "<tr>";

      $texto = $row["numero_capitulo"];
      $array = explode ( '.', $texto );    
          $numero_caracter = sizeof($array);
          //echo "Número de nivel: " . $numero_caracter . '<br/>';
  
          for( $i=1;$i<$numero_caracter;$i++ ){
              echo "<td> </td>";   
                      
            } 
            
            echo "<td>". $row["numero_capitulo"] . "</td>";
            
      echo "<td>". $row["titulo"] . "</td>";
       
        
    echo "</tr>";
   
    }



}


}
 ?>
