<?php

class Precios {

    private $CB;
    private $FechaIni;
    private $FechaFin;
    private $Precio;
    
    function __construct($CB, $FechaIni, $FechaFin, $Precio) {
        $this->CB = $CB;
        $this->FechaIni = $FechaIni;
        $this->FechaFin = $FechaFin;
        $this->Precio = $Precio;
    }
    
    function getCB() {
        return $this->CB;
    }

    function getFechaIni() {
        return $this->FechaIni;
    }

    function getFechaFin() {
        return $this->FechaFin;
    }

    function getPrecio() {
        return $this->Precio;
    }

    function setCB($CB): void {
        $this->CB = $CB;
    }

    function setFechaIni($FechaIni): void {
        $this->FechaIni = $FechaIni;
    }

    function setFechaFin($FechaFin): void {
        $this->FechaFin = $FechaFin;
    }

    function setPrecio($Precio): void {
        $this->Precio = $Precio;
    }



   
   
}
