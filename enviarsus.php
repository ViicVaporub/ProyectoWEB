<?php

$mail = $_POST['mail'];

$destinatario = "$mail";
$asunto= "Gracias por Suscribirte a nuestra WEB";

$carta = print "<section>
                    <div style='display: flex; align-items: center; margin-left: 570px; width: 700px;'>
                       <img src='images/gigi.png' alt='' width='100px' height='100p'>
                       <h2 style='font-family: 'Courier New';'>Gisi</h2>
                    </div>
                </section>
                <img src='images/Retro.jpg' alt='' width='700px' height='300px' style='margin-left: 571px;'>
                <section style='background-color:  #323232; margin-top: -25px;   width: 700px; height: 350px; margin-left: 570px;'>
                      <br><br> <h2 style='color:white; margin-left:220px;'>Gracias por Suscribirte!!!</h2>
                      <h2 style='color:white; margin-left:20px; text-align: center;'>Por suscribirte a nuestra pagina web te <br> regalamos un cupon</h2>
                    <br><br>  <h1 style='color:white; margin-left:20px; text-align: center;'>Cupon: PRIMERAVEZ</h1>
                </section>";


mail($destinatario, $asunto, $carta);

header("Location: home.php");
?>