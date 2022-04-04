<?php

class Jugador implements JsonSerializable{

    
    private $id;

    private $nombre;

    

    public function __construct( $_id, $_nombre ){

        $this->id = $_id;

        $this->nombre = $_nombre;

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


    public function __toString(){

        return "ID: ".$this->id." Nombre: ".$this->nombre;

    }


}