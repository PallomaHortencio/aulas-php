<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <style>
        .aprovado { color: blue;}
        .reprovado { color: red;}
    </style>
</head>
<body>

<h1>Exercício 5 - Funções</h1>

 
 
<?php
function calculaMedia($n1, $n2){
    $media = ($n1 + $n2) / 2;
    return $media;

}

function verificaSituacao($m) {
    if($m >= 7){
        return "aprovado";
    } else {
        return "reprovado";
    }
}
?>

<?php
$nota1 = 7;
$nota2 = 8;
$media = calculaMedia($nota1, $nota2);
?>

<p> <?=$media?> </p>
<p class="<?=verificaSituacao($media)?>" >
<?=verificaSituacao($media)?>  </p>
    
</body>
</html>