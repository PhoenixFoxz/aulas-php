<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center display-1">Exercício 07</h1>
    <div class="shadow-lg p-5 rounded-4 container-lg col-md-6">
        <form action="formulario-07.php" method="post">
            <p>
                <label for="nome" class="form-label">Nome do Produto:</label> <br>
                <input required class="form-control" type="text" name="nome" id="nome">
                <option value=""></option>
            </p>
            <p>
                <label for="fabricantes" class="form-label">Fabricantes:</label> <br>
                <select class="form-control" name="fabricantes" id="fabricantes">
                    <option value=""></option>
                    <?php
                    $fabricantes = ["H2O!", "Amazon", "LG", "REZER"];
                    foreach ($fabricantes as $fabricante) {
                    ?>
                        <option value="<?= $fabricante ?>"><?= $fabricante ?></option>
                    <?php
                    }
                    ?>
                </select>
            </p>
            <p>
                <label for="preco" class="form-label">Preço:</label> <br>
                <input required class="form-control" type="number" name="preco" id="preco" min="100" max="10000" placeholder="100" step="0.01">
            </p>
            <p>
                <label for="ds" class="form-label">Disponibilidade no estoque:</label> <br>
                <input required type="radio" class="form-check-input" id="ds" name="ds" value="Sim">
                <label for="ds">Sim</label>
                <input type="radio" class="form-check-input" id="ds" name="ds" value="Não">
                <label for="ds">Não</label>
            </p>
            <p>
                <label for="mensagem" class="form-label">Descrição:</label> <br>
                <textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
            </p>
            <button type="submit" class="btn btn-primary" name="enviar" id="enviar">
                Enviar dados
            </button>
        </form>
    </div>
</body>

</html>