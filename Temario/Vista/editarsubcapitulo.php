<?php
session_start();
if($_SESSION['validar'] == 1){
 ?>

<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     
     <title>Editar Subcapitulos</title>
     <link rel="stylesheet" href="css/default.css">
   </head>
   <body>
     <center>

       <div class="agregacion">
         <form id="formulario" action="index.html" method="post">
         <br><br>
           <h3 class="title">Edicion de subcapitulos</h3>
           <br><br>
           <p style="">numero subcapitulo</p>
           <input type="text" id="numero_subcapitulo"  title="Se necesita nombre del producto" required>
           <br><br>
           <p style="">titulo subcapitulo</p>
           <input type="text" id="titulo_subcapitulo"  title="Se necesita nombre del producto" required>
           <br><br>    
           <div class="">
               <p id="mensajee" style="color: red"></p>
              <p id="mensaje" style="color: #44EC1E"></p>

           </div>
           <br><br><br>
           <button type="button" name="button" id="editar" class="uno">Editar capitulo</button>

         </form>

       </div>
     </center>
     <script src="js/jqueryy.js" charset="utf-8"></script>
     <script src="js/operaciones.js" charset="utf-8"></script>
   </body>
 </html>

 <?php

 }else{

echo "login.php";

}
?>