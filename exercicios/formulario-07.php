<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saída de Dados</title>
</head>
<body>
    <h1>Exercício 07</h1>
    <hr>
<?php
if (empty($_POST["nome"]) || empty($_POST["preco"])) {
?>
        <p style="color: red;">Você deve preencher nome e o preço do produto</p>

        <p><a href='exercicio07.php'>Voltar</a></p>
<?php

} else {
    $fabricantes = filter_input(INPUT_POST, "fabricantes", FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT);
    $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
?>
    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?= $nome ?></li>
        <li>Preço: R$ <?=number_format($preco, 2, ',','.')?></li>
        <li>Fabricante: <?=$fabricantes?></li>
        <?php
        // Se a variável mensagem NÃO ESTIVER VAZIA, mostre o <li> com a mensagem
        if (!empty($mensagem)) {
        ?>
            <li>Mensagem: <?= $mensagem ?></li>
        <?php
        }
        ?>
<?php
}
?>
</body>
</html>

