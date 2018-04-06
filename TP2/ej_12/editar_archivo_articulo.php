<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
<?php 
	$nombre_archivo=$_POST["articulo"];
	$titulo=$_POST["titulo"];
	$descripcion=$_POST["descripcion"];
	$target_dir="img/";
	$target_file = $target_dir . basename($_FILES["imagen"]["name"]);
	$fecha=date("Y/m/d");

	if (move_uploaded_file($_FILES['imagen']['tmp_name'],$target_file)) {
    	//echo "El fichero es válido y se subió con éxito.\n";
	} else {
   		//echo "¡Posible ataque de subida de ficheros!\n";
	}
	unlink($nombre_archivo.".txt");
	$myfile=fopen($nombre_archivo.".txt", "w") or die ("no existe el archivo");

  	file_put_contents($nombre_archivo.".txt", $titulo."\n", FILE_APPEND | LOCK_EX);
  	file_put_contents($nombre_archivo.".txt", $descripcion."\n", FILE_APPEND | LOCK_EX);
  	file_put_contents($nombre_archivo.".txt", $fecha."\n", FILE_APPEND | LOCK_EX);
  	file_put_contents($nombre_archivo.".txt", $target_file, FILE_APPEND | LOCK_EX);
			
	
	fclose($myfile);
	include("blog.php");
?>
</body>
 </html>