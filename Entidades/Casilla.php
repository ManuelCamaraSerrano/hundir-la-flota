<?php

class Casilla implements JsonSerializable{

    
    private $id;

    private $nfila;

    private $ncolumna;

    private $barco;

    private $tablero;

    private $estado;

    

    public function __construct( $_id, $_nfila, $_ncolumna, $_barco, $_tablero, $_estado ){

        $this->id = $_id;

        $this->nfila = $_nfila;

        $this->ncolumna = $_ncolumna;

        $this->barco = $_barco;

        $this->tablero = $_tablero;

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