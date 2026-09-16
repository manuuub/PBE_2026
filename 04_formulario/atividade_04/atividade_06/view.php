<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Ingressos</title>
</head>
<body>
    <h1>Compra de Ingressos</h1>
    <form action="logica.php" method= "POST">
    <h3 for=""> Nome: </h3>
    <input type="text" name= "nome" >
    <br>

    <h3 for=""> Filme:</h3>
    <input type="text" name= "filme" >
    <br>

    <h3 for="">Quantidade de ingressos:</h3>
    <input type="number" name= "ingresso">
    <br>
    <h3>Tipo de ingressos:</h3>
    <label for="">inteira</label>
    <input type="radio"  name = "tipo" value ="inteira" >
    <label for="">meia</label>
    <input type="radio"  name = "tipo" value ="meia">
    <br>
    <button type="submit">Calcular</button>
    <button type="reset">Limpar</button>
    </form>
</body>
</html>