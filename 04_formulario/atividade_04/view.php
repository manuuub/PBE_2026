<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Média</title>
</head>
<body>
    <h1>Calcular Média do Aluno</h1>
    <form action="logica.php" method= "POST">
        <h2 for=""> Nome do Aluno:</h2>
        <input type="text" name= "nome">
        <br>
         <h2 for=""> Nota 1:</h2>
         <input type="number" name= "nota1">
         <br>

            <h2 for="">Nota 2 :</h2>
            <input type="number" name= "nota2">
            <br>

                <h2 for="">Nota 3:</h2>
                <input type="number" name= "nota3">
                <br>

    <button type="submit">Calcular Média </button>
    <button type="reset">Limpar</button>
    </form>
</body>
</html>