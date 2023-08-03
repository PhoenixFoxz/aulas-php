<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap');

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    td:hover {
        color: darkred; 
        background-color: lightcoral;
    }
    tr:nth-child(odd){
        background-color: darkblue;
        color: lightblue;
    }
    tr:nth-child(even){
        background-color: darkred;
        color:lightpink
    }
    table {
        width: 50%;
        margin: auto;
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
    </style>
</head>
<body>
    <h1 style="text-align: center;">Exercício 04</h1>
<?php 
    $linguagens = [
        "HTML" => "Estruturação",
        "CSS"  => "Estilo",
        "JS"   => "Comportamento",
        "PHP"  => "Back-End",
        "SQL"  => "Manipulação de dados",
        "Java" => "Softwares"
    ]    
?>

    <table>
    <tr>
        <th>ID</th>
        <th>Linguagem</th>
        <th>Descrição</th>
    </tr>
<?php 
$i = 0;
foreach($linguagens as $linguagem => $linha){
$i++;
?>
<tr>
    <td><?=$i?></td>
    <td><?=$linguagem?></td>
    <td><?=$linha?></td>
</tr>
<?php    
}
?>
    </table>

    <hr>

<?php 
    $linguagens2 = [
        [
        "id" => "1",    
        "linguagem" =>"HTML",
        "descricao" => "Estruturação"
        ],
        [
        "id" => "2",    
        "linguagem" =>"CSS",
        "descricao" => "Estilo"
        ],
        [
        "id" => "3",    
        "linguagem" =>"JS",
        "descricao" => "Comportamento"
        ],
        [
        "id" => "4",    
        "linguagem" =>"PHP",
        "descricao" => "Back-End"
        ],
        [
        "id" => "5",    
        "linguagem" =>"SQL",
        "descricao" => "Manipulação de dados"
        ],
        [
        "id" => "6",    
        "linguagem" =>"Java",
        "descricao" => "Softwares"
        ],
    ]    
?>   
   <table>
    <tr>
        <th>ID</th>
        <th>Linguagem</th>
        <th>Descrição</th>
    </tr>
<?php 
foreach($linguagens2 as $linguagem2){
?>
<tr>
    <td><?=$linguagem2['id']?></td>
    <td><?=$linguagem2['linguagem']?></td>
    <td><?=$linguagem2['descricao']?></td>
</tr>
<?php    
}
?>
</body>
</html>