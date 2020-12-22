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

     
      <h1 class="form-group text-center">Inicia sesión</h1>
                       <hr><hr>


        <div class="form-group text-center">
            

            <form role="form" action="login.php" method="post">

                <h3>USUARIO:</h3>

                <input name="usuario" id="emailInput" placeholder="Usuario" type="text" required="">
                <!-- <input name="usuario" type="text" placeholder="Escribe tu nombre de usuario"> -->
                <br>
                <h3>CONTRASEÑA:</h3>
                <input name="Contraseña" id="passwordInput" placeholder="Contraseña" type="password" required="">
                <input type="hidden" name="array" value='<?php echo serialize($cuentas); ?>'>
                <br><br>
                <hr>
                <input type="submit" value="Iniciar sesión"><br>
                <div class="form-group text-center">
    <center>
    <h2>Elige tu país:</h2>
        <a href="cookie2.php?pais=mx"><img src="images/mx.png" width="200px" height="100px" /></a>
        <a href="cookie2.php?pais=us"><img src="images/us.png" width="200px" height="100px"/></a>
        <a href="cookie2.php?pais=fr"><img src="images/fr.png" width="200px" height="100px"/></a>
    </center>
                                   <hr><hr>
                    <h4>Crear una cuenta</h4>
                    <small><a href="#" data-toggle="modal" data-target="#modalPassword">REGISTRARME</a></small>
                </div>
            </form>
            <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <br>
                   <form role="form" action="base.php" method="post" onsubmit="return comprobarclave();">
                            <div class="modal-body">
                                <label class="label" for="Nombre">Nombre:</label>
                                <input type="text" name="Nombre" id="Nombre" class="registro" placeholder="Nombre" required> 
                                <br><br>
                                <label class="label" for="Usuario">Usuario:</label>
                                <input type="text" name="Usuario" id="Usuario" class="registro" required> 
                                <br><br>
                                <label class="label" for="contra1">Contraseña:</label>
                                <input type="password" name="Contraseña" id="contra1" class="registro" required> 
                                <br><br>
                                <label class="label" for="contra2">Confirmacion:</label>
                                <input type="password" name="contra " id="contra2" class="registro" required> 
                                <br><br>
                                <label class="label" for="Correo">Correo:</label>
                                <input type="text" name="Correo" id="Correo" class="registro" required> 

                            </div>
 
                                <div class="form-group">
                                    <button class="boton" type="submit" class="btn btn-primary btn-block">Enviar</button>
                                </div>

                        </form>
                    </div>
                </div>



        </div>
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