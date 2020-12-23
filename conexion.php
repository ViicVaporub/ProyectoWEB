<?php

$servidor = "localhost"; 
$nombreusuario = "u458624775_productos";
$password = "Breack20";
$bd = "u458624775_productos";

$conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);



if(!$conexion){
    die("Conexion fallida: " .  mysqli_connect_error());
}

?>   