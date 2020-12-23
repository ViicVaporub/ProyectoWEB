<?php

$servidor = "localhost"; 
$nombreusuario = "u458624775_productos";
$password = "Breack20";
$bd = "u458624775_productos";

$conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);



if(!$conexion){
    die("Conexion fallida: " .  mysqli_connect_error());
}

function Conectarse(){
    $link=mysqli_connect("localhost","u458624775_productos","Breack20");
    if(!$link)
      exit();
    $con=mysqli_select_db("u458624775_productos", $link);
    if(!$con)
       exit();
    return $link ;    
}

?>   