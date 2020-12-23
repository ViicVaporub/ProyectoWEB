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
   
   <?php  
        session_start();
        if(isset($_SESSION['usuario'])){
        }else{
            header("location:FormularioRegistro.php");
        }
        $servidor = "localhost"; 
        $nombreusuario = "u458624775_productos";
        $password = "Breack20";
        $bd = "u458624775_productos";

        $conexion =  mysqli_connect($servidor, $nombreusuario, $password, $bd);


        $sql = 'select * from Carrito';
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
                    $resultado=$conexion->query('select * from Carrito where id='.$_GET['id'])or die($conexion->error); 
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
         $resultado=$conexion->query('select * from Carrito where id='.$_GET['id'])or die($conexion->error); 
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
   <header>   
   <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
              <a class="navbar-brand" href="home.php">
                <img src="images/gigi.png" width="30" height="20" class="d-inline-block align-top" alt="">
                    Gisci
                  </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <li>
                  <?php
                    if(isset($_SESSION["usuario"])){
                        if($_SESSION["usuario"]== "Admin"){
                   echo '<a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   TOOLBAR
                   </a>
                   <div  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" href="AltaForm.php">ALTA PRODUCTO</a>
                   <a class="dropdown-item" href="bajaform.php">BAJA PRODUCTO</a>
                     <a class="dropdown-item" href="modificar.php">MODIFICA PRODUCTO</a>
                     <a class="dropdown-item" href="modificarusuario.php">MODIFICA USUARIO</a>
                     <a class="dropdown-item" href="grafica.php">GRAFICA</a>
                   </div>
                 </li>';
                        }
                    }
                    
                    ?>
                    </li>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="home.php" style="margin-left: 180px;">INICIO <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown" style="margin-left: 40px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      PRODUCTOS
                    </a>
                    <div class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="videojuegos.php">VIDEOJUEGOS</a>
                      <a class="dropdown-item" href="consolas.php">CONSOLAS</a>
                      <a class="dropdown-item" href="accesorios.php">ACCESORIOS Y COLECCIONABLES</a>
                    </div>
                  </li>
                  <li class="nav-item" style="margin-left: 40px;">
                    <a class="nav-link" href="contactanos.php">CONTACTANOS</a>
                  </li>
                  <li class="nav-item" style="margin-left: 40px;">
                    <a class="nav-link" href="FAQ.php">FAQ</a>
                  </li>
                  <li class="nav-item" style="margin-left: 40px;">
                    <a class="nav-link" href="Acercade.php">ACERCA DE</a>
                  </li>
                  <li class="nav-item" style="margin-left: 140px; margin-top: 4px;"> 
                  <form action="enviarsus.php" method="post">
                    <input class="susc" type="email" placeholder="Direccion Email" name="mail" id="mail" required> <button class="butsus" type="submit" > Suscribete Ahora</button>
                  </form>
                  </li>
                  <li class="nav-item">
                    <a href="carrito.php"><img src="images/Carritov3.png" alt="" width="35px" height="35px">
                    <span>
                        <?php 
                         if(isset($_SESSION['carrito'])){
                                $conteo;
                                $arregloi= $_SESSION['carrito'];
                                for($i=0;$i<count($arregloi);$i++){
                                    $conteo+=$arregloi[$i]['Cantidad'];    
                                }
                             echo $conteo;
                         }else{
                             echo 0;
                         }
                        ?>
                    </span>
                    </a>
                  </li>
                
                  
                </ul>
              </div>
              <div>
                   <div> 
                           <?php
                                if(isset($_SESSION["usuario"])){  
                                    echo'<div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;"> <i id="iconuser" class="far fa-user" style="font-size: 20px; color: #b3b2b2; margin-left: 5px; margin-right: 5px;"></i> Bienvenido(a) ' . $_SESSION["usuario"]; echo' 
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
                                            </div>
                                        </div>';      
                                }else{
                                    echo'<a href="FormularioRegistro.php"><input type="submit" value="Iniciar Sesión" class="isesion"></a>';
                                 }
                            ?>
                        </div>
              </div>
            </nav>
   </header>
   
   
    <table style="width: 100%; margin-top: 10px; table-layout: fixed;">
       <?php 
        $total=0;
        if(isset($_SESSION['carrito'])){
            $arregloc= $_SESSION['carrito'];
            for($i=0;$i<count($arregloc);$i++){
                $total+=$arregloc[$i]['Precio']*$arregloc[$i]['Cantidad'];
        ?>
        <tr>
            <th class="imagen" style="text-align: center; height: 150px;"><img class="imgenhover" src="images/productos/<?php echo $arregloc[$i]['Imagen']; ?>.jpg" alt="" width="60%" height="90%"></th>
            <th class="imagen" style="text-align: center; height: 150px;">Nombre del producto: <?php echo $arregloc[$i]['Nombre'] ?></th>
            <th class="imagen" style="text-align: center; height: 150px;">Mex$ <?php echo $arregloc[$i]['Precio'] ?></th>
            <th class="imagen" style="text-align: center; height: 150px;">Cantidad: <?php echo $arregloc[$i]['Cantidad'] ?></th>
            <th class="imagen" style="text-align: center; height: 150px;">Subtotal: Mex$ <?php echo $arregloc[$i]['Precio']*$arregloc[$i]['Cantidad'] ?></th>
            <th><a href="eliminarc.php?id=<?php echo $arregloc[$i]['Id'] ?>" class=" btnEliminar" id="<?php echo $arregloc[$i]['Id'] ?>">X</a></th>
        </tr>
        <?php
        } }
        ?> 
    </table>
    <form action="pagar.php">
        <table style="width:100%;table-layout: fixed;background-color:#343a40; height:60px">
            <th><p style="background-color:#343a40;  padding:30px; color:white">Total estimado Mex$ <?php echo $total ?></p></th>
            <th><input style="width:100%;height:100%; color:white; padding:30px; background-color:#343a40;" type="submit" value="Realizar pago"><br></th>
        </table>  
    </form> 
    
    
    
    
    
    
    <footer>
       <!-- Llamamos al pie de pagina por medio de include_once -->
        <?php include_once('footer.php');?>
    </footer>
    
    <script type="text/javascript" src="assets/js/jquery1.11/jquery-1.11.0.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="js/eliminaCarro.js"></script>
    <script>
        $(document).ready(function(){
           $(".btnEliminar").click(function(){
               var id=$this.id;
               var boton = $(this);   
               $.ajax({
                   url:'eliminarCarrito.php',
                   type:'POST',
                   data:{
                    $id:$this.id;
                   }
               }).done(function(){
                boton.parent('th').parent('tr').remove();
               });
           });
        });
    </script>
</body>
</html>