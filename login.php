<?php

$servidor = "localhost"; 
$nombreusuario = "u458624775_RISVB";
$password = "Patas_123";
$bd = "u458624775_Productos";

$conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);

session_start();

        $usuario = $_POST["usuario"];
        $contra = $_POST["Contraseña"];
        $sql = 'SELECT * FROM Usuario';
        $resultado = $conexion -> query($sql);

        while($fila = $resultado -> fetch_assoc()){
            $User = $fila['Usuario'];
            if($usuario == $User){
                $passwd = $fila['Contrasena'];
                if(password_verify($contra, $passwd)){
                    session_start();
                    $_SESSION["usuario"] = "$usuario";
                    header("Location: home.php");
                }else{
                    
                }
            }else{
                
            }
        }

        


?>