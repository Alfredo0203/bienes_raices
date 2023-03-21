<?php 

//IMPORTAR LA CONEXION
require 'includes/config/database.php';
$database = conectarBD();

//DATOS
$email = 'correo@correo.com';
$password = '123456';

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//CONSULTA/ QUERY PARA CREAR EL USUARIO
$query = "INSERT INTO usuarios(email, pass) VALUES('{$email}', '{$passwordHash}')";


//INSERTAR EN LA BASE DE DATOS
mysqli_query($database, $query);

?>