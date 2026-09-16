<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Salario</title>
</head>
<body>
    <h1>Calculadora de Salario Liquedo</h1>
    <form action="logica.php" method= "POST">
        <label for=""> Nome do funcionario:</label>
        <input type="text" name= "Nome">
        <br><br>

        <label for=""> Salário Bruto:</label>
        <input type="number" name= "salarioBruto">
        <br><br>

        <label for="">Horas Extras:</label>
        <input type="number" name= "horaExtra">
        <br><br>

        <label for="">Benefícios:</label>
        <input type="number" name= "beneficio">
        <br><br>

        <label for="">Descontos:</label>
        <input type="number" name= "desconto">
        <br><br>
        

        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>