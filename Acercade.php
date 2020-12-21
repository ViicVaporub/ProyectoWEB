<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Font awsome -->
    <script src="https://kit.fontawesome.com/f5316de33f.js" crossorigin="anonymous"></script>
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="css/estilo.css">   
    <link rel="stylesheet" href="css/estilo_Info.css">   
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
    <h1>Acerca de nosotros</h1>
    <br>
    <div class="contenedor">
        <div class="lista">
            <div class="item">
                <p class="boton-item active">¿Quienes somos?</p>
                <div class="contenido-item">
                    Somos una empresa que se dedica a la venta de videojuegos online donde podras encontrar mas de 30 productos digitales para Xbox, Playstation,Blizzard, Steam y PC, desde juegos de lanzamiento hasta extra contenido, pagando en efectivo ya sea en oxxo o por tarjeta,<br> recibiendolo de inmediato
                </div>
            </div>
            <div class="item">
                <p class="boton-item active">¿Donde nos encontramos?</p>
                <div class="contenido-item">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3529.9867006754894!2d-102.31547562098287!3d21.91059513855945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ef1da1ab338d%3A0x89a0246637c42ddb!2sUniversidad%20Aut%C3%B3noma%20de%20Aguascalientes!5e0!3m2!1ses-419!2smx!4v1605579584995!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="item">
                <p class="boton-item active">Impressum</p>
                <div class="contenido-item">
                    Todas las marcas comerciales pertenecen a sus respectivos duelos. Todos los derechos reservados
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