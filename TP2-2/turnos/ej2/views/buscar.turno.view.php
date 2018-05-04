
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Turnos dr PAW</title>
</head>
<body>
	<h1>Reserve su turno</h1>
	<form action="buscar.turno.php"" method="POST" enctype="multipart/form-data" style="text-align: center;">
			<label>Nro de turno a buscar: </label>
			<input type="text" name="buscarID" required >
			<button type="submit" value="submit">Buscar</button><br><br><br>
			
			<label for="titulo">Titulo</label>
		 	<select name="titulo" size="1" name="titulo">
	 			<option value="Sr">Sr</option>
	 			<option value="Sra">Sra</option>
	 			<option value="Sta">Sta</option>
	 		</select>

		 	<label for="nombre">Nombre</label>
		 	<input type="text" name="nombre" value=<?= $t[0]['nombre']?>> <br>
		 	<label for="E-mail">E-mail</label>
		 	<input type="email" name="email" value=<?= $t[0]['email'] ?>><br>
		 	<label for="telefono">Telefono</label>
		 	<input type="text" name="telefono" value=<?= $t[0]['telefono'] ?>><br>
		 	<label for="edad">Edad</label>
		 	<input type="number" name="edad" value=<?= $t[0]['edad'] ?>><br>
		 	<label for="talle">Talle</label>
		 	<input type="number" name="talle" min="20" max="45" value= <?= $t[0]['talle'] ?> ><br>
		 	<label for="altura">Altura</label>
			<input type="text" name="altura" value= <?= $t[0]['altura'] ?>><br>
			<label for="fecha de nacimiento">fecha de nacimiento</label>
			<input type="text" name="fecha" value=<?= $t[0]['fecha'] ?>><br>
	
	 		<label for="color de pelo">color de pelo</label>
	 		<input type="text" name="color_pelo" value=<?= $t[0]['pelo'] ?>><br>
	 		<label for="horario del turno">Horario del Turno</label>
			<input type="text" value=<?= $t[0]['hora'] ?>>:
			<input type="text" value=<?= $t[0]['minutos'] ?>>


	 		<br>
	 		<button type="reset" value="reset">Limpiar</button>
	 		<form>
	 			

</body>
</html>