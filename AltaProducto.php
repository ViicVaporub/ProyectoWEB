<?php     
    $servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='u458624775_productos';

    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }
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
<?php
    if(!empty($_POST)){
        $alert='';
        if(empty($_POST['id']) || empty($_POST['Nombre']) || empty($_POST['Usuario']) || empty($_POST['Correo']) || empty($_POST['Contraseña'])){
            $alert= '<p class="msg_error">Todos los campos son obligatorios.</p>';
        }else{
            $id = $_POST['id'];
            $Nombre = $_POST['Nombre'];
            $Usuario = $_POST['Usuario'];
            $Correo = $_POST['Correo'];
            $Contrasena = $_POST['Contrasena'];
            
            $query_insert = mysqli_query($conection, "INSERT INTO usuario)(id,Nombre,Usuario,Correo,Contrasena)
                VALUES('$id','$Nombre','$Usuario','$Correo','$Contrasena')");
            if($query_insert){
                $alert = '<p class="msg_save">Usuario Guardado</p>';
            }else{
                $alert='<p class="msg_error">Error al guardar el archivo</p>';
            }
        }
        mysqli_close($conection);    
    }
 ?>
    <form class="usuarios" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
            <ul class="wrapper">
                <li class="form-row">
                <label for="id">ID</label>
                <input type="number" name="id2" id="id" value="<?php echo $_SESSION["id"]; ?>">
                </li>
                <li class="form-row">
                <label for="Nombre">NOMBRE</label>
                <input type="text" id="Nombre" name="Nombre2" value="<?php echo $_SESSION["Nombre"]; ?>">
                </li>
                <li class="form-row">
                <label for="Usuario">USUARIO</label>
                <input type="text" id="Usuario" name="Usuario2" value="<?php echo $_SESSION["Usuario"]; ?>">
                </li>
                <li class="form-row">
                <label for="Correo">CORREO</label>
                <input type="text" id="Correo" name="Correo2" value="<?php echo $_SESSION["Correo"]; ?>">
                </li>

                <li class="form-row">
                <button type="submit" name="mod">Modificar</button>
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