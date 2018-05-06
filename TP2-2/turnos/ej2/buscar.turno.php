<?php 
/*
*/
error_reporting(E_ALL);
ini_set('display_errors', '1');
require __DIR__  . '/classes/Turnos.php';

$turno = new Turnos();
if( !empty($_POST["buscarID"])){
	$id= $_POST["buscarID"];
$t=$turno->BuscarPorId($id);
}else
{
	
$t=null;
}
#$t='casa';



require __DIR__. '/views/buscar.turno.view.php';
