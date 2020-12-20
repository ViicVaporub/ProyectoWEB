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
            <tr class="imagenesconsolas">
                <th><img  class="imghover" src="images/xboxone.png" alt="" width="80%" height="40%"></th>
                <th><img  class="imghover" src="images/play4.png" width="80%" height="40%" alt=""></th>
                <th><img  class="imghover" src="images/series.png" alt="" width="80%" height="40%" ></th>
                <th><img  class="imghover" src="images/play5.png" alt="" width="80%" height="40%"></th>
                <th><img  class="imghover" src="images/nintendo.png" alt="" width="80%" height="40%"></th>
            </tr>
            <tr class="nombre">
                <th>Xbox One</th>
                <th>Playstation 4</th>
                <th>Xbox Series</th>
                <th>Playstation 5</th>
                <th>Nintendo Switch</th>
            </tr>
            <tr class="precio">
                <th>$7999</th>
                <th>$7999</th>
                <th>$13999</th>
                <th>$13999</th>
                <th>$5999</th>
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