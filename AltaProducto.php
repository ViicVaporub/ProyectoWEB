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
    $producto = $_POST["producto"];
    $imagen = $_POST["imagen"];
    $precio = $_POST["precio"];
    $existencias = $_POST["existencias"];
    $tipo = $_POST["tipo"];
 


    $sql = "INSERT INTO carrito(id, producto, imagen, precio, existencias, tipo) VALUES ('$id', '$producto', '$imagen', '$precio','$existencias','$tipo')";
    
    if(mysqli_query($conexion,$sql) === true){
        echo "Se creo la tabla correctamente";
    }else{
        echo " Error: " .$sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);     
          
    header("Location: altaexitosa.php");

?>