<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			color: #99ff33;
		}
		a{
			color: #99ff33;
		}
	</style>
</head>
<body bgcolor="black" >
<h1>Conectado a <?php 

session_start();

if (!empty($_POST['banco'])) {
	$_SESSION['banco'] = $_POST['banco'];
}


echo $_SESSION['banco'];?></h1>


<form action="" method="POST">
<h1>Nova tabela para o banco de dados</h1>
	Nova tabela:<input type="text" name="novatabela"><br>
	<input type="submit" value="Criar">
</form><br>


<select>

<?php



include "criarpagina.class.php";

$arquivo = "reg/".$_SESSION['banco'].",tables.php";

if (!empty($_POST['novatabela']) AND $_SESSION['ultimaTabela'] != $_POST['novatabela'])  {
	

	$text = "<option value='".$_POST['novatabela']."'>".$_POST['novatabela']."</option>";
	$file = fopen($arquivo, 'a+');
	fwrite($file, $text);
	fclose($file);

$_SESSION['ultimaTabela'] = $_POST['novatabela'];

} 



if (file_exists($arquivo)) {
	include $arquivo;
}

?>
</select>

</body>
</html>