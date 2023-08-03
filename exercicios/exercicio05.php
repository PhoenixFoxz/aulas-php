<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <style>
        .reprovado {
            color: red;
        }
        .aprovado {
            color: green;
        }
    </style>
</head>
<body>
<h1>Exercício 5</h1>
<hr>

<?php 

$nota1 = 10;
$nota2 = 9;

function calculoMedia($nota1, $nota2){
    $media = ($nota1 + $nota2) / 2;
    return $media;
}

function situacao($media){
    if ($media >= 7){
        $resultado = "<span class='aprovado'>Aprovado</span>";
    } else {
        $resultado = "<span class='reprovado'>Reprovado</span>";
    }
    return $resultado;
}



?>
<p>Sua média é de <?=calculoMedia($nota1, $nota2)?>, sendo assim você está <?=situacao(calculoMedia($nota1, $nota2))?></p>
</body>
</html>