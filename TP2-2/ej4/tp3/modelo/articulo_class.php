<?php  


	class articulo {
		private $titulo;


		public function __construct(){
				
		}

		public function get_titulo(){
			//obtengo el titulo de la DB
			return $titulo_articulo;
		}
		public function set_titulo($nuevo_titulo){
			//busco el id de mi titulo y cambio el titulo
			$this->titulo=$nuevo_titulo;
		}
	
		public function selectAll(){
	        $pdo = self::retornar_conexion();
	        $query = $pdo->prepare("SELECT * FROM articulo "); //inner join comentarios on id_articulo=id_art
	        $query->execute();
	        return $query->fetchAll();
    	}
    	public static function insertarObjetoBD($datos){
    			$campos = ['titulo', 'fecha', 'foto'];

    		  	$campos =join(',', $campos);
    		  	$pdoString =implode(',', array_fill(0, count($datos), '?')); // Retorna el values parametrizado para PDO
        		$pdo =self::retornar_conexion();
        		$query = $pdo->prepare("INSERT INTO articulo ($campos) VALUES ($pdoString)");

        		$data = [];
        			foreach ($datos as $campo) {
            		$data[] = $campo;
        			}
      		  	$query->execute($data);
    	}
    	public static function actualizarObjeto($columna,$dato,$dato_ant){
    		$pdo = self::retornar_conexion();

			//$query = $pdo->prepare("SELECT foto FROM articulo WHERE foto=$dato_ant");
    		$query = $pdo->prepare("UPDATE articulo SET $columna=$dato WHERE titulo=$dato_ant");
			$query->execute();
			}
		public static function borrarObjeto($columna,$dato){
			$pdo = self::retornar_conexion();
			$query = $pdo->prepare("DELETE FROM articulo WHERE $columna= $dato");
			$query->execute();
    	}
    	public static function retornar_conexion(){
				$servername = "localhost";
				$username = "root";
				$password = "";

				try {
				    $conn = new PDO("mysql:host=$servername;dbname=blogDB", $username, $password);
				    // set the PDO error mode to exception
				    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				    echo "Connected successfully"; 
				    }
				catch(PDOException $e)
				    {
				    echo "Connection failed: " . $e->getMessage();
				    }

			   return $conn; 
			    }

		}

?>
 