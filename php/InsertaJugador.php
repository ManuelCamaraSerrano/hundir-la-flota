<?php

    require_once "../Entidades/BD.php";
    require_once "../Entidades/Jugador.php";
    require_once "../Sesion/Sesion.php";

    if( isset( $_POST["iniciar"] ) && $_POST["nombre"] != "" ){

        $jugador = new Jugador(1,$_POST["nombre"]);

        DB::abreConexion();

        if( DB::insertaJugador($jugador) )
        {
            $jugador = DB::buscaJugadorNombre($_POST["nombre"]);

            Sesion::iniciar();

            Sesion::escribir("usuario",$jugador);

            header("Location: ../vistas/listadoPartidas.php");

        }
        else{

            echo "<p>Error, Este nombre ya está en uso</p>";

        }



    }