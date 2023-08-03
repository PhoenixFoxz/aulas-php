<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Funções como procedimento ou sub-rotina</h2>

<?php
function dadosAutor(){
?>
<div>
    <p>Tiago B. dos Santos</p>
    <p><a href="mailto">email@aa.com</a></p>
</div>
<?php
}
?>

<section>
    <h3>Chamada da Sub-rotina/procedimento</h3>
    <?=dadosAutor()?>
    <article>
        <h4>Outra chamada</h4>
        <?=dadosAutor()?>
    </article>
</section>

<h2>Função com retorno de dados</h2>
<?php
function dadosCurso(){
    // return "Técnico em informática para Internet";
    return "<b>Encher o saco no WhatsApp</b>";
} 
?>
<p>Estamos no curso de <?=dadosCurso()?></p>
<p><?=dadosCurso()?> é ministrado no Senac Penha.</p>

<hr>

<h2>Função com parâmetros (ou argumentos)</h2>
<?php
function soma($valor1, $valor2, $valor3){
    // VARIÁVEL DE ESCOPO LOCAL
    $total = $valor1 + $valor2 + $valor3;
    return $total;
}
?>
<!-- Chamando e exibindo diretamente o retorno -->
<p>Resultad0 1: <?=soma(10, 20, 5)?> </p>
<p>Resultad0 2: <?=soma(23, 84, 1000.75)?> </p>
<?php
// Chamando e guardando o retorno
$resultado3 = soma(500, 480, 700);
?>

<p>Resultado 3: <?=$resultado3?></p>

<?php
if ($resultado3 > 100){
?>
<p>Vinicius foi demitido!</p>
<?php    
}
?>
<!-- Usando uma fração como parte de uma condição -->
<?php 
if(soma(2, 3, 10) >= 10){
?>
    <p>Kaue reprovado!!!</p>
<?php
}
?>

<h3>Função com parâmetros opcionais</h3>
<?php
function saudacao($mensagem, $pessoa = "Fulano(a)"){
    return "Olá, $mensagem $pessoa!";
}
?>

<p><?=saudacao("bom-dia", "Melissa")?></p>
<p><?=saudacao("boa noite", "Tanaka")?></p>    
<p><?=saudacao("boa tarde")?></p> 
</body>
</html>