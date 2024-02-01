<?php

 require "conexao.php";

?>

<html lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de cadastro de tênis</title>
    <link rel="stylesheet" type="text/css" href="cadastro_tenis.css">

<body>
    <h1>CADASTRO DE TÊNIS</h1>
    <h2>Insira as informações</h2>

    <form id="cadastrar_item" method="post">

        <label for="id">Código</label>
        <input type="number" name="id_tenis" id="cadastro_tenis" required>

        

        <label for="modelo">Modelo</label>
        <select name="modelo_tenis" id="modelo" required>

            <!-- <option value="1">Curtis vision</option>
            <option value="2">Jordan</option>
            <option value="3">Nike SB</option>
            <option value="4">Air Force</option> -->

        </select>

        <label for="medida_tenis">Tamanho do tênis</label>
        <input type="number" name="medida" id="medida_tenis" max="45" min="37">

        <label for="cor">Cor do tênis</label>
        <select name="cor_tenis" id="cor" required>

            <option value="1">Azul</option>
            <option value="2">Vermelho</option>
            <option value="3">Verde</option>
            <option value="4">Preto</option>

        </select>

        <input type="submit">
        
</body>

    <script src="index.js"></script>

</html>