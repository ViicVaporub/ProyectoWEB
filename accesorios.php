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
    
</head>
<body class="fondo">
   
   <header>
       <!-- Llamamos al encabezado por medio de include_once -->
        <?php include_once('encabezado.php');?>
    </header>
    
    <div>
       <img src="images/Anuncio.jpg"  style="width:100%; height: 200px;" alt="">
        <table class="tabla_tienda">
            <tr class="imagenes">
                <th><img  class="imghover" src="images/Redragon.jpg" alt="" width="80%" height="70%"></th>
                <th><img  class="imghover" src="images/Teclado.jpg" width="80%" height="70%" alt=""></th>
                <th><img  class="imghover" src="images/cascos.jpg" alt="" width="80%" height="70%" ></th>
                <th><img  class="imghover" src="images/silla.jpg" alt="" width="80%" height="70%"></th>
                <th><img  class="imghover" src="images/control.jpg" alt="" width="80%" height="70%"></th>
            </tr>
            <tr class="nombre">
                <th>Kit Mouse Gamer Redragon Centrophorus C/ Mousepad M601-ba</th>
                <th>Game Factor Teclado Mecánico Gamer KBG400-RD, Rainbow, Switch Red</th>
                <th>Auricular sv 5334</th>
                <th>Silla gamer RAIDMAX DK-706 BLACK/RED</th>
                <th>Xbox Elite Wireless Controller Series 2</th>
            </tr>
            <tr class="precio">
                <th>$2240</th>
                <th>$12480</th>
                <th>$3452</th>
                <th>$8921</th>
                <th>$1199</th>
            </tr>
            <tr class="carrito">
                <th><input class="boton" type="submit" value="Añadir al carrito"><img src="images/Carritotienda.jpg" alt=""></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"><img src="images/Carritotienda.jpg" alt=""></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"><img src="images/Carritotienda.jpg" alt=""></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"><img src="images/Carritotienda.jpg" alt=""></th>
                <th><input class="boton" type="submit" value="Añadir al carrito"><img src="images/Carritotienda.jpg" alt=""></th>
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