<?php
setcookie('pais-seleccionado', $_GET['pais'],time()+86400,'/');
header('Location:cookie3.php');

?>