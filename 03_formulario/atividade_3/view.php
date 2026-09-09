<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade_3</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="logica.php" method= "POST">
        <label for=""> Primeiro Número:</label>
        <input type="number" name= "numero">
        <br><br>

        <label for=""> Segundo Número:</label>
        <input type="number" name= "numero">
        <br><br>
        <select name="Operação" id="">
            <option >Divisão/</option>
            <option >Multiplicação*</option>
            <option >Soma + </option>
            <option >Subitração -</option>
        </select>
        <br><br>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>