<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <script src="https://kit.fontawesome.com/f5316de33f.js" crossorigin="anonymous"></script>
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Gisci</title>
    <link rel="stylesheet" href="css/estilo.css"> 
    <link rel="stylesheet" href="css/estilo_registro.css">      
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

     <img src="images/Anuncio3.jpg"  style="width:100%;" alt="">
        <br><br>
        <h1 style="font-family: monospace;" class="form-group text-center">¡Bienvenido!</h1>
        <div class="form-group text-center">
           <form role="form" action="AltaProducto.php" method="post">
            <ul class="wrapper">
                <li class="form-row">
                <label for="id">ID</label>
                <input type="number" name="id" id="id">
                </li>
                <li class="form-row">
                <label for="producto">PRODUCTO</label>
                <input type="text" id="producto" name="producto">
                </li>
                <li class="form-row">
                <label for="imagen">IMAGEN</label>
                <input type="text" id="imagen" name="imagen">
                </li>
                <li class="form-row">
                <label for="precio">PRECIO</label>
                <input type="number" id="precio" name="precio">
                </li>
                <li class="form-row">
                <label for="existencias">EXISTENCIAS</label>
                <input type="number" id="existencias" name="existencias">
                </li>
                <li class="form-row">
                <label for="tipo">TIPO</label>
                <input type="text" id="tipo" name="tipo">
                </li>
                <li class="form-row">
                <button type="submit" name="mod">Subir</button>
                </li>
            </ul>
 
                                <div class="form-group">
                                    <button class="boton" type="submit" class="btn btn-primary btn-block">Enviar</button>
                                </div>

                        </form>
            

            
          
        <br><br>
    </div><br><br>


<footer>
       <!-- Llamamos al pie de pagina por medio de include_once -->
        <?php include_once('footer.php');?>
</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/comprobarclave.js"></script>
</body>
</html>