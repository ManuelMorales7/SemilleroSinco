<?php
include("../Modelo/conexion.php");

    $user = $_POST['user'];
    $create = $_POST['create'];
    $read = $_POST['read'];
    $update = $_POST['update'];
    $delete = $_POST['dlete'];
    $audit = $_POST['audit'];
    $object = new conexion();
    $object -> permission_asigment($user, $create, $read, $update, $delete, $audit);
    $object -> cerrar();

 ?>