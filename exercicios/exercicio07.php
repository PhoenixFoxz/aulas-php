<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>

<body>
    <h1>Exercício 07</h1>
    <hr>
    <form action="formulario-07.php" method="post">
    <p>
        <label for="nome">Nome do Produto:</label>
        <input required type="text" name="nome" id="nome">
        <option value=""></option>
    </p>
    <p>
        <label for="fabricantes">Fabricantes:</label>
        <select name="fabricantes" id="fabricantes">
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
        <label for="preco">Preço:</label>
        <input required type="number" name="preco" id="preco" min="100" max="10000" placeholder="100">
    </p>
    <p>
        <label for="decisao">Disponibilidade:</label> <br>
        <input type="radio" id="" name="decisao" value="decisao">
        <label for="">Sim</label>
        <input type="radio" id="" name="decisao" value="decisao">
        <label for="">Não</label>
    </p>
    <p>
        <label for="mensagem">Descrição:</label> <br>
        <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
    </p>
    <button type="submit" name="enviar" id="enviar">
        Enviar dados
    </button>
    </form>
</body>

</html>