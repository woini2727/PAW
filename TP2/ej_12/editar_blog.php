<?php
	$titulo=$_POST["titulo"];
	$myfile = fopen("Titulo.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $titulo);
	fclose($myfile);

	$epigrafe=$_POST["epigrafe"];
	$myfile = fopen("Descripcion de la img.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $epigrafe);
	fclose($myfile);

///////

	$target_dir = "img/";
	$target_file =$target_dir. "foto_blog.jpg"; //aca le puse el nombre que yo quiero sino iria basename($_FILES["fileToUpload"]["name"]
	
	// Check if file already exists
//	if (file_exists($target_file)) {
  //  	echo "Sorry, file already exists.";
    //	$uploadOk = 0;
	//}
	// if everything is ok, try to upload file
	  if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imagen"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

	include("Blog.php");
?>