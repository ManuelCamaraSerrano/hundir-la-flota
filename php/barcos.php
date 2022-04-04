<?php

    require_once "../Entidades/BD.php";

    require_once "../Entidades/Barco.php";

    DB::abreConexion();

    $barcos = DB::obtieneBarcos();

    echo json_encode($barcos);