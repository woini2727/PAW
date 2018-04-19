<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Turnos dr PAW</title>
</head>
<body>
	<h1>Reserve su turno</h1>
	<form action="../guardar.blog.php" method="post" enctype="multipart/form-data" style="text-align: center;">
		 	<label for="titulo">Titulo</label>
		 	<select name="titulo" size="1" name="titulo">
	 			<option value="Sr">Sr</option>
	 			<option value="Sra">Sra</option>
	 			<option value="Sta">Sta</option>
	 		</select>

		 	<label for="nombre">Nombre</label>
		 	<input type="text" name="nombre"><br>
		 	<label for="E-mail">E-mail</label>
		 	<input type="email" name="email"><br>
		 	<label for="telefono">Telefono</label>
		 	<input type="text" name="telefono"><br>
		 	<label for="edad">Edad</label>
		 	<input type="number" name="edad"><br>
		 	<label for="talle">Talle</label>
		 	<input type="number" name="talle" min="20" max="45"><br>
		 	<label for="altura">Altura</label>
				<input type="altura"><br>
			<label for="fecha de nacimiento">fecha de nacimiento</label>
			<input type="date" name="fecha_nacimiento"><br>
	
	 		<label for="color de pelo">color de pelo</label>
	 		<input type="text" name="color_pelo"><br>
	 		<label for="horario del turno">Horario del Turno</label>
	 		<select name="horario" size="1" name="horario"><br>
	 			<option value="8">8</option>
	 			<option value="9">9</option>
	 			<option value="10">10</option>
	 			<option value="11">11</option>
	 			<option value="12">12</option>
	 			<option value="13">13</option>
	 			<option value="14">14</option>
	 			<option value="15">15</option>
	 			<option value="16">16</option>
	 			<option value="17">17</option>
	 			
	 		</select>
	 		<select name="minutos" size="1" name="minutos"><br>
	 			<option value="00">:00</option>
	 			<option value="15">:15</option>
	 			<option value="30">:30</option>
	 			<option value="45">:45</option>	 			
	 		</select>
	 		<br>
	 		<button type="reset" value="reset">Limpiar</button>
	 		<button type="submit" value="submit">Enviar</button>

		 </form>
</body>
</html>