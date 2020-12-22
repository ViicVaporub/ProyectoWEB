<?php
 

 $servidor = "localhost"; 
 $nombreusuario = "u458624775_productos";
 $password = "Breack20";
 $bd = "u458624775_productos";
 
 $conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);

 session_start();

 $correo = $_SESSION['correo'];

 
 $contra = $_POST["Contraseña"];

 $encrip = password_hash($contra, PASSWORD_DEFAULT, ['cost' => 10]);

 $sql = "UPDATE usuario SET Contrasena='$encrip' WHERE Correo='$correo'";  
 $resultado = $conexion -> query($sql);
 
 header("Location: FormularioRegistro.php")

 ?>