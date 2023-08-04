<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas</title>
</head>
<body>
    <h1>Exemplos de funções nativas</h1>

    <hr>

    <h2>Strings</h2>
    <h3>trim()</h3>
<?php
// Função que remove espaços
// antes e depois de stringas.

$nome = "   Vinicius me deve 80 paçocas   ";
$nomeSemEspaco = trim($nome);
?>    
    <pre><?=var_dump($nome)?></pre>
    <pre><?=var_dump($nomeSemEspaco)?></pre>

    <h3>str_replace()</h3>
<?php
// Função que permite substituição
// de strings/caracteres.
$fraseFeia = "Fulano é um bobão xarope";
$fraseBunitinha = str_replace(
    ["xarope", "bobão"],
    "******",
    $fraseFeia
    );
?>
    <p><?=$fraseFeia?></p>
    <p><?=$fraseBunitinha?></p>
    <h3>explode()</h3>
<?php
// Função que tranforma uma string em um array
$linguagens = "HTML - CSS - JS - PHP";
$arrayLinguagens = explode(" - ", $linguagens);
?>
    <pre><?=var_dump($linguagens)?></pre>
    <pre><?=var_dump($arrayLinguagens)?></pre>   

    <hr>

    <h2>Numéricas</h2>
    <h3>min, max, round</h3>
<?php
$valores = [10, 5, 50, 1000, 275];
$valorQualquer = 1259.45;
?>
    <p>Menor valor: <?=min($valores)?></p>
    <p>Maior valor: <?=max($valores)?></p>
    <p>Arredondamento: <?=round($valorQualquer)?></p>
    <h2>Arrays</h2>
    <h2>Filtros</h2>
    <h2>Segurança</h2>
</body>
</html>

