<?php
session_start();
//CERRAR La sesion
//session_reset();
//session_destroy()
$_SESSION = [];
header("Location: /bienes_raices");
 ?>