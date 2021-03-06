<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
    <style>
        <?php $cor = "purple"; ?>

        p { color: <?=$cor?> }
    </style>

</head>
<body>
    <h1>Manipulando dados na memória</h1>

    <?php
    // Variáveis
    $curso = "Tecnico em Informática para Internet"; //string
    $ano = 2022; // inteiro
    $preco = 2500.45; // real (float - tipo de dados que quebra valor)

    echo "<h2>Saídas de dados usando echo e a sintaxe completa</h2>";
    echo "<p>$curso</p>"; // aspa dupla permite interpolação (variável e texto)
    echo '<p>$curso</p>'; // aspa simples encara tudo como texto
    echo "<p>$ano</p>"; 
    echo "<p>$preco</p>";

    // Estamos fazendo o curso de Tecnico em Informatica para Internet no ano de 2022
    echo "<p>Estamos fazendo o curso $curso no ano de $ano</p>";
    ?>

    <h2>Saída de dados usando sintaxe simplificada</h2>
    <p> <?php echo $curso ?> </p>
    <p> <?=$curso?> </p>  

    <p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?> </p>

    <hr>

    <?php
        // Constantes

        // 1ª forma: usando a função define("NOME", "VALOR")
        define("MEU_NOME", "Palloma");

        // 2 ª forma: usando a palavra-chave const
        const ESCOLA = "Senac"
    ?>

    <p>Olá! Me chamo <?=MEU_NOME?></p>
    <P>Estamos estudando no <b><?=ESCOLA?></b> </p>

    <?php
        echo "<p>Olá! Me chamo ".MEU_NOME."</p>";
        echo "<p>Estamos estudando no <b>".ESCOLA."</b> </p>";
    ?>
    
</body>
</html>
