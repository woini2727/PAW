<?php 


error_reporting(E_ALL);
ini_set('display_errors', '1');

	require __DIR__ .'/classes/Turnos.php';
/*
	if (empty($_POST)){
		throw new Exception("Error en peticion", 1);
	}
*/
	$datosTurnos = [
	"titulo"=>$_POST["titulo"],
	"nombre"=>$_POST["nombre"],
	"email"=>$_POST["email"],
	"minutos"=>$_POST["minutos"],
	"telefono"=>$_POST["telefono"],
	"edad"=>$_POST["edad"],
	"talle"=>$_POST["talle"],
	"altura"=>$_POST["altura"],
	"fecha"=>$_POST["fecha_nacimiento"],
	"pelo"=>$_POST["color_pelo"],
	"hora"=>$_POST["horario"]
		]; 

#print_r($datosTurnos);
$turnos = new Turnos();
$turnos->SetTurno($datosTurnos);
$turnos->insert();
$ultimoTurno = $turnos->getLastId();
require __DIR__ .'/views/show.turno.php';

 ?>