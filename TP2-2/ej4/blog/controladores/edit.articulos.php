<?php
require __DIR__ . '/../modelo/articulo_class.php';

if (!empty(basename($_FILES["Imagen_a_Subir"]["name"])))	 { //cambio la imagen
    
 	//imagenes
	$target_dir = "../img/";
	$target_file = $target_dir . basename($_FILES["Imagen_a_Subir"]["name"]);
	$extension=basename($_FILES["Imagen_a_Subir"]["name"]);
	//$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
	$uploadOk = 1;

    if (move_uploaded_file($_FILES["Imagen_a_Subir"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Imagen_a_Subir"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $hoy = date("Y-m-d");
	$pathFoto=$target_dir .$extension;
	echo $extension ;
	echo $pathFoto;
	//llamo a la BD y hago update
	
	articulo::actualizarObjeto('foto',"'".$pathFoto."'","'".$_GET['foto']."'");

}


if (!empty($_POST['titulo'])) { //cambio el titulo
	$nuevo_titulo=$_POST['titulo'];
    articulo::actualizarObjeto('titulo',"'".$nuevo_titulo."'","'".$_GET['foto']."'");
}
header('Location: ../vista/index.php');

?>