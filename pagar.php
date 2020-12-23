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
    <form action="/action_page.php" style="text-align:center; background='visa.png';">

  <h1>Pago con tarjeta de credito</h1>
<a href=""><img src="images/visa.png" alt="" height="100px"></a>
 <a href=""><img src="images/mastercard.png" alt="" height="100px"></a>
  <h3>Datos de pago con tarjeta de credito</h3>
      Nº de Tarjeta 
  <input type="text" style="background-color: gray;" name="ndetarjeta"> <br> <br>
  Caducidad:
  	<input type="date">
  	<br><br>    
  	Codigo de seguridad:
  	<input type="text" style="background-color: gray;" name="codigo"> <br> <br>
  	Titular de la tarjeta:
  	<input type="text" style="background-color: gray;" name="titular"> <br> <br>
  	Direccion:
  	<input type="text" style="background-color: gray;" name="dir"> <br> <br>
  	Ciudad:
  	<input type="text" style="background-color: gray;" name="ciudad"> <br> <br>
  	Codigo Postal: 
  	<input type="text" style="background-color: gray;" name="nombredelacaja"> <br> <br>
       <input type="button" value="Pagar" onclick="location.href="/> <br> <br>
        <h2>Si quieres pagar en Oxxo</h2> <br> 
        Deposita en este numero de cuenta: 6594 6452 4564 4841 
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