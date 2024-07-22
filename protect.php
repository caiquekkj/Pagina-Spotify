<?php 
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_usuario'])) {
    die("Você não esta logado.<p><a href=\"index.php\">Logar</a></p>");
}
?>
