<form action="exemplo.php" method="POST">

	<select name="pagina">
		<option value"meuarquivo.txt">meuarquivo.txt</option>
	</select><br>

<select name="funcao">

	<option value="Update">Atualizar</option>
	<option value="Apagar">Apagar</option>
	<option value="LeLinha">LeLinha</option>
	<option value="EscreveNoFinal">EscreveNoFinal</option>
	<option value="EscreveNoFinal">EscreNoInicio</option>

</select>

	<p><textarea rows="4" cols="50" name="conteudo">
<?php $learquivo = file_get_contents("meuarquivo"); echo $learquivo; ?>

</textarea>
<p><input type="submit" value="Enviar comando">
</form>
<p>Resultado:<br>
