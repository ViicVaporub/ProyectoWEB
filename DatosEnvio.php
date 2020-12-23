<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Font awsome -->
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
        <?php $tipo=$_GET['id']; ?>
        <h2 style="padding:20px;">Datos de envio</h2> <br> 
        <form role="form" action="Notacompra.php" method="get" >
            <div class="modal-body">
            <label class="labe" for="NTarjeta">Usuario:</label>
            <input type="text" name="NTarjeta" id="NTarjeta" class="registro" placeholder="NTarjeta" required> 
            <br><br>
            <label class="labe" for="Caducidad">Direccion:</label>
            <input type="text" name="Caducidad" id="Caducidad" class="registro" required> 
            <br><br>
            <label class="labe" for="Codigos">Colonia:</label>
            <input type="text" name="Codigos" id="Codigos" class="registro" required> 
            <br><br>
            <label class="labe" for="Titular">Codigo Postal:</label>
            <input type="text" name="Titular " id="Titular" class="registro" required> 
            <br><br>
            <label class="labe" for="Titular">Añadir Cupon (Campo no requerido) :</label>
            <input type="text" name="Titular " id="Titular" class="registro"> 
            <br><br>
            </div>
            <div class="form-group">
            <button class="boton" type="submit" class="btn btn-primary btn-block">Enviar</button>
            </div>
        </form>
   <footer>
       <!-- Llamamos al pie de pagina por medio de include_once -->
        <?php include_once('footer.php');?>
    </footer>
   
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>