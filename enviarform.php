<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>

<form action="save.php" method="POST">

	Título:<input type="text" name="pagina" value="Meu arquivo para teste"><p>

<select name="funcao">

	<option value="Update">Atualizar</option>
	<option value="Apagar">Apagar</option>
	<option value="LeLinha">LeLinha</option>
	<option value="EscreveNoFinal">EscreveNoFinal</option>
	<option value="EscreveNoFinal">EscreNoInicio</option>

</select>

	<p><textarea rows="4" cols="50" name="conteudo">


</textarea>
<p><input type="submit" value="Enviar comando">
</form>
<p>Resultado:<br>
