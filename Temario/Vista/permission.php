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
        <title>Asignación de permisos</title>
        <a href="index.php">¿Cerrar Sesión?</a>
    </head>
    <body>

        <h1>Asignar permisos</h1>

            <form action="">

                    
                <br>
                    <label for="user_name">Ingrese el nombre del usuario al que desea asignar permisos</label>
                    <input type="text" id="user_name">
                <br>
                    <label for="insert_permission">Permisos para insertar</label>
                    <input type="text" id="create_permission" value=1>    
                <br>
                    <label for="read_permission">Permisos para Visualizar</label>
                    <input type="text" id="read_permission" value=1> 
                <br>
                    <label for="update_permission">Permisos para actualizar</label>
                    <input type="text" id="update_permission" value=1> 
                <br> 
                    <label for="delte_permission">Permisos para eliminar</label>
                    <input type="text" id="delete_permission" value=1> 
                <br> 
                    <label for="audit_permission">Permisos para auditoría</label>
                    <input type="text" id="audit_permission" value=1> 
                    
                
                    <button type="button" id="submit_permission" value=1>Aceptar</button>
                    <p id="error_message" style="color:red"></p>
                    <p id="success_message" style="color:green"></p>
            
            </form>
        
        


    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/eventos.js" charset="utf-8"></script>   
    </body>
    </html>
<?php

}else{

echo "login.php";

}
?>