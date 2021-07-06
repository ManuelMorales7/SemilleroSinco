<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div id="main">
        <h1 class="center">Inicio Usuario</h1>
        <form action="<?php echo constant('URL'); ?>login/ingresarUsuario" method="POST">
        <br>
        <br>
<p>
    <label for="usuario">Usuario &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input class="center" type="text" name="usuario" id="usuario" required>
</p>
<br>
<p>
    <label for="contraseña">Contraseña &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input class="center" type="text" name="contraseña" id="contraseña" required>
</p>
<p>
<div class="center"><?php echo $this->mensaje; ?></div>
<br>
<input class="boton" type="submit" value="Agregar">
</p>
</form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>