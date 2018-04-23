<?php  

require __DIR__  . '/classes/Turnos.php';

$turno = new Turnos();

$ej8_turnos = $turno->selectAll();

 ?>