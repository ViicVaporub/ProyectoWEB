<?php

$mail = $_POST['mail'];

$destinatario = "$mail";
$asunto= "Gracias por Suscribirte a nuestra WEB";

$carta = "<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Document</title>
</head>
<body>
    <section>
        <div style='display: flex; align-items: center; width: 700px;'>
            <img src='http://ggisci.online/images/gigi.png' alt='' width='100px' height='100p'>
            <h2 style='font-family: 'Courier New', Courier, monospace;'>GGisci</h2>
        </div>
    </section>
    <img src='https://cdn.discordapp.com/attachments/413605878101573634/790133833709125632/Retro.jpg' alt='' width='700px' height='300px'>
    <section style='background-color: #323232; margin-top: -25px;   width: 700px; height: 350px;'>
        <br><br> <h2 style='color:white; margin-left:220px;'>Gracias por Suscribirte!!!</h2>
        <h2 style='color:white; margin-left:20px; text-align: center;'>Por suscribirte a nuestra pagina web te <br> regalamos un cupon</h2>
      <br><br>  <h1 style='color:white; margin-left:20px; text-align: center;'>Cupon: PRIMERAVEZ</h1>
    </section>
</body>
</html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <$destinatario>" . "\r\n";
$headers .= "Cc: $destinatario " . "\r\n";


mail($destinatario, $asunto, $carta, $headers);

header("Location: home.php");
?>