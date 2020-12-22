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
</head>
<body>
    
<header>
       <!-- Llamamos al encabezado por medio de include_once -->
        <?php include_once('encabezado.php');?>
</header>
<img src="images/recuperarv2.jpg"  style="width:100%; height:500px" alt="">
        <br><br>
        <h1 style="font-family: monospace;" class="form-group text-center">Recupera Tu Contraseña</h1>
        <div class="form-group text-center">
            

            <form  action="enviare.php" method="post">

                <input  style="border-top:none;border-left:none;border-right:none;border-bottom-color:black;color:black; background-color:#b7b7b7; width:300px; height:30%; padding:10px;" name="correo" id="emailInput" placeholder="Correo Electronico" type="email" required="">
                <!-- <input name="usuario" type="text" placeholder="Escribe tu nombre de usuario"> -->
                <br><br>
                <input type="hidden" name="array" value='<?php echo serialize($cuentas); ?>'>
                <br><br>
                <hr>
                <input type="submit" value="Enviar Correo"><br>
            </form>
                <div class="form-group text-center">
                <hr>

            
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