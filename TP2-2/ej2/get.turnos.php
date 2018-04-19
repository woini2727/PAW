<?php  

require __DIR__  . '/classes/Turnos.php';
#require __DIR__ . '/classes/Turnos.php';
$TM = new Turnos();
$turno = $TM->selectAll();

 ?>