<?php
 $destino= "ricardomunoz2435@gmail.com";
 $name    = $_POST['name'];
 $email   = $_POST['email'];
 $subject = $_POST['subject']; 
 $message = $_POST['message'];
 $contenido = "Nombre: " . $name . "\nCorreo: " . $email . "\nMensaje: " . $message;
 $asunto = "Gracias por Contactarnos";
 $destinatario = $email;


 $cupon2= "<!DOCTYPE html>
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
     <img src='https://thumbs.dreamstime.com/b/signo-de-neon-let-colorido-con-controlador-juegos-el-ne%C3%B3n-permite-jugar-juego-para-sus-proyectos-en-estilo-retro-futurista-158629686.jpg' alt='' width='700px' height='450px'>
     <section style='background-color: #350c0c; margin-top: -25px;   width: 700px; height: 350px;'>
         <br><br><h2 style='color:white ; margin-left:220px;'>Gracias por Contactarnos</h2>
         <h2 style='color:white; margin-left:20px; text-align: center;'>Por animarte a hablar con nosotros <br> te regalamos un cupon</h2>
       <br><br>  <h1 style='color:white; margin-left:20px; text-align: center;'>Cupon: VALIENTE</h1>
     </section>
 </body>
 </html>"; 

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ggisi@gmail.com" . "\r\n";
$headers .= "Cc: ggisi@gmail.com" . "\r\n";

 mail($destino,$subject,$contenido);

 mail($destinatario, $asunto, $cupon2, $headers);

 header("Location: home.php");
?>