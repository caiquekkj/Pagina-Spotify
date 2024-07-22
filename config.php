<?php 
$usuario = "root";
$senha = "";
$databse = "spotify";
$host = "localhost";

$mysqli = new mysqli($host, $usuario, $senha, $databse);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}


?>