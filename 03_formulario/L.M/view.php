<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body bor>
    <h2 style ="color:#B069DB;font-family:Comic Sans MS,cursive">Inscrição em Evento</h2>
    <form action="#" method= "POST" style="background:#f3e5f5;font-family:Times New Roman;padding:15px;border-radius:8px;width:350px;">
    <label for="nome">Nome Completo:</label>
    <input type="text" name="nome" style="width:100%";margin-bottom:10px;color:puple;font-family:Arial>
    <br><br>
    <label for="ingresso">Tipo de Ingresso</label>
			<select name= "" id=""  style="width:100%" required>
			<option value= ""></option>
			<option value= "">Estudante</option>
			<option value= "">Profissional</option>
			<option value= "">vip</option>
		</select>
        <br><br>
<label for="data">Data do Evento</label>
            <br>
			<input type= "date" id="data" name="data" required>
		<br><br>
        <label for="hora">Hora de Chegada:</label>
        <br>
<input type="time" id="hora" name="hora">
        <br><br>
        <button type="submit"style="background:purple;color:white;padding:5px;10px" >Inscrevar-se</button>
    </form>
</body>
</html>