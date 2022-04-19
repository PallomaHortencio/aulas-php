<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <style>
        h1 { color: #f0f}
        </style>
</head>
<body>
    <h1>Criar variaveis e/ou constantes</h1>

<?php
 
//  $data = "18 de março de 2022";
date_default_timezone_set("America/Sao_Paulo");
$data = date("d/m/Y H:i"); //função date()  h:i - mostra data e hora
 $nome = "Palloma Hortencio";
 $curso ="Técnico em Informática para Internet";
 $carga = 1000;
 $faltas = $carga*0.25;

 ?>

<h2>Dados (acesso feito em <?=$data?>) </h2>
 <p>Hoje é dia <?=$data?>, a aluna <?=$nome?> está fazendo o curso <?=$curso?> com carga horária de <?=$carga?> horas e com um limite de <?=$faltas?> horas. </p>

    
</body>
</html>



