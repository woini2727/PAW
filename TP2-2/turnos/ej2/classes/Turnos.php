<?php 

require __DIR__ . '/../core/PdoFactory.php';
class Turnos {
/*

*/
	
	private $titulo;
	private $nombre;
	private $email;
	private $telefono;
	private $edad;
	private $talle;
	private $altura;
	private $fecha;
	private $pelo;
	private $hora;
	private $minutos;
	private $campos = ['titulo', 'nombre','email','telefono','edad','talle','altura','fecha','pelo','hora','minutos'];
	private $idTurno;



	public function selectAll() {
		$pdo = PdoFactory::build();
		$query = $pdo->prepare("SELECT * FROM ej8_turnos");
        $query->execute();
        #return "<h2>hola</h2>"
        return $query->fetchAll();
		
	}
	
	
	public function SetTurno($datos){
		if ((is_null($datos['titulo']))||(is_null($datos['nombre']))) {
			throw new Exception("Error en la peticion", 1);	
		}
			foreach ($this->campos as $campo) {
				$this->$campo = $datos[$campo];
			}
		
	}



		
	public function insert() 
	{
		$campos = $this->getCampos();
		$pdoString = $this->getValoresParametrizadosPDO ();
		$pdo = PdoFactory::build();
		$query = $pdo->prepare("INSERT INTO ej8_turnos ($campos) VALUES ($pdoString)");
		$query->execute($this->getValues());
		$this->idTurno = $pdo->lastInsertId();

	}
    public function getCampos() {
        return join(',', $this->campos);
    }

 
    public function getValoresParametrizadosPDO()
    {
        return implode(',', array_fill(0, count($this->campos), '?')); // Retorna el values parametrizado para PDO
    }

    public function getValues(){
        $data = [];
        foreach ($this->campos as $campo) {
            $data[] = $this->$campo;
        }
        	return $data;
    }
	public function getLastId(){
	return $this->idTurno; 
	}

	public function BuscarPorId($id){
		/*
		$pdo = PdoFactory::build();

		#$query = $pdo->prepare("SELECT * FROM ej8_turnos");
		$query = $pdo->prepare("SELECT * FROM ej8_turnos");
        $query->execute();
        return $query->fetchAll();
		*/
		$pdo = PdoFactory::build();
		$query = $pdo->prepare("SELECT * FROM ej8_turnos where id_turno=:id");
		$query-> bindParam(':id',$id);
        $query->execute();
        #return "<h2>hola</h2>"
        return $query->fetchAll();
		

	}

/*
*/
}
 ?>
