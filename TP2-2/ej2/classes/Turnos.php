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
	private $campos = ['titulo', 'nombre'.'email','minutos','telefono','edad','talle','atura','fecha_nac','pelo','turno'];


	public function selectAll() {
		$pdo = PdoFactory::build();
		$query = $pdo->prepare("SELECT * FROM ej8_turnos");
		$query->execute();
		return $query->fetchAll();
		
	}
	
	

	public function SetBlog($datos){
		if ($datos['titulo']||$datos['nombre']||$datos['email']||$datos['minutos']||$datos['telefono']||$datos['edad']||$datos['talle']||$datos['altura']||$datos['fecha_nac']||$datos['pelo']||$datos['turno']) {
			throw new Exception("Error en la peticion", 1);
			
		}
		foreach ($this->campos as $campo) {
			$this->$campo = $datos[$campo];
		}
	}

	public function insert(){
		
	}



}

 ?>