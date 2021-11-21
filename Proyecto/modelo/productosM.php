<?php

class Productos {

    private $cb;
    private $nombre;
    private $descripcion;
   
    function __construct($cb, $nombre, $descripcion) {
        $this->cb = $cb;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }
    
    function getCb() {
        return $this->cb;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setCb($cb): void {
        $this->cb = $cb;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }


    
}
