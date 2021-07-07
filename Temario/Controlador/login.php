<?php

include("../Modelo/conexion.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

    if(isset($user) && isset($pass)) {
        
        $conn = new conexion;
        $conn->login($user, $pass);
        $conn->cerrar();
    }

 ?>