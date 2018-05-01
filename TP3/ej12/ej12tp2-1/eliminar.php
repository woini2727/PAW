<!DOCTYPE html>
<html>
<head>
	<title>eliminar_ariculo</title>
</head>
<body>
	<form action="eliminar_articulo.php" method="post">
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
		 <input type="submit" name="Enviar" value="Eliminar">
	</form>	 
</body>
</html>