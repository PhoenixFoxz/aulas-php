<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saída de Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center display-1">Exercício 07</h1>
    <div class="shadow-lg p-5 rounded-4 container-lg col-md-6">
        <?php
        if (empty($_POST["nome"]) || empty($_POST["preco"]) || empty($_POST["ds"])) {
        ?>
            <p style="color: red;">Você deve preencher nome, preço e a disponibilidade do produto</p>

            <p><a href='exercicio07.php'>Voltar</a></p>
        <?php

        } else {
            $fabricantes = filter_input(INPUT_POST, "fabricantes", FILTER_SANITIZE_SPECIAL_CHARS);

            $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

            $preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);

            $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);

            $ds = filter_input(INPUT_POST, "ds", FILTER_SANITIZE_SPECIAL_CHARS);
        ?>
            <h2>Dados:</h2>
            <ul class="list-group">
                <li class="list-group-item">Nome: <?= $nome ?></li>
                <li class="list-group-item">Preço: R$ <?= number_format($preco, 2, ",",".") ?></li>
                <li class="list-group-item">Disponibilidade: <?= $ds ?></li>
                <?php
                if (!empty($fabricantes)) {
                ?>
                    <li class="list-group-item">Fabricante: <?= $fabricantes ?></li>
                <?php
                }
                if (!empty($mensagem)) {
                ?>
                    <li class="list-group-item">Mensagem: <?= $mensagem ?></li>
                <?php
                }
                ?>
            </ul>
        <?php
        }
        ?>
    </div>
</body>

</html>