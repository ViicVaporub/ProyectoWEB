<?php

$mail = $_POST['mail'];

$destinatario = "$mail";
$asunto= "Recuperar tu Contraseña!!";

$relink = "<!DOCTYPE html>
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
            <h2 style='font-family: 'Courier New, Courier, monospace;'>GGisci</h2>
        </div>
    </section>
    <img src='https://image.freepik.com/vector-gratis/juego-sobre-letrero-neon_191108-127.jpg' alt='' width='700px' height='300px'>
    <section style='background-color: rgb(10, 5, 27); margin-top: -25px;   width: 700px; height: 350px;'>
        <br><br> <h2 style='color:white; margin-left:220px;'>Recupera tu contraseña</h2>
        <h2 style='color:white; margin-left:20px; text-align: center;'>Entra al link de abajo para <br> recuperar tu contraseña</h2>
      <br><br>  <a href=''><h1 style='color:white; margin-left:20px; text-align: center;'>http://ggisci.online/nuevacontra.php</h1></a>
    </section>
</body>
</html>";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <$destinatario>" . "\r\n";
$headers .= "Cc: $destinatario" . "\r\n";

mail($destinatario, $asunto, $relink, $headers);

header("Location: home.php");
?>