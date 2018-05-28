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


		$data= ['titulo'=>$titulo,'nombre'=>$nombre,'email'=>$email,'truno'=>$turno,'minutos'=>$minutos];

		echo $data;


	?>
