<?php

    require_once "Barco.php";

 


    class DB{


        private static $conexion;



        public static function abreConexion(){

            self::$conexion = new PDO('mysql:host=localhost;dbname=hundir_la_flota', 'root', '');

        }


       

        public static function obtieneBarcos(){  // Esta función devuelve todos los barcos

            $barcos = array();

            $resultado = self::$conexion->query( "SELECT id, descripcion, tamanio  FROM barco" );

            while ( $registro = $resultado->fetch() ) {

                $b = new Barco( $registro["id"], $registro["descripcion"], $registro["tamanio"] );

                $barcos[] = $b;

            }

            return $barcos;

        }


        
        public static function insertaTablero( Tablero $t ){

                $jugador = $t->jugador;

                $tabla = json_encode($t->tabla);

                $partida = $t->partida;
                
                $consulta = self::$conexion->prepare("Insert into tablero (tabla, jugador, partida) VALUES (:tabla, :jugador, :partida )");
    
                $consulta->bindParam(':tabla',$tabla);
                $consulta->bindParam(':jugador',$jugador);
                $consulta->bindParam(':partida',$partida);
                
                return $consulta->execute();

        }




        public static function insertaCasilla( Casilla $c){

            $nfila = $c->nfila;

            $ncolumna = $c->ncolumna;

            $barco = $c->barco;

            $tablero = $c->tablero;

            
            $consulta = self::$conexion->prepare("Insert into casilla (nfila, ncolumna, barco, tablero) VALUES (:nfila, :ncolumna, :barco, :tablero )");

            $consulta->bindParam(':nfila',$nfila);
            $consulta->bindParam(':ncolumna',$ncolumna);
            $consulta->bindParam(':barco',$barco);
            $consulta->bindParam(':tablero',$tablero);
            
            return $consulta->execute();


        }




        public static function insertaPartida( Partida $p ){

            $jugador1 = $p->jugador1;

            $turno = $p->turno;
            
            
            $consulta = self::$conexion->prepare("Insert into partida (jugador1, turno) VALUES (:jugador1, :turno )");

            $consulta->bindParam(':jugador1',$jugador1);
            $consulta->bindParam(':turno',$turno);

            
            return $consulta->execute();


        }



        public static function insertaJugador( Jugador $j ){

            $nombre = $j->nombre;
            
            
            $consulta = self::$conexion->prepare("Insert into jugador (nombre) VALUES ( :nombre )");

            $consulta->bindParam(':nombre',$nombre);
            
            return $consulta->execute();


        }



        public static function obtienePartidas(){  // Esta función devuelve todos los barcos

            $partidas = array();

            $resultado = self::$conexion->query( "select id, estado, jugador1, jugador2, turno from partida where estado = 2" );

            while ( $registro = $resultado->fetch() ) {

                $p = new Partida( $registro["id"], $registro["jugador1"], $registro["jugador2"], $registro["turno"], $registro["estado"] );

                $partidas[] = $p;

            }

            return $partidas;

        }



        public static function buscaJugadorNombre($nombre){

            $j = null;

            $resultado = self::$conexion->query("SELECT id, nombre FROM jugador WHERE nombre='$nombre'");

            while ($registro = $resultado->fetch()) {

                $j= new Jugador($registro["id"],$registro["nombre"]);

            }
            
            return $j;

        }





    }