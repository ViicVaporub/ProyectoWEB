<?php

$servidor = "localhost"; 
$nombreusuario = "root";
$password = "";
$bd = "u458624775_productos";

$conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);

if(!$conexion){
    die("Conexion fallida: " .  mysqli_connect_error());
}

?>   