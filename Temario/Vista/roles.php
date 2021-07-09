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
        <title>Creación de roles</title>
        <a href="index.php">¿Cerrar Sesión?</a>
    </head>
    <body>

        <div id="rol">

            <form method="post">

                <label for="rol_name">Inserte el nombre del rol que desee crear</label>
                <input type="text" id="rol_name">
                <br>
                <label for="user_name">Ingrese el nombre del usuario al que desee asignar el rol</label>
                <input type="text" id="user_name">
                <br>
                <button type="button" id="submit_role" value=1>Aceptar</button>
                <p id="error_message" style="color:red"></p>
                <p id="success_message" style="color:green"></p>


            </form>


        </div>
        

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/evento_rol.js" charset="utf-8"></script>  
    </body>
    </html>
<?php

}else{

echo "index.php";

}
?>
