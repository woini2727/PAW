<?php 
	$titulo=$_POST["titulo"];
	$descripcion=$_POST["descripcion"];
	//$imgen=$_FILE["imagen"];
	$target_dir="img/";
	$target_file = $target_dir . basename($_FILES["imagen"]["name"]);
	$fecha=date("Y/m/d");

	if (move_uploaded_file($_FILES['imagen']['tmp_name'],$target_file)) {
    	//echo "El fichero es válido y se subió con éxito.\n";
	} else {
   		//echo "¡Posible ataque de subida de ficheros!\n";
	}
	//agrego una linea a mi indice
	$myfile = fopen("persistencia.txt", "r") or die("Unable to open file!");
	$archivo="persistencia.txt";
	$cant_lineas=count(file($archivo));
	
	$appen="articulo".$cant_lineas;
	$nombre_img=basename($_FILES['imagen']['name']);
	// usando la bandera FILE_APPEND para añadir el contenido al final del fichero
	// y la bandera LOCK_EX para evitar que cualquiera escriba en el fichero al mismo tiempo
	file_put_contents("persistencia.txt", $appen."\n", FILE_APPEND | LOCK_EX);
	fclose($myfile);
	$myfile = fopen($appen.".txt", "w") or die("Unable to open file!");
  	file_put_contents($appen.".txt", $titulo, FILE_APPEND | LOCK_EX);
  	file_put_contents($appen.".txt", "\n".$descripcion, FILE_APPEND | LOCK_EX);
  	file_put_contents($appen.".txt", "\n".$fecha, FILE_APPEND | LOCK_EX);
  	file_put_contents($appen.".txt", "\n".$target_file, FILE_APPEND | LOCK_EX);
			
	
	fclose($myfile);
	//agrego un archico nuevo con el titulo,desc y la img
	include("blog.php");
 ?>