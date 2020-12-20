<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Font awsome -->
    <script src="https://kit.fontawesome.com/f5316de33f.js" crossorigin="anonymous"></script>
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Gisci</title>
    <link rel="stylesheet" href="css/estilo_tienda.css">     
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    
</head>
<body class="fondo">
   
   <header>
       <!-- Llamamos al encabezado por medio de include_once -->
        <?php include_once('encabezado.php');?>
    </header>
    
    <div>
        <table class="tabla_tienda">
            <tr class="imagenes">
                <th><img  class="imghover" src="images/smash.jpg" alt="" width="80%" height="40%"></th>
                <th><img  class="imghover" src="images/GTA.jpg" width="80%" height="40%" alt=""></th>
                <th><img  class="imghover" src="images/cod.jpg" alt="" width="80%" height="40%" ></th>
                <th><img  class="imghover" src="images/halo.jpg" alt="" width="80%" height="40%"></th>
                <th><img  class="imghover" src="images/ow.jpg" alt="" width="80%" height="40%"></th>
            </tr>
            <tr class="nombre">
                <th>Super Smash Bros</th>
                <th>GTA V</th>
                <th>Call of Duty Modern Warfare</th>
                <th>Halo 5</th>
                <th>Overwatch</th>
            </tr>
            <tr class="precio">
                <th>$1199</th>
                <th>$899</th>
                <th>$799</th>
                <th>$699</th>
                <th>$499</th>
            </tr>
            <tr class="carrito">
                <th><input class="boton" type="submit" value="Añadir al carrito"></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"></th>
            </tr>
            <tr class="imagenes">
                <th><img  class="imghover" src="images/spider.jpg" alt="" width="80%" height="40%"></th>
                <th><img  class="imghover" src="images/fifa.jpg" width="80%" height="40%" alt=""></th>
                <th><img  class="imghover" src="images/cyber.jpg" alt="" width="80%" height="40%" ></th>
                <th><img  class="imghover" src="images/gears.jpg" alt="" width="80%" height="40%"></th>
                <th><img  class="imghover" src="images/ass.jpg" alt="" width="80%" height="40%"></th> 
            </tr>
            <tr class="nombre">
                <th>Spider Man</th>
                <th>Fifa 21</th>
                <th>Cyberpunk</th>
                <th>Gears of war 5</th>
                <th>Assasins</th>
            </tr>
            <tr class="precio">
                <th>$1199</th>
                <th>$799</th>
                <th>$1299</th>
                <th>$699</th>
                <th>$1199</th>
            </tr>
            <tr class="carrito">
                <th><input class="boton" type="submit" value="Añadir al carrito"></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"></th>
            </tr>
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