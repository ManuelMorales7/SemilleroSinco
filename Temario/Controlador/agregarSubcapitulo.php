<?php
include('../modelo/conexion.php');

$numero_subcapitulo = $_POST['numero_subcapitulo'];
$titulo  = $_POST['titulo_subcapitulo'];
$numero_capitulo = $_POST['numero_capitulo'];

$var = new conexion();
$var->agregarSubcapitulo($numero_subcapitulo, $titulo,$numero_capitulo);




 ?>