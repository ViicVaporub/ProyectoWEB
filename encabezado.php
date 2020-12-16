<?php 

    #Iniciar sesión para usar $_SESSION
    session_start(); 

?>
             

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
              <a class="navbar-brand" href="inicio.php">
                <img src="images/gisci.jpg" width="30" height="20" class="d-inline-block align-top" alt="">
                    Gisci
                  </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="inicio.php" style="margin-left: 320px;">INICIO <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown" style="margin-left: 40px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      PRODUCTOS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="Cshare.php">VIDEOJUEGOS</a>
                      <a class="dropdown-item" href="html.php">CONSOLAS</a>
                      <a class="dropdown-item" href="java.php">ACCESORIOS Y COLECCIONABLES</a>
                    </div>
                  </li>
                  <li class="nav-item" style="margin-left: 40px;">
                    <a class="nav-link" href="contactanos.php">CONTACTANOS</a>
                  </li>
                  <li class="nav-item" style="margin-left: 40px;">
                    <a class="nav-link" href="Acercade.php">ACERCA DE</a>
                  </li>
                  <li>
                  <?php
                    if(isset($_SESSION["admin"])){
                        if($_SESSION["admin"]==1){
                   echo '<li class="nav-item" style="margin-left: 50px;">;
                    <a class="nav-link" href="admin.php">RESULTADOS</a>
                  </li>';
                        }
                    }
                    
                    ?>
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
                                    echo'<a href="form.php"><input type="submit" value="Iniciar Sesión" class="isesion"></a>';
                                 }
                            ?>
                        </div>
              </div>
            </nav>