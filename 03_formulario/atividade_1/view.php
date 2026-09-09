<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade_1</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="logica.php" method= "POST">
        <label for="">Nome:</label>
        <input type="text" name= "nome">
        <br><label for="">Email</label>
        <input type="email"  name= "email" >
        <br><label for="">Senha</label>
        <input type="password" name="senha">
        <br><br>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>