<?php
include('../modelo/conexion.php');
$numero_subcapitulo = $_POST['numero_subcapitulo'];

$var = new conexion();
$var->eliminarSubcapitulo($numero_subcapitulo);




 ?>