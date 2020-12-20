<?php

$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];

 
$file=fopen("archivo.txt", "r");
$band=0; //para saber si la cuenta y contrasena estan en el archivo
while(!feof($file)){
    $linea=fgets($file);
    if ($linea != ""){
      $aux=preg_split("/[\s,]+/",$linea);   
                                            
      $user = $aux[0];
      $contrasena = $aux[1];
      echo $user . " " . $contrasena . "<br>";
      if ($user===$usuario && $contrasena === $palabra_secreta){            
            $band=1; break;
     }
    }
}   
fclose($file);

if ($band==1){
     
    session_start();
    $micarrito=[];

    $_SESSION["usuario"] = $usuario;
    $_SESSION["examen"] = 0;
    $_SESSION["admin"]=0;
    
    if($usuario == "admin"){
        $_SESSION["admin"] = 1;
    }
    header("Location: index.php");
    }else{
    
       header("Location: errorsesion.php");
    }
 
?>