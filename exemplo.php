<?php error_reporting(0);

include "criarpagina.class.php";
include "formulario.php";

$app = $_POST['funcao'];

	$criarpagina = new criarpagina; /* A função de usar classes e objetos ao invés de variáveis estruturais
	tem mais a ver com didática e organização do código*/

	$criarpagina->pagina = $_POST['pagina'];
	$criarpagina->conteudo = base64_encode($_POST['conteudo']);
	//$criarpagina->arquivoalvo = ';
	$criarpagina->$app();
	//$criarpagina->imprimeXML();

?> 
