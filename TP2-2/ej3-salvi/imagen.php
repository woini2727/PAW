<?php 	
	/**
	*  
	*/
	class Imagen 
	{
		
		public function __construct(){}

		public function save_img($img,$tipo){
			$pdo=$this->retornar_conexion();
			 $query = $pdo->prepare("INSERT INTO imagenes (imagen, tipo_imagen) VALUES (:imagen, :tipo)");
        
	
			$query->bindParam(':imagen', $img, PDO::PARAM_LOB);
			$query->bindParam(':tipo', $tipo, PDO::PARAM_STR);
			$query->execute();

		}

	
		public  function retornar_conexion(){
					$servername = "localhost";
					$username = "root";
					$password = "";

					try {
					    $conn = new PDO("mysql:host=$servername;dbname=imgdb", $username, $password);
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

	public function obtener_img(){
		$pdo=$this->retornar_conexion();
		$query = $pdo->prepare("SELECT imagen FROM imagenes ");
        $query->execute();
        //$imagenes=$pdo->query("SELECT imagen FROM imagenes ");
        return $query->fetchall();
	}
	}
	?>