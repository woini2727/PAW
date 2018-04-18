<?php 
	requiere __DIR__ . '/classes/Turnos.php';

	if (empty($_POST)){
		throw new Exception("Error en peticion", 1);
		
	}

	$datosTurnos = [
		
	 "titulo" => $_POST['titulo']

	"titulo"=>$_POST["titulo"];
	"nombre"=>$_POST["nombre"];
	"email"=>$_POST["email"];
	"minutos"=>$_POST["minutos"];
	"telefono"=>$_POST["telefono"];
	"edad"=>$_POST["edad"];
	"talle"=>$_POST["talle"];
	"altura"=>$_POST["altura"];
	"fecha_nac"=>$_POST["fecha_nacimiento"];
	"pelo"=>$_POST["color_pelo"];
	"turno"=>$_POST["horario"];

	];

	pos

 ?>