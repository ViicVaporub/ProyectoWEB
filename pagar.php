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
       <table style="width:100%">
       <th>
        <h2 style="padding:20px;">Pago con tarjeta</h2> <br> 
        <img src="images/visamaster.png" style="height:10%; width:10%; margin-left:30px;" alt="">
        <form role="form" action="DatosEnvio.php" method="post" onsubmit="verificarPasswords(); return false">
            <div class="modal-body">
            <label class="labe" for="NTarjeta">N° de Tarjeta:</label>
            <input type="text" name="NTarjeta" id="NTarjeta" class="registro" placeholder="NTarjeta" required> 
            <br><br>
            <label class="labe" for="Caducidad">Caducidad:</label>
            <input type="text" name="Caducidad" id="Caducidad" class="registro" required> 
            <br><br>
            <label class="labe" for="Codigos">Codigo de seguridad:</label>
            <input type="text" name="Codigos" id="Codigos" class="registro" required> 
            <br><br>
            <label class="labe" for="Titular">Titular de la tarjeta:</label>
            <input type="text" name="Titular " id="Titular" class="registro" required> 
            <br><br>
            <label class="labe" for="Direccion">Direccion:</label>
            <input type="text" name="Direccion" id="Direccion" class="registro" required> 
            <br><br>
            <label class="labe" for="Ciudad">Ciudad:</label>
            <input type="text" name="Ciudad " id="Ciudad" class="registro" required> 
            <br><br>
            <label class="labe" for="CodigoP">Codigo Postal:</label>
            <input type="text" name="CodigoP " id="CodigoP" class="registro" required> 
            <br><br>
            </div>
            <div class="form-group">
            <button class="boton" type="submit" class="btn btn-primary btn-block">Enviar</button>
            </div>
           
        </form>
           </th>
            <th style="margin-bottom:500px">
            <h2 style="padding:20px;">Pago con oxxo</h2> <br> 
            <img src="images/oxxo.png" style="height:5%; width:5%; margin-left:30px;" alt="">
            <p style="padding:20px;font-size:20px;">Deposita en este numero de cuenta: 6594 6452 4564 4841 </p>
            <button class="boton" type="submit" class="btn btn-primary btn-block">Enviar</button>
            </th>
        </table>
   <footer>
       <!-- Llamamos al pie de pagina por medio de include_once -->
        <?php include_once('footer.php');?>
    </footer>
   
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>