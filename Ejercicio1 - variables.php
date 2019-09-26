<!-- Ejercicio 1 - Ferran Herrero 20/09/2019 -->
<!DOCTYPE html>
<html>
	<head>
		<title>Hello world</title>
	</head>
	<body>
		<?php  
			// declarar constantes
			define("backgroundColor", "tomato");
			define("links", "#00FF00");
			define("letterColor", "#FF5A14");
			define("H1Color", "green");
			define("message", "Aprenem PHP com qui no vol la cosa.");

			// mostrar por pantalla
			echo "<p><font color='" . letterColor ."'> " . message . " </font></p>";

		?>
	</body>
</html>