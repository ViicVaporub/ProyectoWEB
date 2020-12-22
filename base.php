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

    $nombre = $_POST["Nombre"];
    $usuario = $_POST["Usuario"];
    $email = $_POST["Correo"];
    $contra = $_POST["Contraseña"];
 
    $encrip = password_hash($contra, PASSWORD_DEFAULT, ['cost' => 10]);


    $sql = "INSERT INTO usuario(Nombre, Usuario, Correo, Contrasena) VALUES ('$nombre', '$usuario', '$email', '$encrip')";

    if(mysqli_query($conexion,$sql) === true){
        echo "Se creo la tabla correctamente";
    }else{
        echo " Error: " .$sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);     
          
    header("Location: logueado_correcto.php");

?>