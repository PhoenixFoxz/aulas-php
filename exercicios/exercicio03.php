<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <style>

        html {
            font-size: 50px;
        }

        body {
            font-family: monospace;
        }

        @keyframes animasalario {
            from {
                color:aqua
            }
            to{
                color:blue
            }
        }

        .salario {
            animation: animasalario 1s infinite alternate;
        }

    </style>
</head>
<body>

<h1>Exercício 3</h1>

<?php 

$salario = 3000;

if ($salario < 1500) {
    $salarioFinal = $salario + (($salario * 15) / 100);
} elseif($salario <= 3000) { 
    $salarioFinal = $salario + (($salario * 10) / 100);
} else {
    $salarioFinal = $salario + (($salario * 5) / 100);
}

?>
  
<p>Salário recente: <span class="salario">R$ <?=number_format($salarioFinal, 2, ',','.')?></span></p>

<p>Salário antigo: <span class="salario">R$ <?=number_format($salario, 2, ',','.')?></span></p>

</body>
</html>