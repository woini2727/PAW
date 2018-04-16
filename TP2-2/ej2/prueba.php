<?php 

require_once('connect.php');
#includ('../connect.php');

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

 $consulta = $pdo->query("SELECT * FROM ej8_turnos");
 
 while ($row = $consulta->fetch(PDO::FETCH_ASSOC)){
	print_r($row['id_turno'].$row['nombre']);

}


 ?>