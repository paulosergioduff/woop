<?php error_reporting(0);

include "criarpagina.class.php";


$app = 'EscreveNoFinal';

	$criarpagina = new criarpagina; /* A função de usar classes e objetos ao invés de variáveis estruturais
	tem mais a ver com didática e organização do código*/

	$criarpagina->pagina = 'arquivo_de_classe.txt';
	$criarpagina->conteudo = 'Conteudo novo criado!';
	//$criarpagina->arquivoalvo = ';
	$criarpagina->$app();
	//$criarpagina->imprimeXML();

?> 
