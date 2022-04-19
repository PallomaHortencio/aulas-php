<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>

    <h1>Formulario de Produtos</h1>
    <hr>

    <form action="exercicio-7.php" method="post">
         <p>
            <label for="produto">Produto:</label>
            <input type="text" name="produto" id="produto">
         </p>

         <label for="fabricante">Fabricante:</label>
         <select name="fabricante" id="select">
             <option value=""></option>
             
             <?php
             $fabricantes = [
                 "Apple", "Samsung", "Motorola", "Xiaomi"
             ];
             ?>
         
             <?php
             foreach ($fabricantes as $fabricante) {
             ?>
         
             <option><?=$fabricante?></option>
             
             <?php
             } 
             ?>
         </select>
        
           <p>
         <label for="preço">Preço:</label>
         <input type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
         </p>

         <p>
            <label for="descricao">Descrição: <br></label> 
            <textarea name="descricao" id="descricao" cols="30" rows="3"></textarea>
         </p>

         <button type="submit" name="enviar">Enviar</button>
     </form>
    
</body>
</html>