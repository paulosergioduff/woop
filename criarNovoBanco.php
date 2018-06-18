<form action="" method="POST">
<h1>Novo banco de dados</h1>
	Novo BD:<input type="text" name="novobd"><br>
	<input type="submit" value="Criar">
</form><br>

<select>

<?php error_reporting(0);

session_start();

include "criarpagina.class.php";


if (!empty($_POST['novobd']) AND $_SESSION['ultimo'] != $_POST['novobd']) {
	$criarpagina = new criarpagina; /* A função de usar classes e objetos ao invés de variáveis estruturais
	tem mais a ver com didática e organização do código*/
	$criarpagina->pagina = "reg/reg.php"; // Sempre concatene para evitar acesso indevido a outros arquivos
	$criarpagina->conteudo = "<option value='".$_POST['novobd']."'>".$_POST['novobd']."</option>";//orinalmente base64_encode($_POST['conteudo']);
	//$criarpagina->arquivoalvo = ';
	$criarpagina->EscreveNoFinal();
	$banco = "woopbds/".$_POST['novobd'];
	umask(0); mkdir($banco, 0777, true);


	$_SESSION['ultimo'] = $_POST['novobd'];
}    


include "reg/reg.php"

?>

</select>