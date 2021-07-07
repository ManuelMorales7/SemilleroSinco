<?php
include('../modelo/conexion.php');
$numero_capitulo = $_POST['numero_capitulo'];
$titulo_capitulo  = $_POST['titulo_capitulo'];

$var = new conexion();
$var->agregarCapitulo($numero_capitulo, $titulo_capitulo);




 ?>
