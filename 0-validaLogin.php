<?php 
include "config.php";

if(isset($_POST['usuario']) || isset($_POST['senha'])) {
    if(strlen($_POST['usuario']) == 0) {
        echo "Preencha seu usuario";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cliente WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo sql: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
            
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['usuario'] = $usuario['usuario'];

            header("Location: 1-Home.php");

        } else {
            echo "Falha ao logar, usuário ou senha incorretos";
        }

    }
}
?>