<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e Processamento</title>
</head>
<body>

<h1>Formulário e Processamento</h1>
<hr>

<h1>Dados</h1>

<!-- deixar action vazia -->
<!-- <form action="" method="post"> -->


<?php
// detectar quando o formulário é acionado
if( isset($_POST['enviar']) ) {
//echo "ok!";
if( empty($_POST['nome']) || empty($_POST['email'])) {
?>

<p>Preencha os campos!</p>
<p><a href="10-formulario-processamento.php">Voltar</a></p>

<?php
} else {
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

?>

<section>
    <h2>Dados</h2>
    <p>Nome: <?=$nome?> </p>
    <p>Email: <?=$email?> </p>
</section>

<?php
   }
} else {
?>

<!-- deixar action vazia -->
<form action="" method="post"> 
<p>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
</p>

<p>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
</p>

<!-- importante dar um name ao botão -->
<button type="submit" name="enviar">Enviar</button>
</form>

<?php
}
?>






</body>
</html>