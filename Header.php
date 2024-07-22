<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Spotify</title>
</head>
<body>
    <style>

        * {
            color: white;
            font-family: 'Fira Sans', monospace;
        }

        body {
            background-image: linear-gradient(#272727, #000000 100%)
        }

        input {
            background-color: transparent; /* Define o fundo como transparente */
            border: 2px solid white; /* Define a borda como branca e com espessura de 2 pixels */
            color: white; /* Define a cor do texto como branca */
            padding: 10px; /* Adiciona algum espaço interno ao input (opcional) */
            font-size: 16px; /* Define o tamanho da fonte (opcional) */
            outline: none; /* Remove o contorno padrão do input ao focar */
            border-radius: 4px; /* Adiciona bordas arredondadas (opcional) */
            margin-bottom: 15px;
            margin-left: 21%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            margin-left: 21%;
            font-size: 13px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .formulario {
            display: flex;
            justify-content: center;
            background-color: #161616;
            width: 65vh;
            height: 80vh;
            border-radius: 40px;
        }

            .logoSpotify {
                display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10%;
            margin-left: 42%;
            width: 4vh;
            height: 4vh;
        }

        .linkCadastro {
            color: white;
        }

        .textoCadastro {
            color: grey;
        }

        .buttomLogin {
            color: black;
            background-color: #50CF01;
            border-radius: 30px;
            width: 45vh;
            height: 7vh;
            font-size: 17px;
            margin-left: 0%;
        }

        .texth1 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>