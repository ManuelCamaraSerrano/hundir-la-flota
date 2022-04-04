<?php

    require_once "../Entidades/BD.php";
    require_once "../Entidades/Jugador.php";

    if( isset( $_POST["iniciar"] ) && $_POST["nombre"] != "" ){

        $jugador = new Jugador(1,$_POST["nombre"]);

        DB::abreConexion();

        if( DB::insertaJugador($jugador) )
        {
            
            header("Location: ../vistas/listadoPartidas.php");

        }
        else{

            echo "<p>Error, Este nombre ya está en uso</p>";

        }



    }