<?php require __DIR__ . '/../controladores/get.tags.php';?>
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
			<h5>Seleccione los tag</h5>

			<?php  if($tag_select):  ?>
				
				<?php foreach ($tag_select as $tg) : ?>
					<input type="checkbox" name=<?=$tg['nombre_tag'] ?> value=<?=$tg['id_tag'] ?>> <?=$tg['nombre_tag'] ?><br>
				
				<?php endforeach?>

			<?php endif ?>
			
		<br><input type="submit" name="Aceptar"><br>
		</form>
	</main>
</body>
</html>