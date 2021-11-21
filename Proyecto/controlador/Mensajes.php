<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mensajes
 *
 * @author Jhon Mauricio Moreno
 */
class Mensajes {

    static function info($m) {

        echo '<div class = "alert alert-info">' .
        ' <strong>Info!</strong> ' .$m.
        '</div>';
    }
    static function success($m) {

        echo '<div class = "alert alert-success">' .
        ' <strong>Ok</strong> ' .$m.
        '</div>';
    }
    static function danger($m) {

        echo '<div class = "alert alert-danger">' .
        ' <strong>Error </strong> ' .$m.
        '</div>';
    }

}
