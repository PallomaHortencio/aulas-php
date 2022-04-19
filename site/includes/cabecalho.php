<?php 
$pagina = basename($_SERVER["PHP_SELF"]); 
echo $pagina; 

switch($pagina){
    case 'index.php': $tiulo = "Página Inicial"; break;
    case 'produtos.php': $tiulo = "Produtos"; break;
    case 'servicos.php': $tiulo = "Serviços"; break;
    default: $tiulo = "Contato"; break;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$tiulo?> - Site PHP</title>
    <link rel="stylesheet" href="includes/css/style.css">
</head>
<body>
    <head>
        <h1>Site PHP</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">Serviços</a>
            <a href="contato.php">Contato</a>
        </nav>
    </head>

    <main>