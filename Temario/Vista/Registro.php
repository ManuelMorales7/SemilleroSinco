<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>

    <div class="container">

        <div class="d-flex justify-content-center h-100"">

             <div class="card bg-light border-primary">

               <h1 class="card-title text-center">Registro</h1>
            
                <div class="card-body">

                    <form class="" method="POST">
                
                            <p class="fw-bold">Nombres</p>
                            <input type="text" id="nombre"  placeholder="Digita tus nombres" title="Campos requeridos" required>
                        <br> 
                            <p class="fw-bold">Apellidos</p>
                            <input type="text" id="apellido"  placeholder="Digita tus apellidos" title="Campos requeridos" required>
                        <br>
                            <p class="fw-bold">Nombre de Usuario</p>
                            <input type="text" id="usuario"  placeholder="Digita tu Usuario" title="Usuario requerido" required>
                        <br>        
                            <p class="fw-bold">Contraseña</p>
                            <input id="password" type="password"  placeholder="Digita tu Contraseña" title="Contraseña requerida" required>
                        <br>
                        <br>
                            <button type="button" class="btn btn-primary" id="ingresar">Limpiar</button>
                            <button type="button" class="btn btn-primary" id="ingresar">Ingresar</button>
                    
                        <br>
                        <br>
                            <a href="index.php">¿Ya tienes una cuenta?</a>
  
                            <p id="error_message" style="color:red"></p>
                            <p id="success_message" style="color:green"></p>
                    </form>

                </div>
            </div>

        </div>
    </div>
<script src="js/jquery.js" charset="utf-8"></script>
<script src="js/eventos.js" charset="utf-8"></script>
</body>
</html>