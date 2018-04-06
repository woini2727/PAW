
<?php  
	$titulo=$_GET["titulo"];
	$nombre=$_GET["nombre"];
	$email=$_GET["email"];
	$minutos=$_GET["minutos"];
	$telefono=$_GET["telefono"];
	$edad=$_GET["edad"];
	$talle=$_GET["talle"];
	$altura=$_GET["altura"];
	$fecha_nac=$_GET["fecha_nacimiento"];
	$pelo=$_GET["color_pelo"];
	$turno=$_GET["horario"];
	echo "Los datos de mi turno son: <br>".$titulo.":</h3> <h1>".$nombre.".</h1> <br> Su email es: ".$email."<br> Tel: ".$telefono." Edad: ".$edad." <br> Talle:".$talle."  Altura: ".$altura." Fecha de nacimiento: ".$fecha_nac." <br> Color de pelo".$pelo." <br> Su turno fue guardado para: ".$turno.":".$minutos; 


//diferencia entre get y post http://localhost/paw/imprimirTurno.php?titulo=aa&nombre=Salvador&email=salvador.woini%40gmail.com&telefono=s23&edad=2&talle=21&altura=1%2C50&fecha_nacimiento=2018-03-21&color_pelo=dsd&horario=8%3A00
	?>

