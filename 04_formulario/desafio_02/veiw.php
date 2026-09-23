<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <h2> Dados do Clientes</h2>
    <form action="logica.php" method= "POST">
        <label for=""> Nome:</label>
        <input type="text" name= "nome">
        <br><br>
        <h1>Produto 1</h1>
        <label for="">Nome do produto:</label>
        <br>
        <input type="text" name= "produto1">
        <br><br>

        <label for="">Preço:</label>
        <br>
        <input type="number" name= "preco1">
        <br><br>

        <label for="">Quantidade:</label>
        <br>
        <input type="number" name= "quantidade1">
        <br><br>

        <h1>Produto 2</h1>
        <label for="">Nome do produto:</label>
        <br>  
        <input type="text" name= "produto2">
        <br><br>
            
        <label for="">Preço:</label>
        <br>
        <input type="number" name= "preco2">
        <br><br>

        <label for="">Quantidade:</label>
        <br>
        <input type="number" name= "quantidade2">
        <br><br>

        <h1>Produto 3</h1>
        <label for="">Nome do produto:</label>
        <br>
        <input type="text" name= "produto3">
        <br><br>

        <label for="">Preço:</label>
        <br>
        <input type="number" name= "preco3">
        <br><br>

        <label for="">Quantidade:</label>
        <br>
        <input type="number" name= "quantidade3">
        <br><br>
        

        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>