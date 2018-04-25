<?php 
require __DIR__ ."/imagen.php";

$imagenModel= new Imagen();

if(isset($_POST['subir'])){ //si apreto el boton
    $cargarImg=($_FILES['imagen']['tmp_name']);
    $img=fopen($cargarImg, 'rb');//leer el archivo como binario
    $type=($_FILES['imagen']['type']);
    
}
    $imagen=$imagenModel->save_img($img,$type);
    //get img id
    $id=$imagenModel->get_img_id($img);
    //create thumbnail
    $imagen=$imagenModel->thumbnail($id);
    //save img
   
    header('Location: index.php');
 
?>