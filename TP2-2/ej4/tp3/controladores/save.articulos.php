<?php
require __DIR__ . '/../modelo/articulo_class.php';

if (empty($_POST)) {
    throw new Exception("Operacion no permitida");
}
 else {
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
}
$hoy = date("Y-m-d");
$pathFoto=$target_dir .$extension;

$datosArticulo = [
    "titulo" => $_POST['titulo'],
    "fecha" =>$hoy,
    "foto" =>$pathFoto,

];

articulo::insertarObjetoBD($datosArticulo);

header('Location: /laravel/PAW/tp3/vista/index.php');


