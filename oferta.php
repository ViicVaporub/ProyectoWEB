<?php 

$servidor = "localhost"; 
$nombreusuario = "u458624775_productos";
$password = "Breack20";
$bd = "u458624775_productos";

$conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);

$sql = 'select * from Carrito';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Font awsome -->
    <script src="https://kit.fontawesome.com/f5316de33f.js" crossorigin="anonymous"></script>
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Catalogo Gisci</title>
    <link rel="stylesheet" href="css/estilo_tienda.css">     
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/gigi.png">
    
</head>
<body class="fondo">
   
 
    
    <div>
      
       <img src="images/Anuncio.jpg"  style="width:100%; height: 200px;" alt="">
           <?php
        
            $d=mt_rand(1,10);
            $of=mt_rand(10,50);
            $resultado=$conexion->query('select * from productos where id='.$d);          
            $fila = mysqli_fetch_row($resultado);               
                $imagen = $fila[2];
            ?>
            <div style="position:fixed; top: 80px;
  right: 0;
  width: 200px;
  height: 100px;
  border: red 2px solid;
  margin: 0;">
               
                <a class="imagen"><img class="imgenhoverr" src="images/productos/<?php echo $imagen; ?>" alt=" " width="195" height="95"><p style="color : red;"><b>Oferta -<?php echo $of; ?>%</b></p></a>
                
                
            </div>    
    </div>
              
   
   
</body>
</html>