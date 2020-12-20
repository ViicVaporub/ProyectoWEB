<?php

$mail = $_POST['mail'];

$destinatario = "$mail";
$asunto= "Gracias por Suscribirte a nuestra WEB";

$carta = "De Parte de nuestra Pagina WEB \n";
$carta .= "Gracias por Suscribirte \n";
$carta .= "Ten te regalamos un cupon. \n";
$carta .= "Cupon: JUEGAPRIMERO";

mail($destinatario, $asunto, $carta);



?>