<?php

    require_once "../Entidades/BD.php";

    require_once "../Entidades/Partida.php";

    DB::abreConexion();

    $partidas = DB::obtienePartidas();

    echo json_encode($partidas);