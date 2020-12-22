<?php

$servidor = "localhost"; 
$nombreusuario = "u458624775_RISVB";
$password = "Patas_123";
$bd = "u458624775_Productos";

$conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);

session_start();

        $usuario = $_POST["usuario"];
        $contra = $_POST["Contraseña"];
        $captcha = sha1($_POST["captchatext"]);
        $cookie_captcha = $_COOKIE["captcha"];
        $sql = 'SELECT * FROM Usuario';
        $resultado = $conexion -> query($sql);

        while($fila = $resultado -> fetch_assoc()){
            $User = $fila['Usuario'];
            
            if(isset($_COOKIE["block".$usuario])){
                header("Location: FormularioBloqueado.php");
            }else{
                if(($usuario == $User) && ($captcha == $cookie_captcha)){
                $passwd = $fila['Contrasena'];
                if(password_verify($contra, $passwd)){

                    session_start();
                    $_SESSION["usuario"] = "$usuario";
                    setcookie("captcha",'',time()-3600);
                    header("Location: home.php");

                        session_start();
                        $_SESSION["usuario"] = "$usuario";
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
                    
                    
                }
            }else if($captcha != $cookie_captcha){
                    header("Location: FormularioCaptcha.php");
                }
        }      
            
        }

?>