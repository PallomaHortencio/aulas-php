<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP - Versão 2</title>
    <style>
        .ok { color: blue;}
        .repor { color: red;}
    </style>
 
</head>
<body>
    <h1>Versão 2</h1>

<h1>Estruturas de Controle Condicional</h1>
<hr>

<h2>Simples</h2>

<?php
    $numero = 5;
    if($numero > 1){
?>
        <p><?=$numero?> é maior que 1 </p>
<?php
    }
?>

<h2>Composta</h2>

<?php
$produto = "Ultrabook Asus";
$qtdEmEstoque = 0; // o que temos no momento
$qtdCritica = 14; // mínimo necessário
?>

 <h3><?=$produto?></h3>

<?php
if( $qtdEmEstoque < $qtdCritica ){
?>

    <p class="repor">É necessário comprar!</p>

<?php
if($qtdEmEstoque === 0){
?>

   <p><mark><b>URGENTE<b><mark></p>

<?php 
   }
// Condicional aninhada
} else { 
?>

   <p class="ok">Estoque OK!</p>
   
<?php
  }
?>

<h2>Encadeada</h2>

<?php
// Cárdapio Digital
// 1 -> Pastel
// 2 -> Pizza
// 3 -> Esfiha
// x -> Opção Inválida

$opcao = 2; // comece com qualquer valor


if($opcao === 1){
    //echo "<p>Pastel</p>";
    $opcaoEscolhida = "Pastel";
} elseif($opcao === 2) {
    //echo "<p>Pizza</p>";
    $opcaoEscolhida = "Pizza";
} elseif($opcao === 3){
    //echo "<p>Esfiha</p>";
    $opcaoEscolhida = "Esfiha";
} else {
    //echo "<p>Opção inválida!</p>";
    $opcaoEscolhida = "Opção inválida";
}

?>
<p> <?=$opcaoEscolhida?> </p>

<h2>Switch/Case</h2>

<?php
switch($opcao) {
    case 1: $opcaoEscolhida = "Pastel"; break;

    case 2: $opcaoEscolhida = "Pizza"; break;

    case 3: $opcaoEscolhida = "Esfiha";break;

    default: $opcaoEscolhida = "Opção inválida"; break;
}
?>

<p> <?=$opcaoEscolhida?> </p>


    
</body>
</html>