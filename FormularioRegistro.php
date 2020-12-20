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

<section style="background-color: rgb(148, 147, 147) ;">

<h1>Registro De Usuario</h1>

  <form action="">
  <label for="fname">Nombre(s)</label>
    <input type="text" id="fname" name="nombre" placeholder="Tu Nombre Completo.."> <br>

    <label for="fname">Correo Electronico</label>
    <input type="email" id="fname" name="email" placeholder="Tu Correo Electronico.."> <br>

    <label for="fname">Usuario</label>
    <input type="text" id="fname" name="usuario" placeholder="Tu Usuario.."><br>

    <label for="lname">Contraseña</label>
    <input type="password" id="lname" name="contrasena" placeholder="Tu Contraseña..">




  </form>

</section>


<footer>
       <!-- Llamamos al pie de pagina por medio de include_once -->
        <?php include_once('footer.php');?>
</footer>


</body>
</html>