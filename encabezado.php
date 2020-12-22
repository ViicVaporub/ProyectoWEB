<?php 
    session_start(); 

?>
             

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
              <a class="navbar-brand" href="home.php">
                <img src="images/gigi.png" width="30" height="20" class="d-inline-block align-top" alt="">
                    Gisci
                  </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <li>
                  <?php
                    if(isset($_SESSION["usuario"])){
                        if($_SESSION["usuario"]== "Admin"){
                   echo '<a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   TOOLBAR
                   </a>
                   <div  class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" href="AltaProducto.php">ALTA PRODUCTO</a>
                     <a class="dropdown-item" href="modificar.php">MODIFICA PRODUCTO</a>
                     <a class="dropdown-item" href="modificarusuario.php">MODIFICA USUARIO</a>
                     <a class="dropdown-item" href="consolas.php">BORRAR USUARIO</a>
                     <a class="dropdown-item" href="grafica.php">GRAFICA</a>
                   </div>
                 </li>';
                        }
                    }
                    
                    ?>
                    </li>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="home.php" style="margin-left: 180px;">INICIO <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown" style="margin-left: 40px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      PRODUCTOS
                    </a>
                    <div class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="videojuegos.php">VIDEOJUEGOS</a>
                      <a class="dropdown-item" href="consolas.php">CONSOLAS</a>
                      <a class="dropdown-item" href="accesorios.php">ACCESORIOS Y COLECCIONABLES</a>
                    </div>
                  </li>
                  <li class="nav-item" style="margin-left: 40px;">
                    <a class="nav-link" href="contactanos.php">CONTACTANOS</a>
                  </li>
                  <li class="nav-item" style="margin-left: 40px;">
                    <a class="nav-link" href="FAQ.php">FAQ</a>
                  </li>
                  <li class="nav-item" style="margin-left: 40px;">
                    <a class="nav-link" href="Acercade.php">ACERCA DE</a>
                  </li>
                  <li class="nav-item" style="margin-left: 140px; margin-top: 4px;"> 
                  <form action="enviarsus.php" method="post">
                    <input class="susc" type="email" placeholder="Direccion Email" name="mail" id="mail" required> <button class="butsus" type="submit" > Suscribete Ahora</button>
                  </form>
                  </li>
                  <li class="nav-item">
                    <a href="carrito.php"><img src="images/Carritov3.png" alt="" width="35px" height="35px">
                    <span>
                        <?php 
                         if(isset($_SESSION['carrito'])){
                             echo count($_SESSION['carrito']);
                         }else{
                             echo 0;
                         }
                        ?>
                    </span>
                    </a>
                  </li>
                
                  
                </ul>
              </div>
              <div>
                   <div> 
                           <?php
                                if(isset($_SESSION["usuario"])){  
                                    echo'<div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;"> <i id="iconuser" class="far fa-user" style="font-size: 20px; color: #b3b2b2; margin-left: 5px; margin-right: 5px;"></i> Bienvenido(a) ' . $_SESSION["usuario"]; echo' 
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
                                            </div>
                                        </div>';      
                                }else{
                                    echo'<a href="FormularioRegistro.php"><input type="submit" value="Iniciar Sesión" class="isesion"></a>';
                                 }
                            ?>
                        </div>
              </div>
            </nav>