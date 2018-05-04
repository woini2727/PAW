<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saca tu turno</title>
</head>
<body>
	<h1>Turnos dr Paw</h1>
	<main>
	<a href="ej2/views/cargar.turno.view.php">Agregar Turno</a>
	<a href="ej2/buscar.turno.php">Buscar Turno</a>
		<section>

		  <?php if ($ej8_turnos) : ?>
        <ul>
            <?php foreach ($ej8_turnos as $turn) : ?>
            <li><?= $turn['nombre'] ?> <?= $turn['fecha'] ?>(<?= $turn['hora'] ?>:<?= $turn['minutos'] ?>)</li>
            <?php endforeach; ?>
        </ul>
        <?php else : ?>
        <p>No hay turno</p>
        <?php endif; ?>
		</section>
	</main>
	<a href="ej2/views/cargar.turno.view.php">Agregar Turno</a>
	<a href="ej2/buscar.turno.php">Buscar Turno</a>
</body>

</html>