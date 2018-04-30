
<!DOCTYPE html>
<html>
<head>
	<title>Agregar comentario</title>
	<link rel="stylesheet" type="text/css" href="../css/blog.css">
</head>
<body>
	<main>
		<?php $id_art=$_GET['id_articulo']?>
		<form action="../controladores/save.comentario.php?id_articulo=<?=$id_art?>" method="post"  enctype="multipart/form-data">
			<label for="comentario">Nuevo Comentario </label>
			<input type="text" name="comentario" placeholder="Ingrese nuevo comentario"  required="required"><br>
			<input type="submit" name="Aceptar">
		</form>
	</main>
</body>
</html>