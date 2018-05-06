<?php 
	  require __DIR__."/get.imagenes.php";				
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mis Imagenes</title>
</head>
<body>
	<h1>Mis Imágenes<h1><br>
		<?php
			foreach ($imagen as $img ) {
					echo 
							'<img src="data:image/png;base64, '.base64_encode($img['imagen']).'"
							height="200" width="300"> ';
					
			}
					
				?>

		<br><a href="cargar.imagen.php">Cargar Imágenes</a>		
</body>
</html>