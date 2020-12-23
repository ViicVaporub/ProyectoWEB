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
        <?php $tipo=$_GET['id'] ?>
    </header>
        <h2 style="padding:20px;">Datos de envio</h2> <br> 
        <form role="form" action="home.php" method="post" onsubmit="verificarPasswords(); return false">
            <?php if(isset($_SESSION['carrito'])){
            $total;
            $arregloc= $_SESSION['carrito'];
            for($i=0;$i<count($arregloc);$i++){
                ?><label class="labe" for="Caducidad">Producto: <?php echo $arregloc[$i]['Nombre'] ?> Precio <?php echo $arregloc[$i]['Precio'] ?></label>
                <?php $total+=$arregloc[$i]['Precio']*$arregloc[$i]['Cantidad']; 
            }
            ?>
            <br><br>
            <label class="labe" for="Caducidad">Total: <?php echo $total ?></label>

            <br><br>
            <label class="labe" for="Codigos">Total + 16% de impuestos: <?php echo $total*1.16 ?></label>
 
            <br><br>
            <label class="labe" for="Titular">Metodo de pago: <?php if($tipo==1){echo "Tarjeta"}else{ echo "Oxxo" }  ?></label>
            <br><br>
            <label class="labe" for="Titular">Descuento: </label>
            <br><br>
            <label class="labe" for="Titular">Total: <?php echo $total*1.16 ?></label>
            <br><br>
            <div class="form-group">
            <button class="boton" type="submit" class="btn btn-primary btn-block">SALIR</button>
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