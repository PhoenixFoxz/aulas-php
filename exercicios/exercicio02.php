<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: monospace;
            color: darkblue;
        }

        article {
            display: flex;
            justify-content: space-around;
        }

        section {
            background-color: white;
            border-radius: 10px;
            box-shadow: 5px 5px darkblue;
            margin: 50px;
            padding: 50px
        }

        #senha {
            text-decoration: line-through;
            background-color: darkblue;
            color: white;
        }

        span {
            background-color: darkblue;
            color: white;
            margin: 5px;
            padding: 2px;
        }
    </style>
</head>
<body> 
    <?php 
    $dadosPessoa1 = [
       "usuario" => "Barbosa",
       "email" => "barbosa@gmail.com",
       "senha" => "12345Barbosa",
       "idade" => "19",
       "sexo" => "Masculino",
       "cidade" => "São Paulo",
    ]; 

    $dadosPessoa2 = [
        "usuario" => "Moura",
        "email" => "moura@gmail.com",
        "senha" => "12345moura",
        "idade" => "18",
        "sexo" => "Masculino",
        "cidade" => "São Paulo",
    ];  
    ?>
    <div id="container">
        <h1 style="text-align: center">DADOS</h1>
        <article>
            <section>
                <h2>Pessoa 1</h2>
                <p><span>Usuario:</span> <?=$dadosPessoa1["usuario"]?></p>
                <p><span>Email:</span> <?=$dadosPessoa1["email"]?></p>
                <p><span>Senha:</span> <span id="senha"><?=$dadosPessoa1["senha"]?></span></p>
                <p><span>Idade:</span> <?=$dadosPessoa1["idade"]?></p>
                <p><span>Sexo:</span> <?=$dadosPessoa1["sexo"]?></p>
                <p><span>Cidade:</span> <?=$dadosPessoa1["cidade"]?></p>
            </section>
            <section>
                <h2>Pessoa 2</h2>
                <p><span>Usuario:</span> <?=$dadosPessoa2["usuario"]?></p>
                <p><span>Email:</span> <?=$dadosPessoa2["email"]?></p>
                <p><span>Senha:</span> <span id="senha"><?=$dadosPessoa2["senha"]?></span></p>
                <p><span>Idade:</span> <?=$dadosPessoa2["idade"]?></p>
                <p><span>Sexo:</span> <?=$dadosPessoa2["sexo"]?></p>
                <p><span>Cidade:</span> <?=$dadosPessoa2["cidade"]?></p>
            </section>
        </article>
    </div>
</body>
</html>