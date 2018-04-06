<!DOCTYPE html>
<html>
<head>
	<title>eliminar_ariculo</title>
</head>
<body>
	<form action="editar_archivo_articulo.php" method="post" enctype="multipart/form-data">
		<?php
			$cont=0;	

			 $myfile=fopen("persistencia.txt", "r") or die ("no existe el archivo");
			//muestro los articulos
			 
			while (!feof($myfile)) {
			$linea=fgets($myfile);
			$linea=trim($linea);
				if ($linea!==""){
					 echo "<input type=radio name=articulo value=".$linea.">".$linea."<br><br>";
					 ++$cont;}
					}
		 ?>


		Titulo del articulo<input type="text" name="titulo"><br><br>
		Descripcion del articulo<input type="text" name="descripcion"><br><br>
		Imagen <input type="file" name="imagen" id="imagen" accept="image/x-png,image/gif,image/jpeg"><br><br>
		<input type="submit" name="Enviar" value="Aceptar">
		</form>
	 
</body>
</html>