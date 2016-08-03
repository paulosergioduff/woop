<?php error_reporting(0);

include "criarpagina.class.php";
include "formulario.php";

$app = $_POST['funcao'];

	$criarpagina = new criarpagina; /* A função de usar classes e objetos ao invés de variáveis estruturais
	tem mais a ver com didática e organização do código*/

	$criarpagina->pagina = $_POST['pagina'] . ".txt"; // Sempre concatene para evitar acesso indevido a outros arquivos
	$criarpagina->conteudo = $_POST['conteudo'];//orinalmente base64_encode($_POST['conteudo']);
	//$criarpagina->arquivoalvo = ';
	$criarpagina->$app();
	//$criarpagina->imprimeXML();

?> 
