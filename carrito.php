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
        <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/gigi.png">
</head>
<body>
   <header>
       <!-- Llamamos al encabezado por medio de include_once -->
        <?php include_once('encabezado.php');?>
    </header>
   
   <?php  
        $servidor = "localhost"; 
        $nombreusuario = "root";
        $password = "";
        $bd = "u458624775_productos";

        $conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);

        $sql = 'select * from carrito';
        if(isset($_SESSION['carrito'])){
            if(isset($_GET['id'])){
                $arreglo=$_SESSION['carrito'];
                $encontro=false;
                for($i=0;$i<count($arreglo);$i++){
                    if($arreglo[$i]['Id'] == $_GET['id']){
                        $encontro=true;
                        $numero=$i;
                    }
                }
                if($encontro==true){
                    $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
                    $_SESSION['carrito']=$arreglo;
                }else{
                    $resultado=$conexion->query('select * from productos where id='.$_GET['id'])or die($conexion->error); 
                    $fila = mysqli_fetch_row($resultado); 
                    $nombre=$fila[1];
                    $precio=$fila[3];
                    $imagen=$fila[2];
                    $arreglonuevo=array(
                    'Id' => $_GET['id'],
                    'Nombre' => $nombre,
                    'Precio' => $precio, 
                    'Imagen' => $imagen,
                    'Cantidad' => 1
                );
                    array_push($arreglo,$arreglonuevo);
                    $_SESSION['carrito']=$arreglo;
                }
            }
        }else{
        if(isset($_GET['id'])){
         $resultado=$conexion->query('select * from productos where id='.$_GET['id'])or die($conexion->error); 
         $fila = mysqli_fetch_row($resultado); 
         $nombre=$fila[1];
         $precio=$fila[3];
         $imagen=$fila[2];
         $arreglo[]=array(
            'Id' => $_GET['id'],
            'Nombre' => $nombre,
            'Precio' => $precio, 
            'Imagen' => $imagen,
            'Cantidad' => 1
         );
         $_SESSION['carrito']=$arreglo;
     }
 }
?>
   
   
    <table style="width: 100%; margin-top: 10px; table-layout: fixed;">
       <?php 
        if(isset($_SESSION['carrito'])){
            $arregloc= $_SESSION['carrito'];
            for($i=0;$i<count($arregloc);$i++){
        ?>
        <tr>
            <th class="imagen" style="text-align: center; height: 150px;"><img class="imgenhover" src="images/productos/<?php echo $arreglo[$i]['Imagen']; ?>" alt="" width="60%" height="90%"></th>
            <th class="imagen" style="text-align: center; height: 150px;"><?php echo $arregloc[$i]['Nombre'] ?></th>
            <th class="imagen" style="text-align: center; height: 150px;">Mex$ <?php echo $arregloc[$i]['Precio'] ?></th>
            <th class="imagen" style="text-align: center; height: 150px;"><input type="text" value="<?php echo $arregloc[$i]['Cantidad'] ?>"></th>
            <th class="imagen" style="text-align: center; height: 150px;">Subtotal: <?php echo $arreglo[ $i]['Precio']*$arreglo[$i]['Cantidad'] ?></th>
            <td><a href="#" class=" btnEliminar" data-id="<?php echo $arregloc[$i]['Id'] ?>">X</a></td>
        </tr>
        <?php
        } }
        ?> 
        
    </table>
        
    
    
    
    
    
    
    <footer>
       <!-- Llamamos al pie de pagina por medio de include_once -->
        <?php include_once('footer.php');?>
    </footer>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script>
        $(document).ready(function(){
           $(".btnEliminar").click(function(event){
               event.preventDefault();
               var id=$(this).data('id');
               var boton = $(this);   
               $.ajax({
                   type:'POST',
                   url:'eliminarCarrito.php',
                   data:{
                    id:id
                   }
               }).done(function(respuesta){
                boton.parent('td').parent('tr').remove();
               });
           });
        });
    </script>
</body>
</html>