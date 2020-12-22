<?php

$servidor = "localhost"; 
$nombreusuario = "u458624775_productos";
$password = "Breack20";
$bd = "u458624775_productos";

$conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);

if(!$conexion){
    die("Conexion fallida: " .  mysqli_connect_error());
}
session_start();

        $usuario = $_POST["usuario"];
        $contra = $_POST["Contraseña"];
        $sql = 'SELECT * FROM usuario';
        $resultado = $conexion -> query($sql);

        while($fila = $resultado -> fetch_assoc()){
            $User = $fila['Usuario'];
            
            if(isset($_COOKIE["block".$usuario])){
                header("Location: FormularioBloqueado.php");
            }else{
                if($usuario == $User){
                $passwd = $fila['Contrasena'];
                if(password_verify($contra, $passwd)){
                    session_start();
                    $_SESSION["usuario"] = "$usuario";
                    setcookie("captcha",'',time()-3600);
                    header("Location: home.php");
                }else{
                    if(isset($_COOKIE["$usuario"])){
                        $cont = $_COOKIE["$usuario"];
                        $cont++;
                        setcookie($usuario,$cont,time() + 120);
                        if($cont >=3){
                            setcookie("block".$usuario,$cont,time()+60);
                        }
                    }else{
                        setcookie($usuario,1,time()+120);
                    }
                    header("Location: FormularioError.php");
                }
            }
        }      
            
        }

?>