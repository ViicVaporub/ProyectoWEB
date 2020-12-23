<?php
 
 $servidor = "localhost"; 
 $nombreusuario = "root";
 $password = "";
 $bd = "u458624775_productos";
 
 $conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);
 
 if(!$conexion){
     die("Conexion fallida: " .  mysqli_connect_error());
 }
    echo "Conexion exitosa";

    $id = $_POST["id"];

    $sql = "DELETE FROM Carrito WHERE id = '$id'";
    
    if(mysqli_query($conexion,$sql) === true){
        echo "Se creo la tabla correctamente";
    }else{
        echo " Error: " .$sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);     
          
    header("Location: altaexitosa.php");

?>