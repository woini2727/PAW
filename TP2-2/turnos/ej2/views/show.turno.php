<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Su turno</title>
</head>
<body><h2>Su numero de Turno: </h2>
	<?php if($ultimoTurno): ?>
       <?= $ultimoTurno ?>		
	<?php endif;?>
	<a href="../index.php">Volver</a>
</body>
</html>