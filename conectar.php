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

<h1>Conectar</h1>
<form action="conectando.php" method="POST">
	<select name="banco">
		<?php 

include "reg/reg.php";

	?>
	</select><input type="submit" value="Conectar" name="">
</form>

</body>
</html>