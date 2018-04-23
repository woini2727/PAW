<!DOCTYPE html>
<html lang="es">
<head>
	<title>Agregar Articulo</title>
</head>
<body>
	<main>
	
		<form action="../controladores/save.articulos.php" method="post"  enctype="multipart/form-data">
			<label for="titulo">Titulo del Articulo </label>
			<input type="text" name="titulo" placeholder="titulo del articulo"  required="required"><br>
			<label for="imagen">Imagen del Articulo </label>
			<input type="file" name="Imagen_a_Subir"><br>
			<input type="submit" name="Aceptar">
		</form>
	</main>
</body>
</html>