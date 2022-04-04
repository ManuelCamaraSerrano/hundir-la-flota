<?php

class Barco implements JsonSerializable{

    
    private $id;

    private $descripcion;

    private $tamanio;

    

    public function __construct( $_id, $_descripcion, $_tamanio ){

        $this->id = $_id;
        
        $this->descripcion = $_descripcion;

        $this->tamanio = $_tamanio;

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