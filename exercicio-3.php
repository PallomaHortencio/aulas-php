<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Condicionais</title>
</head>
<body>
    <h1>Condicionais</h1>

    <?php
    $salario = 1200;
 
    if($salario < 500){
       $salarioNovo = $salario*1.15;
    } elseif($salario <= 1000) { 
        $salarioNovo = $salario*1.10;
    } else {
      $salarioNovo = $salario*1.05;
    }

    // number_format(valor, 2, ",",".")

    ?>

    <p>Sálario antigo: R$<?=number_format($salario, 2, ",", ".")?></p>
    <p>Sálario novo: R$ <?=number_format($salarioNovo, 2, ",", ".")?></p>

    






</body>
</html>