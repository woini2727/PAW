<?php


class Comentario{
		public function selectAll(){
			$pdo = self::retornar_conexion();
	        	
	        $query = $pdo->prepare("SELECT * FROM articulo  inner join comentarios on id_articulo=id_art"); 
	        $query->execute();
	        return $query->fetchAll();
    	}
    	public static function insertarComentario($comentario,$id_art){
    		$pdo = self::retornar_conexion();
    		$query = $pdo->prepare("INSERT INTO comentarios (id_art,comentario) VALUES ($id_art,'$comentario')");
    		$query->execute();
    	}

    	public static function eliminarComentario($id_comentario){
    		$pdo = self::retornar_conexion();
    		$query = $pdo->prepare("DELETE FROM comentarios where id_comentario=$id_comentario");
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