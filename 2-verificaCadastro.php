<?php 

include "config.php";

if(isset($_POST['usuario']) || isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['usuario']) == 0) {
        echo "Por favor, preencha seu nome de usuário.";
    } else if (strlen($_POST['email']) == 0) {
        echo "Por favor, preencha seu e-mail.";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Por favor, preencha sua senha.";
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT usuario, email FROM cliente WHERE usuario = '$usuario' OR email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo sql: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade >= 1) {
            echo "Usuário ou e-mail ja cadastrados.";
            header("Location: 2-telaCadastro.php");
        } else {
            $sql_code = "INSERT INTO cliente (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo sql: " . $mysqli->error);

            header("Location: index.php");
        }

    }
}

?>