<?php

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
