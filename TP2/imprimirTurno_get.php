
<?php  
	$titulo=$_GET["titulo"];
	$nombre=$_GET["nombre"];
	$email=$_GET["email"];
	$telefono=$_GET["telefono"];
	$edad=$_GET["edad"];
	$talle=$_GET["talle"];
	$altura=$_GET["altura"];
	$fecha_nac=$_GET["fecha_nacimiento"];
	$pelo=$_GET["color_pelo"];
	$turno=$_GET["horario"];
	echo "Los datos de mi turno son: ".$titulo." ".$nombre." ".$email." ".$telefono." ".$edad." ".$talle." ".$altura." ".$fecha_nac." ".$pelo." ".$turno; 


//diferencia entre get y post http://localhost/paw/imprimirTurno.php?titulo=aa&nombre=Salvador&email=salvador.woini%40gmail.com&telefono=s23&edad=2&talle=21&altura=1%2C50&fecha_nacimiento=2018-03-21&color_pelo=dsd&horario=8%3A00
	?>

