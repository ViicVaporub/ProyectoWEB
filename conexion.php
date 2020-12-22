<?php

$servidor = "localhost"; 
    $nombreusuario = "u458624775_RISVB";
    $password = "Patas_123";
    $bd = "u458624775_Productos";

    $conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);

    if(!$conexion){
        die("Conexion fallida: " .  mysqli_connect_error());
    }

?>   