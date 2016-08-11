<!DOCTYPE html>
<html lang="es">
	<head>
		<title>10-28-2016</title>
	</head>
	<body>
	<?php date_default_timezone_set('America/Lima');
		echo date("H:i:s");
	?>
	<?php
		echo "Hola";
		?>
	<?php
	date_default_timezone_set('America/Lima');
	$hora_lima=date("H:i:s");

	date_default_timezone_set('Europe/Paris');
	$hora_paris=date("H:i:s");

	echo "<p>La hora en Lima es: ".$hora_lima."</p>";
	echo "<p>La hora em Paris es: ".$hora_paris."</P>";
	?>
	
	
	</body>
</html>
<!-- peso en el servidor
518 bytes
peso para el cliente 
456 bytes -->