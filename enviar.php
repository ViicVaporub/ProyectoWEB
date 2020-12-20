<?php
 $destino= "s.reynoso.hdz@gmail.com";
 $name    = $_POST['name'];
 $email   = $_POST['email'];
 $subject = $_POST['subject']; 
 $message = $_POST['message'];
 $contenido = "Nombre: " . $name . "\nCorreo: " . $email . "\nMensaje: " . $message;
 mail($destino,$subject,$contenido);

 header("Location: home.php");
?>