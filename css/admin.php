<?php
session_start();
if($_SESSION['validar'] == 1){

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admistrador</title>        
        <a href="index.php">¿Cerrar Sesión?</a>
    </head>
    <body>

        <h1>Bienvenido administrador</h1>
        <a href="roles.php">Crear un nuevo rol</a>
        <br>
        <a href="permission.php">Agregar Permisos</a>
        
        
        
    </body>
    </html>
<?php

}else{

echo "login.php";

}
?>