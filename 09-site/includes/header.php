<?php 
// Recuperar/descobrir qual o nome da página aberta no momento
$pagina = basename($_SERVER['PHP_SELF']);
// switch($pagina){
//     case "index.php": $nomePagina = "Página Inicial"; break;
//     case "cursos.php": $nomePagina = "Cursos"; break;
//     case "duvidas.php": $nomePagina = "Dúvidas"; break;
//     default: $nomePagina = "Contato"; break;
// }

// Função match() disponível a partir do PHP versão 8
$nomePagina = match($pagina){
    "index.php" => "Página Inicial",
    "cursos.php" => "Cursos",
    "duvidas.php" => "Dúvidas",
    default => "Contato"
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$nomePagina?> - Site PHP</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Site PHP</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cursos.php">Cursos</a>
            <a href="duvidas.php">Dúvidas</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>
    <main>