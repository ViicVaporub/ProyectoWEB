<?php
 
    $servidor = "localhost"; 
    $nombreusuario = "u458624775_RISVB";
    $password = "Patas_123";
    $bd = "u458624775_Productos";

    $conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);

    if(!$conexion){
        die("Conexion fallida: " .  mysqli_connect_error());
    }
    echo "Conexion exitosa";

    $nombre = $_POST["Nombre"];
    $usuario = $_POST["Usuario"];
    $email = $_POST["Correo"];
    $contra = $_POST["Contraseña"];
 
    echo $nombre;
    echo $usuario;
    echo $email;
    echo $contra;


    $sql = "INSERT INTO Usuario(Nombre, Usuario, Correo, Contrasena) VALUES ('$nombre', '$usuario', '$email', '$contra')";

    if(mysqli_query($conexion,$sql) === true){
        echo "Se creo la tabla correctamente";
    }else{
        echo " Error: " .$sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);     
          


?>