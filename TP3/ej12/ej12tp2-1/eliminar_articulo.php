<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
<?php 
	$nombre_archivo=$_POST["articulo"];
	//echo $nombre_archivo;
	$cadena= array();

	$myfile=fopen("persistencia.txt", "r") or die ("no existe el archivo");
	//muestro los articulos
		while (!feof($myfile)) {
			$linea=fgets($myfile);
			$linea=trim($linea);
			if ($linea!==$nombre_archivo && $linea!==""){
				array_push($cadena, $linea);
				//echo $linea;
				//echo $nombre_archivo;
			}
		}
	fclose($myfile);			 
	unlink("persistencia.txt");
	unlink("$nombre_archivo".".txt");

	$myfile=fopen("persistencia.txt", "w") or die ("no existe el archivo");
	foreach ($cadena as $value) {
		file_put_contents("persistencia.txt", $value. "\n", FILE_APPEND | LOCK_EX);

	}
	fclose($myfile);
	include("Blog.php");

	//<a href="blog.php">Volver</a>
 ?>
 
 
 </body>
 </html>