<?php
include('../modelo/conexion.php');
$numero_subcapitulo = $_POST['numero_subcapitulo'];
$titulo = $_POST['titulo_subcapitulo'];

$var = new conexion();
$var->editarSubcapitulo($numero_subcapitulo, $titulo);




 ?>