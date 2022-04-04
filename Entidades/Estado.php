<?php

class Estado implements JsonSerializable{

    
    private $id;

    private $descripcion;


    

    public function __construct( $_id, $_descripcion ){

        $this->id = $_id;

        $this->descripcion = $_descripcion;


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