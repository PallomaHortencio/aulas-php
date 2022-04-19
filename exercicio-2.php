<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>

    <style>
        h1 { color: red }
        p { color: blue }
        section { background-color: yellow}
    </style>
</head>
<body>

<h1>Exercício 2 - Arrays</h1>
<hr>

<?php
  $usuario1 = ["Loma2001", "loma.martins@gmail.com", "Princesa123", 21, "Feminino", "São Paulo"];
  $usuario2 = ["Igor2002", "igor.almeida@gmail.com", "Barbie123", 20, "Masculino", "Rio de Janeiro"];
  
?>

<section>
    <p>Nome de Usuario: <?=$usuario1[0]?> </p>
    <p>E-Mail: <?=$usuario1[1]?> </p>
    <p>Idade: <?=$usuario1[3]?></p>
    <p>Sexo: <?=$usuario1[4]?></p>
    <p>Cidade: <?=$usuario1[5]?></p>
</section>

<hr>

<section>
    <p> Nome de Usuario: <?=$usuario2[0]?> </p>
    <p>E-Mail: <?=$usuario2[1]?></p>
    <p>Idade: <?=$usuario2[3]?></p>
    <p>Sexo: <?=$usuario2[4]?></p>
    <p>Cidade: <?=$usuario2[5]?></p>
</section>

    
</body>
</html>