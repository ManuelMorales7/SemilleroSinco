<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body >
    <div  class="container" >
                 
        <div class="d-flex justify-content-center h-100"  >
        
            <div class="card bg-light border-primary">
                
            <h1 class="card-title text-center">Login</h1>
                               
                <div class="card-body">

                     <form class="" method="POST">
                             <p class="fw-bold" >Usuario</p>
                             <input type="text" id="user" placeholder="Digita tu Usuario" title="Usuario requerido" required >
                        <br>          
                            <p class="fw-bold" >Contraseña</p>
                            <input  type="password" id="pass" placeholder="Digita tu Contraseña" title="Contraseña requerida" required>
                        <br>
                        <br>
                        
                            <button type="button" class="btn btn-primary" id="ingresar">Limpiar</button>
                            <button type="button" class="btn btn-primary" id="ingresar">Ingresar</button>
                    
                        <p id="error_message" style="color:red"></p>
                        <br>
                            <a href="registrar.php">Crea una cuenta</a>

                    </form>
       
                </div>
                  
            </div>
              
        </div>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/eventos.js" charset="utf-8"></script> 
    
      
</body>
</html>