<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <div id="Registro">
        <form class=""  method="post">
    
                <p>Nombres</p>
            <br>
                <input type="text" id="nombre"  placeholder="Digita tus nombres" title="Campos requeridos" required>
            <br> 
                <p>Apellidos</p>
                <input type="text" id="apellido"  placeholder="Digita tus apellidos" title="Campos requeridos" required>
            <br>
                <p>Nombre de Usuario</p>
                <input type="text" id="usuario"  placeholder="Digita tu Usuario" title="Usuario requerido" required>
            <br>        
                <p>Contraseña</p>
                <input id="password" type="password"  placeholder="Digita tu Contraseña" title="Contraseña requerida" required>
            <br>
                <input  type="reset" name="" value="Limpiar">
                <button id="registrar" type="button" >Registrar</button>
            <br>
                <a href="index.php">¿Ya tienes una cuenta?</a>
            <br>
                <p id="error_message" style="color:red"></p>
                <p id="success_message" style="color:green"></p>
        </form>
    </div>


<script src="js/jquery.js" charset="utf-8"></script>
<script src="js/eventos.js" charset="utf-8"></script>

</body>
</html>