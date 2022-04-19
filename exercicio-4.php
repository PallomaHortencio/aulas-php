<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Tabelas (loop e array)</title>

    <style>
        th { background: #f0f}
        tr:nth-child(even) { background: yellow;}
        tr:nth-child(odd) { background: orange;}

    </style>
</head>
<body>
    <h1>Exercício 4 - Tabela</h1>

    <table border="1">
        
    <tr>
        <th>ID</th>
        <th>Linguagem</th>
        <th>Descrição</th>
    </tr>

<?php
    
    $nome = [
        [
            "texto" => "HTML",
            "descricao" => "Estruturacao"
        ],
        [
            "texto" => "CSS",
            "descricao" => "Estilos" 
        ],
        [
            "texto" => "JS",
            "descricao" => "Comportamentos"
        ],
        [
            
            "texto" => "PHP",
            "descricao" => "Back-End"
        ]
   ];

   //for($i = 1; $i <= 4; $i++)
   $i = 1;
   foreach( $nome as $nomes){
?>

<tr>
    <td> <?=$i++?> </td>
    <td><?=$nomes['texto']?></td>
    <td><?=$nomes['descricao']?></td>
</tr>

<?php
  }
?>

</table>
    
    
</body>
</html>