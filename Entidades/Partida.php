<?php

class Partida implements JsonSerializable{

    
    private $id;

    private $jugador1;

    private $jugador2;

    private $turno;

    private $estado;

    

    public function __construct( $_id, $_jugador1, $_jugador2, $_turno, $_estado ){

        $this->id = $_id;

        $this->jugador1= $_jugador1;

        $this->jugador2 = $_jugador2;

        $this->turno = $_turno;

        $this->estado = $_estado;


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