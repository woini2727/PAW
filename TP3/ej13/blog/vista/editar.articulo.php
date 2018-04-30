<!DOCTYPE html>
<html>
<head>
	<title>Editar Articulo</title>
	<link rel="stylesheet" type="text/css" href="../css/blog.css">
</head>
<body>
	<main>
		<section>
			<h1>Editar mis Articulos</h1>
			<?php  //aca recibo los datos
				$tituloant=$_GET['titulo'];
				//$fecha=$_GET['fecha'];
				$foto=$_GET['foto'];
				
			?>
		</section>
		<section>
		<form action="../controladores/edit.articulos.php?foto=<?=$tituloant?>" method="post" enctype="multipart/form-data">
			<h3>Titulo actual: <?=$tituloant;?></h3><br>
			<label for="titulo">Nuevo Título </label>
			<input type="text" name="titulo"><br><br>
			<img src=<?=$foto;?> height="640" width="480"><br>
			<label for="imagen" >Imagen del Articulo Actual </label><br><br>
			<label for="nuevaimagen" >Cambiar Imagen </label><br>
			<input type="file" name="Imagen_a_Subir" value="Subir Nueva"><br><br>
			<input type="submit" name="Aceptar" value="Aceptar">
			</form>
		</section>
	</main>
	
</body>
</html>