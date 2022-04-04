<?php

class Tablero implements JsonSerializable{

    
    private $id;

    private $tabla;

    private $jugador;

    private $partida;


    

    public function __construct( $_id, $_jugador, $_partida ){

        $this->id = $_id;

        $this->tabla = array_fill( 0, 10, array_fill( 0, 10, " "));

        $this->jugador = $_jugador;

        $this->partida = $_partida;


    }



    public function __get($property){

        if(property_exists($this, $property)) {

            return $this->$property;

        }

    }




    public function __set($property, $value){

        if(property_exists($this, $property)) {

            $this->$property = $value;

        }

    }



    public function jsonSerialize() {

        return (object) get_object_vars($this);

    }


}