<!DOCTYPE html>
<html lang="es">
	<head>
		<title></title>
	</head>
	<body>
	<?php
		/*********************variables***********************/
		//asignar valores a variables
		$nombre="Juan";
		//las variables en php inician con el simbolo " $ "
		echo "<p>Hola ".$nombre."</p>";
		echo "<p>Hola $nombre</p>";//el contenido entre " " se interpreta
		echo '<p>Hola $nombre</p>';//el contenido entre ' ' solo se muestra
		unset($nombre);
		echo "<p>Hola ".$nombre."</p>";
		echo "<p>Hola $nombre</p>";//el contenido entre " " se interpreta
		echo '<p>Hola $nombre</p>';//el contenido entre ' ' solo se muestra

		$nombre="brayan";
		echo "<p>Hola $nombre</p>";
		$nombre="null";//null es un valor especial nulo
		echo "<p>Hola $nombre</p>";

		$nombre="Juan";
		var_dump($nombre);
		$edad=18;
		var_dump($edad);
		$edad="18";
		var_dump($edad);
		var_dump(null);

		/********TIPOS DE VARIABLES**********/
		//BOOLEANO
		$esEstudiante=TRUE;
		$esVaron=FALSE;
		//ENTERO
		$edad=20;
		//punto flotante
		$valor_pi=3.1416;
		//cadena de texto
		$nombre="Jose Carlos";
		//NULO
		$semestre=null;

	?>
	</body>
</html>
<!-- goo.gl/XpqeGH -->
<!-- https://gist.github.com/docenteunitek/26168871faedfe3aee1225ea05f24d96 -->