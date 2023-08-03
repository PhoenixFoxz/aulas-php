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
    <h1>(VERSÃO 3) Estruturas condicionais</h1>
    <hr>
    <h3>Simples</h3>
<?php 
$numero = 5;
if($numero > 1){
?>
    <p><?=$numero?> é maior que 1</p>
<?php
}

// Sintaxe sem chaves
if($numero > 1) echo "<p>$numero é maior que 1</p>";
?>
    <h3>Composta</h3>
<?php 
$produto = "Ultrabook Asus";
$qtdEmEstoque = 15; // o que temos
$qtdCritica = 15; // mínimo necessário
?>
<h3><?=$produto?></h3>

<h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>

<?php

if ($qtdEmEstoque < $qtdCritica) {

?>
    <p class="comprar">É necessário comprar!</p>
     
<?php
    // Condicional ANINHADA
    if ($qtdEmEstoque == 0) {
?>
        <p class="urgente">URGENTE!</p>;
<?php
    }

} else {
?>
    <p class="normal">Estoque normal</p>
<?php
}

?>
    <h3>Encadeada</h3>
<?php  
/* Opção para o exemplo:
1 -> Lanche
2 -> Pizza
3 -> Paçoca
Qualquer outra -> Opção Inválida */

$opcaoEscolhida = 3; // comece com qualquer valor
?>
<h3>Opção: <?=$opcaoEscolhida?></h3>
<?php
switch ($opcaoEscolhida) {

    case 1:
        $resultado = "Ok, vamos fazer o lanche!";
    break;
    case 2:
        $resultado = "Beleza, pizza no forno...";
    break;
    case 3:
        $resultado = "Professor ficou feliz!";
    break;
    default:
        $resultado = "Não entendi... vou chamar a Valeska";
    break;

}

?>
<p><?=$resultado?></p>
<hr>
<?php
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