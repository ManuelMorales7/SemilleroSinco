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
    <title>Iniciar Sesion</title>
</head>
<body>
    <div id="login">
        <form class="" method="post">
         
                <p>Usuario</p>
            <br>
                <input type="text" id="user" placeholder="Digita tu Usuario" title="Usuario requerido" required>
            <br>          
                <p>Contraseña</p>
            <br>
                <input  type="password" id="pass" placeholder="Digita tu Contraseña" title="Contraseña requerida" required>
            <br>
                <input type="reset" name="" value="Limpiar">
                <button type="button" id="ingresar">Ingresar</button>
          
            <p id="error_message" style="color:red"></p>

            <br>
                <a href="registrar.php">Crea una cuenta</a>
    
        </form>
    </div>


<script src="js/jquery.js" charset="utf-8"></script>
<script src="js/eventos.js" charset="utf-8"></script> 
      
</body>

</html>
