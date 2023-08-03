<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estruturas de Controle de Repetição</h1>
    <hr>
    <h2>WHILE (enquanto)</h2>
<?php
$i = 1;
while($i <= 5){
?>
    <p><?=$i?></p>
<?php
$i++;
}
?>
    <h2>DO/WHILE (repita/até)</h2>
<?php 
$i = 1; 
do {   
?>
    <div>
        <h3>Título <?=$i?></h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, natus accusantium distinctio inventore illum quibusdam amet itaque nemo aperiam et quas quos quidem ipsa ex neque, voluptatibus optio! Animi soluta accusantium culpa reprehenderit? Beatae et non accusantium iusto provident expedita deleniti ut perferendis quia, facere unde sequi? Libero voluptate, cumque exercitationem iure totam labore officiis! Cumque, eum. Molestias excepturi, officia harum rem fugit laborum tenetur ab quia minus deserunt alias facilis eligendi recusandae modi quo voluptates est quasi ratione ad et corporis nisi corrupti? Natus veritatis omnis fuga sequi incidunt. Dolores quasi iusto voluptatem repellendus voluptas nesciunt, molestias optio asperiores?</p>
    </div>
<?php
$i++;
} while ($i <= 10)
?>
    <h2>FOR (para)</h2>
<?php 
for ( $i = 1; $i <= 3; $i++ ){
?>
    <p><code>i</code> vale:<b> <?=$i?></b></p> 
<?php
}
?>

<?php

$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"]

?>

<ol>

<?php

$i = 0;

do {
?> 
    <li><?=$meses[$i]?></li>
<?php
$i++;

} while ($i <= 11)

?>

</ol>

<?php


$alunos = ["Melissa", "Tanaka", "Zimbo", "Eduardo", "Kaue"];


/* Guardamos em "cache" (memória) a quantidade de elementos, evitando assim a contagem a cada interação do loop e melhorando a performace. */
$quantidade = count($alunos);

for($i = 0; $i < $quantidade; $i++){
?>
   <p>Nome: <b><?=$alunos[$i]?></b></p>
<?php    
}
?>

<hr>

<h2>FOREACH (para cada)</h2>
<p>Útil e mais fácil para lidar com <code>arrays</code>.</p>
<ol>
<?php 
foreach($meses as $mes){
?>
    <li><?=$mes?></li>
<?php    
}
?>
</ol>

<h3>Manipulando arrays associativos</h3>

<?php 
// Array Associativo
$clubes = [
    "Corinthians" => "Timão",
    "Palmeiras" => "Porco",
    "São Paulo" => "Tricolor",
    "Santos" => "Peixe"
];

foreach($clubes as $clube => $apelido){
?>
<p>O <?=$clube?> é conhecido como <?=$apelido?>. </p>
<?php    
}
?>

<h2>Loop com Matriz</h2>
<?php 
$planoDeEstudos = [
    ["HTML", "CSS", "JS"],
    ["React", "React Native"]
];

// Usado for aninhado

for($linha = 0; $linha < count($planoDeEstudos); $linha++){
    for($coluna = 0; $coluna < count($planoDeEstudos[$linha]); $coluna++){
?>
    <p><b> <?=$planoDeEstudos[$linha][$coluna]?></b></p>
<?php
    } // for coluna
} // for linha
?>

<hr>

<?php
// Usando foreach aninhado
foreach($planoDeEstudos as $linha){
    foreach($linha as $coluna){
?>
    <p> <i><?=$coluna?></i></p>
<?php        
    }
} 
?>

<h2>Loop com Matriz associativa</h2>
<?php 
$clientes = [
    [
        "nome" => "Chaves",
        "idade" => 8
    ],
    [
        "nome" => "Chapolin",
        "idade" => 25
    ],
    [
        "nome" => "Chiquinha",
        "idade" => 10
    ],
];

foreach($clientes as $cliente){
?>
    <p>Nome: <?=$cliente["nome"]?></p>
    <p>Idade: <?=$cliente["idade"]?></p>
<?php
}

/* Lembrete sobre sintaxe de estruturas de controle (condicionais e loops)

if(){

} else {

}

if():
else:
endif;

foreach(){
}

foreach():
endforeach;

for(){
}

for():
endfor;

*/

?>

</body>
</html>