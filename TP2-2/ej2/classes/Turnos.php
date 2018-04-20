<?php 

require __DIR__ . '/../core/PdoFactory.php';


class Turnos {

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
	private $campos = ['titulo', 'nombre','email','minutos','telefono','edad','talle','atura','fecha_nac','pelo','turno'];

	public function print(){
		echo 'hola mundo';
	}


	public static function selectAll() {
		$pdo = PdoFactory::build();
		$query = $pdo->prepare("SELECT * FROM ej8_turnos");
		$query->execute();
		return $query->fetchAll();
		
	}
	
	
	public function SetBlog($datos){
		
		if (is_null($datos['titulo'])||is_null($datos['nombre'])) {
			throw new Exception("Error en la peticion", 1);	
		}	

		foreach ($this->campos as $campo) {
			$this->$campo = $datos[$campo];
		}
		
	}


/*
*/		
	public function insert()
	{
		$campos = $this->getCampos();
		$pdoString = $this->getValoresParametrizadosPDO ();
		$pdo = PdoFactory::build();
		$query = $pdo->prepare("INSERT INTO ej8_turnos ($campos) VALUES ($pdoString)");
		 $query->execute($this->getValues());

	}
	public function getCampos(){
		return join(',', $this->campos);
	}

	public function getValoresParametrizadosPDO()
    {
        return implode(',', array_fill(0, count($this->campos), '?')); 

    }


        public function getValues()
    {
        $data = [];
        foreach ($this->campos as $campo) {
            $data[] = $this->$campo;
        }
        return $data;
    }

}
 ?>
