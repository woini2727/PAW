<?php
include ('index.html');
$target_dir = "img/";
$target_thumbs =  "img/thumbs/";
$name_thumbs = $target_thumbs . basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_thumbs_file = $target_thumbs . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Archivo no es una imagen";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "El archivo ya existe.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Solo JPG, JPEG, PNG & GIF permitidos";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "No se puede subir el archivo";

} else {


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " ha sido subidooooo.";
        
        $orgfile = $target_file;
        list($width, $height)=getimagesize($orgfile);
        $newfile=imagecreatefromjpeg($orgfile);
        $newwidth=100;
        $newheight=50;
        
        $trucolor = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($trucolor, $newfile, 0, 0, 0, 0, $newwidth, $newwidth, $width, $height);
        imagejpeg($trucolor,$name_thumbs,100);
        echo '<img src="'.$name_thumbs.'">';
     

    } else {
        echo "El archivo no se pudo subir";
    }

}
?>