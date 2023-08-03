<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .comprar {
            color: red;
        }

        .urgente {
            color: red;
            font-weight: bold;
            background-color: yellow;
            display: inline-block;
        }

        .normal {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Estruturas condicionais</h1>
    <hr>
    <h3>Simples</h3>
<?php 
$numero = 5;
if($numero > 1){
    echo "<p>$numero é maior que 1</p>";
}

// Sintaxe sem chaves
if($numero > 1) echo "<p>$numero é maior que 1</p>";
?>
    <h3>Composta</h3>
<?php 
$produto = "Ultrabook Asus";
$qtdEmEstoque = 15; // o que temos
$qtdCritica = 15; // mínimo necessário

echo "<h3>$produto</h3>";
echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";

if ($qtdEmEstoque < $qtdCritica) {
    echo "<p class='comprar'>É necessário comprar!</p>";
     

    // Condicional ANINHADA
    if ($qtdEmEstoque == 0) {
        echo "<p class='urgente'>URGENTE!</p>";
    }

} else {
    echo "<p class='normal'>Estoque normal</p>";
}

?>
    <h3>Encadeada</h3>
<?php  
/* Opção para o exemplo:
1 -> Lanche
2 -> Pizza
3 -> Paçoca
Qualquer outra -> Opção Inválida */

$opcaoEscolhida = 1; // comece com qualquer valor

echo "<h3>Opção: $opcaoEscolhida</h3>";
if ($opcaoEscolhida == 1) {
    echo "<p>Ok, vamos fazer o lanche!</p>";
} elseif ($opcaoEscolhida == 2) {
    echo "<p>Beleza, pizza no forno...";
} elseif ($opcaoEscolhida == 3) {
    echo "<p>Professor ficou feliz!</p>";
} else {
    echo "<p>Não entendi... vou chamar a Valeska</p>";
}

echo "<hr>";

// Exemplo: == e ===

/* 
Em resumo, ao comparar com dois sinais de igual a comparação será feita APENAS em relação aos valores 

E ao comparar com três sinais de igual, a comparação será feita em relação ao VALOR E AO TIPO DE DADOS. Portanto, é mais restritivo.
*/


$a = "10";
$b = 10;
$resultado = $a === $b; // LÓGICO/BOOLEAN
var_dump($resultado);
echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);

?>
</body>
</html>