<?php 

require __DIR__.'/../model/PdoFactory.php';

class turnos{

	private $titulo;
	private $nombre;
	private $email;
	private $telefono;
	private $edad;
	private $talle;
	private $altura;
	private $fecha_nac;
	private $pelo;
	private $hora;
	private $minutos;
	private $campos = ['id_turno','titulo', 'nombre','email','telefono','edad','talle','altura','fecha','pelo','hora','minutos'];

	public static function SelectID($id)
	{
		$pdo1 = PDOFactory::connect();
	$sentencia = $pdo1->query("SELECT * FROM ej8_turnos ");
	$data=[];
	// PDO::FETCH_NUM o PDO::FETCH_ASSOC
		while ($row = $sentencia->fetch(PDO::FETCH_ASSOC)) {
			$data[]=($row);
			
		}
		return $data;
	}
		/*
		// PDO::FETCH_NUM o PDO::FETCH_ASSOC
		while ($row = $sentencia->fetch(PDO::FETCH_ASSOC)) {
		    print_r($row);
		}
	}


		*/
}
?>