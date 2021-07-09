<?php
include("../Modelo/conexion.php");

    $role = $_POST['role'];
    $user = $_POST['user'];
    $object = new conexion();
    $object -> role_creation($role, $user);
    $object -> cerrar();

 ?>