<?php 
require __DIR__ ."/imagen.php";

$imagenModel= new Imagen();
$imagen=$imagenModel->retornar_conexion();

if(isset($_POST['subir'])){ //si apreto el boton
    $cargarImg=($_FILES['imagen']['tmp_name']);
    $img=fopen($cargarImg, 'rb');//leer el archivo como binario
    $type=($_FILES['imagen']['type']);
    
}
    $imagen=$imagenModel->save_img($img,$type);

header('Location: index.php');
?>