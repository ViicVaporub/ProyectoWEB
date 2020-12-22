<?php     
    $servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='u458624775_productos';

    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }
    $_SESSION["id"] = "";
    $_SESSION["producto"] = "";
    $_SESSION["imagen"] = "";
    $_SESSION["precio"] = "";
    $_SESSION["existencias"] = "";
    $_SESSION["tipo"] = "";

    $sql = 'SELECT * FROM carrito';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/modificar.css">
  <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/gigi.png">
</head>
<body>
     
      
   <header>
       <?php include_once('encabezado.php');?>
   </header>
    <form class="usuarios" action="AltaProducto.php" method='post'>
             <?php
    
    if(isset($_POST['mod'])){
        $uno = $_POST["id2"];
        $dos = $_POST["producto2"];
        $tres = $_POST["imagen2"];
        $cuatro = $_POST["precio2"];
        $cinco = $_POST["existencias2"];
        $seis = $_POST["tipo2"];

    
    $sql = "INSERT INTO usuario(id, producto, imagen, precio, existencias, tipo) VALUES ('$uno', '$dos', '$tres', '$cuatro','$cinco','$seis')";
    
    if(mysqli_query($conexion,$sql) === true){
        echo "Se creo la tabla correctamente";
    }else{
        echo " Error: " .$sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);     
          
    header("Location: index.php");

 ?>   
            <ul class="wrapper">
                <li class="form-row">
                <label for="id">ID</label>
                <input type="number" name="id" id="id" value="<?php echo $_SESSION["id"]; ?>">
                </li>
                <li class="form-row">
                <label for="producto">PRODUCTO</label>
                <input type="text" id="producto" name="producto" value="<?php echo $_SESSION["producto"]; ?>">
                </li>
                <li class="form-row">
                <label for="imagen">IMAGEN</label>
                <input type="text" id="imagen" name="imagen" value="<?php echo $_SESSION["imagen"]; ?>">
                </li>
                <li class="form-row">
                <label for="precio">PRECIO</label>
                <input type="number" id="precio" name="precio" value="<?php echo $_SESSION["precio"]; ?>">
                </li>
                <li class="form-row">
                <label for="existencias">EXISTENCIAS</label>
                <input type="number" id="existencias" name="existencias" value="<?php echo $_SESSION["existencias"]; ?>">
                </li>
                <li class="form-row">
                <label for="tipo">TIPO</label>
                <input type="text" id="tipo" name="tipo" value="<?php echo $_SESSION["tipo"]; ?>">
                </li>
                <li class="form-row">
                <button type="submit" name="mod">SUBIR</button>
                </li>
            </ul>
            </form>
            
            
    <footer>
        <?php include_once('footer.php');?>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>