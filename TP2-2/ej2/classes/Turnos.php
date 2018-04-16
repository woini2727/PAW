<?php 
require __DIR__ . '/../core/PdoFactory.php';


class Turno {

	private $titulo;
	private $nombre;
	private $email;
	private $minutos;
	private $telefono;
	private $edad;
	private $talle;
	private $altura;
	private $fecha_nac;
	private $pelo;
	private $turno;


	public function selectAll() {
		$pdo = PdoFactory::build();
		$query = $pdo->prepare("SELECT * FROM ej8_turnos");
		$query->execute();
		return $query->fetchAll();
		
	}
	
}

 ?>