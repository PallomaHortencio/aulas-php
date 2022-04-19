<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <h1>Envio de Dados</h1>
    <hr>

    <?php 
    if( empty($_POST['produto']) || empty($_POST['fabricante'])) {
    ?>
    <p style="color:blueviolet">Preencha os campos!</p>
    <?php
    } else {
        
    
    $produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_SPECIAL_CHARS);

    $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);

    $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    $descricao = $_POST["descricao"];
    ?>


    <h2>Dados:</h2>
    
    <ul>
        <li>Produto: <?=$produto?> </li>
        <li>Fabricante: <?=$fabricante?> </li>
        <li>Preço: <?=number_format($preco, 2, ",", ".")?> </li>
        <li>Descrição: <?=nl2br($descricao)?> </li>
    </ul>

    <?php
    }
    ?>
    
</body>
</html>