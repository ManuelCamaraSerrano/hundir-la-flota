<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        require_once "../Sesion/Sesion.php";

        Sesion::iniciar();
        
        if(!Sesion::existe("usuario")){

            header("Location: index.php");

        }

        var_dump(Sesion::leer("usuario"));

    ?>

</head>
<body>
    <h1>Listado de partidas</h1>
    <input type="submit" name="crear" value="Crear Partida">
    <input type="submit" name="unirse" value="Unirse">
</body>
</html>