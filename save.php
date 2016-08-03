<?php error_reporting(0);

include "woop.class.php";

########3 TRATANDO CARACTERES ESPECIAIS ###############

$pagina = $_POST['pagina'];

$string = "$pagina";
$string = iconv( "UTF-8" , "ASCII//TRANSLIT//IGNORE" , $string );
$string = preg_replace( array( '/[ ]/' , '/[^A-Za-z0-9\-]/' ) , array( '' , '' ) , $string );

echo "<p>$string<br>";



$app = $_POST['funcao'];

	$criarpagina = new criarpagina; /* A função de usar classes e objetos ao invés de variáveis estruturais
	tem mais a ver com didática e organização do código*/

	$criarpagina->pagina = "db/" . $string . ".xml"; // Sempre concatene para evitar acesso indevido a outros arquivos
	$criarpagina->conteudo = base64_encode($_POST['conteudo']);
	//$criarpagina->arquivoalvo = ';
	$criarpagina->$app();
	//$criarpagina->imprimeXML();

?> 
