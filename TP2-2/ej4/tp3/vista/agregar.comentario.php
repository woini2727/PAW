<!DOCTYPE html>
<html>
<head>
	<title>Agregar comentario</title>
</head>
<body>
	<main>
		
		<form action="../controladores/save.comentario.php" method="post"  enctype="multipart/form-data">
			<label for="comentario">Nuevo Comentario </label>
			<input type="text" name="comentario" placeholder="Ingrese nuevo comentario"  required="required"><br>
			<input type="submit" name="Aceptar">
		</form>
	</main>
</body>
</html>