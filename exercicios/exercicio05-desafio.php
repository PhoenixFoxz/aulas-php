<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .reprovado {
            color: red;
            font-weight: bolder;
        }
        .aprovado {
            color: green;
            font-weight: bolder;
        }
        table {
            width: 50%;
            margin: auto;
            text-align: center;
        }

        td:hover {
            color: darkred; 
            background-color: lightcoral;
        }
        tr:nth-child(odd){
            font-weight: 700;
            background-color: lightpink;
            color: darkred
        }
        tr:nth-child(even){
            font-weight: 700;
            background-color: lightgray;
            color: gray;
        }
        h1 {
            text-align: center;
            background: linear-gradient(90deg, rgba(36,0,0,0) 0%, rgba(121,9,9,0.7371323529411764) 50%, rgba(255,0,0,0) 100%);
            color: white;
            font-family: 'Tilt Prism', cursive;
            font-size: 75px;
            padding: 30px;
            text-shadow: 3px 3px 2px rgb(83, 0, 0);
        }

        caption {
            font-family: 'Tilt Prism', cursive;
            background-color: darkred;
            color: lightcoral;
            font-weight: bolder;
            padding: 10px;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            font-size: larger;
        }
    </style>
</head>
<body>
    <h1>Exercício 5</h1>
    <table>
        <caption>
            Notas
        </caption>
        <tr>
            <th>Aluno</th>
            <th>1ª Nota</th>
            <th>2ª Nota</th>
            <th>Média</th>
            <th>situação</th>
        </tr>
        <?php
        $alunos = [ 
            [   
                "nome"  =>"Moura",
                "nota1" => 8,
                "nota2" => 6
            ], 
            [   
                "nome"  =>"Michael Jackson",
                "nota1" => 10,
                "nota2" => 10
            ],
            [
                "nome"  =>"Barbosa",
                "nota1" => 10,
                "nota2" => 10 
            ],
            [
                "nome"  =>"Eliel",
                "nota1" => 0,
                "nota2" => 8
            ],
            [   
                "nome"  =>"Ozzy Osbourne",
                "nota1" => 3,
                "nota2" => 7
            ] 
        ];

    $resultado = function (int $nota1, $nota2 ){
        return ($nota1 + $nota2) / 2;
    };

    function situacao($resultado){
        if ($resultado >= 7){
            $condicao = "<span class='aprovado'>Aprovado</span>";
        } else {
            $condicao = "<span class='reprovado'>Reprovado</span>";
        }
        return $condicao;
    }

    foreach ($alunos as $aluno){ 
    ?>
                <tr>
                    <td><?=$aluno["nome"]?></td>
                    <td><?=$aluno["nota1"]?></td>
                    <td><?=$aluno["nota2"]?></td>
                    <td><?=$resultado($aluno["nota1"],$aluno["nota2"])?></td>
                    <td><?=situacao($resultado($aluno["nota1"],$aluno["nota2"]))?></td>
                </tr>
    <?php
    }
    ?>
</body>
</html>