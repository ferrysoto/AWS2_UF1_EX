<!-- Ejercicio 2 forms - Ferran Herrero 20/09/2019 -->
<!DOCTYPE html>
<html>
	<head>
		<title>Forms 2</title>
	</head>
	<body>
		<!-- Pedir datos de la ecuación  -->
		<form method="post" style="padding: 15%;">
			Name: <input type="text" name="name" required/><br>
			Surname: <input type="text" name="surname" required/><br>
			Email: <input type="email" name="email" required/><br>
			<input type="submit" value="Enviar"/>
		</form>
		<div style="padding-left: 15%;">
			<?php 
				if (!empty($_POST)) {
						$name = $_POST["name"];
						$surname = $_POST["surname"];
						$email = $_POST["email"];
						$fullName = $name . " " . $surname . " " . $email . "\t";

						if (file_exists("names.txt")) {
							file_put_contents("names.txt", $fullName, FILE_APPEND | LOCK_EX);
						} else {
							file_put_contents("names.txt", $fullName);
						}
				} else {
					echo "Faltan datos en el formulario";
				}	

			?>
		</div>
	</body>
</html>