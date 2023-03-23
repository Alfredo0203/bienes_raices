<?php

namespace App;

class Propiedad {
    //BASE DE DATOS
    protected static $db;

public $id;
public $titulo;
public $precio;
public $imagen;
public $descripcion;
public $habitaciones;
public $wc;
public $estacionamiento;
public $creado;
public $vendedorId;

public function __construct($datos = [])
{
$this->id = $datos['id'] ?? '';
$this->titulo = $datos["titulo"] ?? '';
$this->precio = $datos["precio"] ?? '';
$this->imagen = $datos["imagen"] ?? '';
$this->descripcion = $datos["descripcion"] ?? '';
$this->habitaciones = $datos["habitaciones"] ?? '';
$this->wc = $datos["wc"] ?? '';
$this->estacionamiento = $datos["estacionamiento"] ?? '';
$this->creado = date('Y/m/d');
$this->vendedorId = $datos["vendedorId"] ?? '';
}

public function guardar() {
      //INSERTAR EN LA BD
      $valores = "INSERT INTO propiedades(titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) 
      VALUES ('$this->titulo', '$this->precio', '$this->imagen', '$this->descripcion', '$this->habitaciones', '$this->wc', '$this->estacionamiento', '$this->creado', '$this->vendedorId')";
      $resultado = self::$db->query($valores);
        debugear($resultado);

}

//CONEXTAR BD
public static function setBD($database) {
    self::$db = $database;
}
}

?>