<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        #planoDeEstudos li:nth-child(odd){
            color: blue;
        }
        #planoDeEstudos li:nth-child(even){
            color: red;
        } 
    </style>
</head>
<body>
    <h1>Trabalhando com arrays (Vetores e matrizes)</h1>
    <hr>
    <h2>Arrays com índice numérico</h2>

<?php 

// VETORES

// Sintaxe com colchetes
$bandas = ["Sevatage", "Dio", "Rush"];

// Sintaxe com função array()
$cursos = array("HTML", "Node", "PHP");

// Sintaxe de atribuição manual
$buteco[0] = "Bolinho de bacalhau";
$buteco[1] = "Pastel";
$buteco[2] = "Esfirra";

// Contantes de array (PHP 7+)
define("UNIDADES", ["Penha", "Tatuapé"]);
const FRUTAS = ["Morango", "Abacaxi"];

?>

<h3>Acessando os dados</h3>
<ol>
    <li>Banda que eu mais gosto: <?=$bandas[2]?></li>
    <li>Curso básico de: <?=$cursos[0]?></li>
    <li>Quero comer: <?=$buteco[1]?></li>
    <li>Estamos no Senac <?=UNIDADES[0]?></li>
    <li>Fruta boa para caipirinha/vitamina: <?=FRUTAS[0]?></li>    
</ol>

<hr>

<h2>Array associativo</h2>

<?php 
$curso = [
    // chave associativa 
    // identificador => valor
    "titulo" => "Gastronomia",
    "carga_horaria" => 150,
    "descritivo" => "Aprenda a ferver água"
];
?>

<h3>Acessando os dados (array associativo)</h3>
<p>Nome do curso: <?=$curso["titulo"]?>.</p>
<p>Carga horária: <?=$curso["carga_horaria"]?> horas.</p>
<p>Descritivo: <?=$curso["descritivo"]?>.</p>

<hr>

<h2>Matriz (array dentro de array)</h2>

<?php 

$planoDeEstudos = [
    ["Js Avançado", "Node.js", "React"],
    ["PHP", "POO", "MySQL", "Python"],
    ["Teoria das Cores", "Photoshop", "UX/UI"]
]; 

?> 

<ul id="planoDeEstudos">
    <li><?=$planoDeEstudos[0][2]?></li>
    <li><?=$planoDeEstudos[1][2]?></li>
    <li><?=$planoDeEstudos[2][1]?></li>
    <li><?=$planoDeEstudos[2][0]?></li>
</ul>

<hr>

<h2>Funções de análise de estruturas de dados (debug/depuração)</h2>

<h3>print_r()</h3>
<pre>
    <?=print_r($bandas)?>
</pre>

<h3>var_dump()</h3>
<pre>
    <?=var_dump($bandas)?>
</pre>

</body>
</html>