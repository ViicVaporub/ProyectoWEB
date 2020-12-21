<?php

if(!$_COOKIE['pais-seleccionado']){
header('location:cookie.php');
}else if($_COOKIE['pais-seleccionado'] == 'mx'){
header('Location:FormularioRegistro.php');
}else if($_COOKIE['pais-seleccionado'] == 'us'){
header('Location:FormularioRegistro.php');
}else if($_COOKIE['pais-seleccionado'] == 'fr'){
header('Location:FormularioRegistro.php');
}

?>