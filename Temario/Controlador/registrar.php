<?php
include("../Modelo/conexion.php");


    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $object = new conexion();
    $object -> registrar_usuario($nombre, $apellido, $usuario, $password);
    $object -> cerrar();

 ?>