<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hundir la Flota</title>
    <link rel="stylesheet" href="../estilos/css.css">

    <?php

        require_once "../php/InsertaJugador.php";

    ?>

</head>
<body>

    <img src="../img/fondo-Index.jpg" alt="">

    <form action="" method="POST">

        <h1>Crear Usuario</h1>
        <label for="">Nombre: </label> <input type="text" class="nombre" id="nombre" name="nombre">  <br>
        <input type="submit" value="Iniciar" name="iniciar">
        
    </form>

</body>
</html>