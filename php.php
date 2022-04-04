<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        require_once("BD/BD.php");
        require_once("Entidades/Casilla.php");
    ?>
</head>
<body>
    

    <?php
            $c = new Casilla(1,1,1,1,7,1);
            DB::abreConexion();
            DB::insertaCasilla($c);
            $barcos = DB::obtieneBarcos();

            foreach( $barcos as $barco){
                echo "Id: ".$barco->id." Descripcion: ".$barco->descripcion." Tamaño: ".$barco->tamanio."<br>";
            }
    ?>
</body>
</html>