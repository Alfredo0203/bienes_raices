<?php

function conectarBD() {

    $db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud');

    if(!$db) {
        echo 'Could not be connectd';
        exit;
    }

    return $db;

}