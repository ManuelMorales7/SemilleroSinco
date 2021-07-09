<?php
//incluye la conexion de base de datos creada en el modelo
include('../modelo/conexion.php');
//se crean una variables y se le asigna lo que se envio por metodo post del input
$numero_capitulo = $_POST['numero_capitulo'];
$titulo  = $_POST['titulo_capitulo'];

$var = new conexion();
//a la funcion en el modelo se le llama las variables
$var->agregarCapitulo($numero_capitulo, $titulo);




 ?>
