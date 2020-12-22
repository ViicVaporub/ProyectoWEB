

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
    
    $servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='u458624775_productos';

    $_SESSION["id"] = "";
    $_SESSION["Nombre"] = "";
    $_SESSION["Usuario"] = "";
    $_SESSION["Correo"] = "";


   
    //conexion a la base de datos
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    //conecion exitosa 
    /*revisar si traemos datos a instertar en la bd dependiendo de que el boton de enviar del formulario se le dio clic */
    
    if(isset($_POST['submit'])){
        
        $modificar = $_POST['modificar'];
        $_SESSION["modificar2"] = $modificar;
        $sql2 = "select * from usuario where id='$modificar'"; //hacemos con todo el contenido de la tabla
        $resultado = $conexion -> query($sql2); //aplicamos sentencia
        while( $fila = $resultado -> fetch_assoc() ){
            $_SESSION["id"] = $fila["id"];
            $_SESSION["Nombre"] = $fila["Nombre"];
            $_SESSION["Usuario"] = $fila["Usuario"];
            $_SESSION["Correo"] = $fila["Correo"];
        }
        
    }
    
    if(isset($_POST['mod'])){
        $uno = $_POST["id2"];
        $dos = $_POST["Nombre2"];
        $tres = $_POST["Usuario2"];
        $cuatro = $_POST["Correo2"];



        $modificarl = $_SESSION["modificar2"];
        
        $ne="update usuario set id='$uno', Nombre='$dos', Usuario='$tres', Correo='$cuatro' WHERE id='$modificarl'";
        $fin = $conexion -> query($ne);
    }
       

?>
    
    <div class="contenedor1">
        <div class="contenedor2">
            <div class="izquierdaAlta">

            <?php        
         //continuamos con la consulta de datos a la tabla usuarios
         //vemos datos en un tabla de html
         $sql = 'select * from usuario';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
         $resultado = $conexion -> query($sql); //aplicamos sentencia
         
         if ($resultado -> num_rows){ //si la consulta genera registros
         ?>
 
                
          <div class="izqAlta">      
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>  
            
           <legend>Modificar Productos</legend>
                <br>
                <select   class="custom-select" name='modificar' >
                
                <?php
                $salida='<table>';
                while( $fila = $resultado -> fetch_assoc() ){ //recorremos los registros obtenidos de la tabla
                    echo '<option value="'.$fila["id"].'">'.$fila["Nombre"].'</option>';
                    //proceso de concatenacion de datos
                    $salida.= '<tr>';
                    $salida.= '<td>'. $fila['id'] . '</td>';
                    $salida.= '<td>'. $fila['Nombre'] . '</td>';
                    $salida.= '<td>'. $fila['Usuario'] . '</td>';
                    $salida.= '<td>'. $fila['Correo'] . '</td>';
                    $salida.= '</tr>';
                    }//fin while   
                    $salida.= '</table>';
                ?>
                </select>
                <br><br>
                <button type="submit" value="submit" name="submit">Modificar</button>               
            </form>
            </div> 
         <?php
        
         }
         else{
             echo "no hay datos";
         }
        
?>
        </div>
            <div class="izquierdaBaja">
                 <?php echo $salida ?>
            </div>
        </div>
        <div class="derecha">
        
            <form class="estiloformulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
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
        </div>
    </div>
    
    <footer>
        <?php include_once('footer.php');?>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>