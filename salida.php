<html>
	<head>
		<title>
			Programa Dia de la Mujer
		</title>
	</head>
	<body>
		<?php
			$Nombre = $_GET["txtNombre"];
			$Edad = $_GET["txtEdad"];
			$Genero = $_GET["rbGenero"];
			//By Kevin
			
			if ($Genero == 'F') {
				$conexion = mysqli_connect("localhost:8889","root","root","mujer");
				$consulta = mysqli_query($conexion,"insert into datos values ('','$Nombre','$Edad','Femenino');") or die (mysqli_error());

				$consulta2 = mysqli_query($conexion,"select * from datos;") or die (mysqli_error());
				if (mysqli_num_rows($consulta2) > 0) {
					while ($filas = mysqli_fetch_array($consulta2)) {
						echo "<font color='Orange'>" ."Nombre: ".$filas['Nombre']."<br>"."</font>";
						echo "<font color='Orange'>" ."Edad: ".$filas['Edad']."<br>"."</font>";
						echo "<font color='Orange'>" ."Genero: ".$filas['Genero']."<br><br>"."</font>";
					}
				} else {
					echo "Todavia no hay visitas";
				}
				mysqli_close($conexion);
			} else {
				$conexion = mysqli_connect("localhost:8889","root","root","mujer");
				$consulta = mysqli_query($conexion,"insert into datos values ('','$Nombre','$Edad','Masculino');") or die (mysqli_error());

				$consulta2 = mysqli_query($conexion,"select * from datos;") or die (mysqli_error());
				if (mysqli_num_rows($consulta2) > 0) {
					while($filas = mysqli_fetch_array($consulta2)) {
						echo "Nombre: ".$filas['Nombre']."<br>";
						echo "Edad: ".$filas['Edad']."<br>";
						echo "Genero: ".$filas['Genero']."<br><br>";
					}
				} else {
					echo "Todavia no hay visitas";
				}
				mysqli_close($conexion);
			}
		?> 
	</body>
</html>