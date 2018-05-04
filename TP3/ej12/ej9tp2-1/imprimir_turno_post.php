<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php  
	$titulo=$_POST["titulo"];
	$nombre=$_POST["nombre"];
	$email=$_POST["email"];
	$minutos=$_POST["minutos"];
	$telefono=$_POST["telefono"];
	$edad=$_POST["edad"];
	$talle=$_POST["talle"];
	$altura=$_POST["altura"];
	$fecha_nac=$_POST["fecha_nacimiento"];
	$pelo=$_POST["color_pelo"];
	$turno=$_POST["horario"];
	echo "Los datos de mi turno son:<h3> <br>".$titulo.":</h3> <h1>".$nombre.".</h1> <br> Su email es: ".$email."<br> Tel: ".$telefono." Edad: ".$edad." <br> Talle:".$talle."  Altura: ".$altura." Fecha de nacimiento: ".$fecha_nac." <br> Color de pelo".$pelo." <br> Su turno fue guardado para: ".$turno.":".$minutos; 

	?>
</body>
</html>

