<?php 
$boton= $_POST['boton'];
if($boton==null){
	$boton = 3;
}
switch ($boton) {
	case 0:
		include('agregar_post.php');		
	break;
	case 1:
		include('eliminar.php');	
		break;
	case 2:
		include('editar.php');
		break;
	case 3:
		include('Blog.php');
		break;
	default:
		include('Blog.php');
		break;
}

 ?>