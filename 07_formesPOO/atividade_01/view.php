<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioPOO</title>
</head>
<body>
    <form action="logica.php" method = "POST">
        <label for="">Nome:</label>
        <input type="text" name="nome">
        <br><br>
        <Label for= "">Quantidade:</Label>
        <input type="number" name="quantidade">
        <br><br>
        <label for="">Preço:</label>
        <input type="number" name="preco" step="0.01">
        <br><br>
        <button type ="submit"> Cadastrar</button>
    </form>
</body>
</html>