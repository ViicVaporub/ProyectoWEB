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
    
</head>
<body>
   
   <header>
       <!-- Llamamos al encabezado por medio de include_once -->
        <?php include_once('encabezado.php');?>
    </header>
    
    <div class="fondo">
        <table  class="tablaconsolas" style="text-align:center; width: 100%; ">
            <th>HOLA LO ACABO DE MODIFICAR</th>
            <th>PRECIO</th>
            <th>ESPECIFICACIONES</th>
            <th>IMAGEN</th>
            <tr>
                <th>Xbox ONE</th>
                <th>$6999</th>
                <th>Arquitectura	64 bits <br> Compañía	AMD <br> Núcleos	8 núcleos<br> Subprocesos	8 procesos<br>Frec. base	1.6 GHz</th>
                <th><img src="images/xboxone.png" alt="" width="150px" height="150px"></th>
                <th><input type="submit" value="COMPRAR"></th>
            </tr>
             <tr>
                <th>Playstation 4</th>
                <th>$6999</th>
                <th>Procesador	CPU: AMD "Jaguar", 8 núcleos. <br> GPU: 1,84 TFLOPS, AMD Radeon <br>
                Memoria RAM	8GB GDDR5 <br> Almacenamiento	500GB, 1TB <br> Dimensiones	275 x 53 x 305 mm</th>
                <th><img src="images/play4.png" alt="" width="150px" height="150px"></th>
                <th><input type="submit" value="COMPRAR"></th>
            </tr> 
            <tr>
                <th>Xbox Series</th>
                <th>$13999</th>
                <th>PROCESADOR. CPU. CPU Zen 2 personaliza de 8 núcleos a 3,8 GHz (3,66 GHz con SMT) <br>
                MEMORIA Y ALMACENAMIENTO. Memoria. <br> GDDR6 de 16 GB con bus de 320 bits de ancho <br>
                FUNCIONALIDADES DE VIDEO. <br> Resolución de juego. Auténtico 4K
                PUERTOS Y CONECTIVIDAD. HDMI DISEÑO. <br> Dimensiones 15,1 cm x 15,1 cm x 30,1 cm.</th>
                <th><img src="images/series.png" alt="" width="150px" height="150px"></th>
                <th><input type="submit" value="COMPRAR"></th>
            </tr>  
            <tr>
                <th>Playstation 5</th>
                <th>$13999</th>
                <th>Procesador	CPU AMD Ryzen Zen 2 de ocho núcleos a 3.6GHz <br> Tarjeta Gráfica	AMD Radeon RDNA 2 GPU personalizada con 36 CU a 2.23 GHz (10.3 teraflops) <br> VRAM	16GB GDDR6/256-bit <br>Almacenamiento	825GB SSD <br>Unidad óptica	Sí, 4K Blu-ray</th>
                <th><img src="images/play5.png" alt="" width="150px" height="150px"></th>
                <th><input type="submit" value="COMPRAR"></th>
             </tr>        
        </table>
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