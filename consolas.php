<?php 

$servidor = "localhost"; 
$nombreusuario = "u458624775_productos";
$password = "Breack20";
$bd = "u458624775_productos";

$conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);

$sql = 'select * from Carrito';
$resultado = $conexion -> query($sql);

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
   
   <header>
       <!-- Llamamos al encabezado por medio de include_once -->
        <?php include_once('encabezado.php');?>
    </header>
    
    <div>
       <img src="images/Anuncio.jpg"  style="width:100%; height: 200px;" alt="">
        <table class="tablita">
           <?php
            while($fila = $resultado -> fetch_assoc()){
                $tipo = $fila['tipo'];
                if($tipo==2){
                $imagen = $fila['imagen'];
                $consola = $fila['producto'];
                $precio = $fila['precio'];
                $id = $fila['id'];
            ?>
            <tr>
                <th class="imagen" style="text-align: center; height: 150px;"><img class="imgenhover" src="images/productos/<?php echo $imagen; ?>.jpg" alt="" width="60%" height="90%"></th>
                <th class="nombre" style="text-align: center; height: 150px;"> <?php echo $consola ?></th>
                <th class="precio" style="text-align: center; height: 150px;"> Mex$ <?php echo $precio ?> </th>
                <th><a href="carrito.php?id=<?php echo $id ?>" >Añadir al carrito</a></th>
            </tr>
            <?php
            }}
            ?>    
        </table>
    </div>
              
   <footer>
       <!-- Llamamos al pie de pagina por medio de include_once -->
        <?php include_once('footer.php');?>
    </footer>
   
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>