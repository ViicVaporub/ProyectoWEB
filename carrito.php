<?php  
session_start();
$servidor = "localhost"; 
$nombreusuario = "root";
$password = "";
$bd = "u458624775_productos";

$conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);

if(!$conexion){
    die("Conexion fallida: " .  mysqli_connect_error());
}

 $sql = 'select * from carrito';
 if(isset($_SESSION['carrito'])){
     
 }else{
     if(isset($_GET['id'])){
         $resultado=$conexion->query('select * from productos where id='.$_GET['id'])or die($conexion->error); 
         $nombre=$fila['producto'];
         $precio=$fila['precio'];
         $imagen=$imagen['imagen'];
         $arreglo[]=array(
            'Id' => $_POST['id'],
            'Nombre' => $nombre,
            'Precio' => $precio, 
            'Imagen' => $imagen,
            'Cantidad' => 1
         );
         $_SESSION['carrito']=$arreglo;
     }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/f5316de33f.js" crossorigin="anonymous"></script>
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="css/estilo_tienda.css">     
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<body>
    <table style="width: 100%; margin-top: 10px; table-layout: fixed;">
       <?php 
        echo "si entro aqui 1";
        if(isset($_SESSION['carrito'])){
            echo "si entro aqui 2";
            $arregloc= $_SESSION['carrito'];
            for($i=0;$i<count($arregloc);$i++){
                echo "si entro aqui 3";
        ?>
        <tr>
            <th class="imagen" style="text-align: center; height: 150px;">Imagen</th>
            <th class="imagen" style="text-align: center; height: 150px;">Nombre</th>
            <th class="imagen" style="text-align: center; height: 150px;">Precio</th>
            <th class="imagen" style="text-align: center; height: 150px;">Cantidad</th>
            <th class="imagen" style="text-align: center; height: 150px;">Salir</th>
            <th class="botonf" style="text-align: center; height: 150px;"><input class="boton" type="submit" value="Eliminar del carrito"><img class="carrito" src="images/carrito.jpg" alt=""></th>
        </tr>
        <?php
        } }
        ?>    
    </table>
        
    
    
    
    
    
    
    <footer>
       <!-- Llamamos al pie de pagina por medio de include_once -->
        <?php include_once('footer.php');?>
    </footer>
    
</body>
</html>