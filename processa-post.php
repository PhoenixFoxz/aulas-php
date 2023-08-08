<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Exemplo usando GET</h1>
    <hr>
    <p>Receber e processar dados via <b>POST</b></p>

<?php
// Se os campos nome e e-mail estão vazios 
if(empty($_POST["nome"]) || empty($_POST["email"])){
?>
    <p style="color: red;">Você deve preencher nome e e-mail</p>

    <p><a href='10-formulario.html'>Voltar</a></p>";
<?php
} else {

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
// Se houver interesses (ou seja, foi selecionado pelo menos 1), guarde na variável o $_POST["interesses"]. Caso contrário, guarde na variável um array vazio.
$interesses = $_POST["interesses"];
$idade = $_POST["idade"]
?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>Idade: <?=$idade?></li>

<?php
// Se a variável mensagem NÃO ESTIVER VAZIA, mostre o <li> com a mensagem
if(!empty($mensagem)){
?>
       <li>Mensagem: <?=$mensagem?></li>
<?php
}
?>
    </ul>
<?php
if(isset($interesses)){
?>
       <li>Interesses: <?=implode(",", $interesses)?></li>
<?php
} 
}
?>
</body>
</html>
