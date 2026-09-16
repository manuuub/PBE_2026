<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
</head>
<body>
    <h1>Calcular IMC </h1>
    <form action="logica.php" method= "POST">
    <h3 for=""> Nome: </h3>
    <input type="text" name= "nome" >
    <br>

    <h3 for=""> Peso em kg:</h3>
    <input type="number" name= "peso" step = "0.5">
    <br>

    <h3 for="">Altura em metros:</h3>
    <input type="number" name= "altura" step = "0.01">
    <br>

    <button type="submit">Calcular</button>
    <button type="reset">Limpar</button>
    </form>
</body>
</html>