<?php
session_start();


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Buscar</title>
    <link rel="stylesheet" href="css/default.css">
  </head>
  <body>  
    
    
      <h3 class="title">Temario</h3>
      <?php
      include('../modelo/conexion.php');
      $find = new conexion();
       ?>
       
       <table > 
         <?php
         $find->consultarTemario();
         ?>
       </table>
    
  
  </body>
</html>
<?php

 ?>
