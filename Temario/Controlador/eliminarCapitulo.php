<?php
include('../modelo/conexion.php');
$numero_capitulo = $_POST['numero_capitulo'];

$var = new conexion();
$var->eliminarCapitulo($numero_capitulo);




 ?>
