<?php
include('../modelo/conexion.php');
$numero_capitulo = $_POST['numero_capitulo'];
$titulo = $_POST['titulo_capitulo'];

$var = new conexion();
$var->editarCapitulo($numero_capitulo, $titulo);




 ?>