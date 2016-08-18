<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
		/********TIPOS DE VARIABLES**********/
		//BOOLEANO
		$esEstudiante=false;
		//ENTERO
		$edad=20;
		//punto flotante
		$valor_pi=3.1416;
		//cadena de texto
		$nombre="Jose Carlos";
		//NULO
		$semestre=null;

		echo '<p> El tipo de $esEstudiante es:'.gettype($esEstudiante).'</p>';
		echo "<p style='color:blue'> El tipo de $esEstudiante es:".gettype($esEstudiante)."</p>";

		
		echo '<p> El tipo de $edad es:'.gettype($edad).'</p>';
		echo "<p style='color:red'> El tipo de $edad es:".gettype($edad)."</p>";

		echo '<p> El tipo de $valor_pi es:'.gettype($valor_pi).'</p>';
		echo "<p style='color:green'> El tipo de $valor_pi es:".gettype($valor_pi)."</p>";

		echo '<p> El tipo de $nombre es:'.gettype($nombre).'</p>';
		echo "<p style='color:pink'> El tipo de $nombre es:".gettype($nombre)."</p>";

		echo '<p> El tipo de $semestre es:'.gettype($semestre).'</p>';
		echo "<p style='color:skyblue'> El tipo de $semestre es:".gettype($semestre)."</p>";

		/**************operador ternario********************/
		echo ($esEstudiante?"Hola Estudiante":"quien eres");
		echo "<br>";
		echo "<br>";

		echo (3>4? "Correcto":"Incorrecto");//la primera respuesta actua a TRUE y la segunda respuesta actua a FALSE 
							//EJEMPLO ↓
							//echo (3>4? "incorrecto":"correcto");
/************************************************************/
/*				verdad = Incorrecto 						*/
/*				false = correcto 							*/
/************************************************************/
		/*****************constantes************/
		//una constante en PHP se clasifica usando la funcion
		//define()
		define("MI_NUMERO_TELEFONICO", +51999992510);
					/************terminos de eficiencia******/
		echo "<p style='color:brown'>mi n&uacutemero telef&oacutenico es:", MI_NUMERO_TELEFONICO,"</p>";//mi número telefónico es:51999992510
					/*envia respuestas de manera mas rapida sin analizar demasiado*/
		echo "<p style='color:violet'>mi n&uacutemero telef&oacutenico es:". MI_NUMERO_TELEFONICO."</p>";//mi número telefónico es:51999992510
					/*envia respuestas despues de analizar cada elemento antes y despues de cada punto, si aparece un error en encritura toda la linea de codigo sale en error*/
		define("MI_NUMERO_TELEFONICO", +98765432102);
		echo "<p style='color:yellow'>mi n&uacutemero telef&oacutenico es:", MI_NUMERO_TELEFONICO,"</p>";//respeta el valor del primer define(), asi que no cambia la respuesta "mi número telefónico es:51999992510"

		/*constantes predefinidas*/
		echo __FILE__,"<br>";
		echo __DIR__,"<br>";
		/*********************respuesta**********************/
		/*C:\AppServ\www\PROGRAMACION-WEB\17-08-2016.php 	*/
		/*C:\AppServ\www\PROGRAMACION-WEB 					*/
		/****************************************************/

		/****************WARNING****************/
		error_reporting(0);
		error_reporting(-1);
	?>
	</body>
</html>