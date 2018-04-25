 <!DOCTYPE html>
<html>
<head>
	<title>Subir Img a BD</title>
</head>
<body>
		<section>
			<form action="save.img.php" method="POST" enctype="multipart/form-data">
				<label for="imagenes">Cargar Imágen</label><br>
				<input type="file" name="imagen" id="imagen" accept="image/png"/>
    			<input type="submit" name="subir" value="Subir Imagen"/>
			</form>
		</section>
</body>
</html>