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
                <input name="palabra_secreta" id="passwordInput" placeholder="Contraseña" type="password" required="">
                <input type="hidden" name="array" value='<?php echo serialize($cuentas); ?>'>
                <br><br>
                <hr>
                <input type="submit" value="Iniciar sesión"><br>
                <div class="form-group text-center">
                                   <hr><hr>


                    <h4>Crear una cuenta</h4>
                    <small><a href="#" data-toggle="modal" data-target="#modalPassword">REGISTRARME</a></small>
                </div>
            </form>

            <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 id="n-color">Registro</h3>
                            <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form class="form" role="form" action="registro.php" method="post" name="clave">
                            <div class="modal-body">

                                <p>Nombre: <input type="text" name="login" style="margin-left: 14px;"> </p>
                                <p>Contraseña: <input type="password" name="contra" style="margin-left: 10px;"> </p>
                                <p>Confirmacion: <input type="password" name="contra" style="margin-left: 10px;" placeholder="Confirmacion de contraseña"> </p>
                                <p>Correo: <input type="text" name="correo" style="margin-left: 23px;"> </p>
                                
                                <p>Contraseña: <input type="password" name="contra1" style="margin-left: 10px;"> </p>
                                <p color="red">las contraseñas no coinciden</p>
                                <p>Verificar Contraseña: <input type="password" name="contra2" style="margin-left: 10px;"> </p>
                                <p>Correo: <input type="email" name="correo" style="margin-left: 23px;"> </p>

                            </div>
                            <div class="modal-footer">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                                </div>
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