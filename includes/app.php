<?php

require "funciones.php";
require "config/database.php";
require __DIR__ . "/../vendor/autoload.php";
//Conectar db
$db = conectarBD();
use App\Propiedad;

Propiedad::setBD($db);