<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Font awsome -->
    <script src="https://kit.fontawesome.com/f5316de33f.js" crossorigin="anonymous"></script>
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>FAQ Gisci</title>
    <link rel="stylesheet" href="css/estilo.css">    
    <link rel="stylesheet" href="css/estilo_Info.css">  
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
    <h1 class="">Preguntas Frecuentes (FAQ)</h1>
   <br>
   <h3 class="pregunta1" >¿En que podemos Ayudarte?</h3>
    <div class="contenedor">
        <div class="lista">
            <div class="item">
                <p class="boton-item active">¿Donde puedo realizar los pagos?</p>
                <div class="contenido-item">
                    -Oxxo <br>
                    -Pagos en efectivo <br>
                    -Pago con tarjeta de credito <br>
                    -Paypal
                </div>
            </div>
            <div class="item">
                <p class="boton-item active">¿Cuanto tiempo tarda en llegar un producto?</p>
                <div class="contenido-item">
                    -Nuestros productos tienen un tiempo de envio maximo de 2 días de lunes a viernes <br>
                    (No realizamos envios los fines de semana)
                </div>
            </div>
            <div class="item">
                <p class="boton-item active">¿Cuanto tiempo tienen de garantía nuestros productos?</p>
                <div class="contenido-item">
                    -Nuestros productos tienen un tiempo de envio maximo de 2 días de lunes a viernes <br>
                    (No realizamos envios los fines de semana)
                </div>
            </div>
        </div>
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