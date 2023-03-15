<?php

function conectarBD() {

    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');

    if(!$db) {
        echo 'Could not be connectd';
        exit;
    }

    return $db;

}