<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of personasM
 *
 * @author Jhon Mauricio Moreno
 */
class Personas {

    private $documento;
    private $pnombre;
    private $snombre;
    private $papellido;
    private $sapellido;
    private $email;
   
    function __construct($documento, $pnombre,$papellido, $snombre=null,  $sapellido=null, $email=null) {
        $this->documento = $documento;
        $this->pnombre = $pnombre;
        $this->snombre = $snombre;
        $this->papellido = $papellido;
        $this->sapellido = $sapellido;
        $this->email = $email;
    }
   
    function getDocumento() {
        return $this->documento;
    }

    function getPnombre() {
        return $this->pnombre;
    }

    function getSnombre() {
        return $this->snombre;
    }

    function getPapellido() {
        return $this->papellido;
    }

    function getSapellido() {
        return $this->sapellido;
    }

    function getEmail() {
        return $this->email;
    }

    function setDocumento($documento): void {
        $this->documento = $documento;
    }

    function setPnombre($pnombre): void {
        $this->pnombre = $pnombre;
    }

    function setSnombre($snombre): void {
        $this->snombre = $snombre;
    }

    function setPapellido($papellido): void {
        $this->papellido = $papellido;
    }

    function setSapellido($sapellido): void {
        $this->sapellido = $sapellido;
    }

    function setEmail($email): void {
        $this->email = $email;
    }


    

}
