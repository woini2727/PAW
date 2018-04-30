<?php

	Class Tag{
		public function selectAll(){
			$pdo = self::retornar_conexion();
	        $query = $pdo->prepare("SELECT  nombre_tag,tag.id_tag,articulo.id_articulo from (tag inner join articulo_tag on tag.id_tag=articulo_tag.id_tag) inner join articulo on articulo.id_articulo=articulo_tag.id_articulo"); 
	        $query->execute();
	        return $query->fetchAll();
    	}
    	public function selectNoRepeat(){
    			$pdo = self::retornar_conexion();
    		 	$query = $pdo->prepare("SELECT * from tag"); 
	        	$query->execute();
	        return $query->fetchAll();
    	}
    	public static function insertarTag($id_art,$id_tag){
    		$pdo = self::retornar_conexion();
    		$query = $pdo->prepare("INSERT into articulo_tag (id_articulo,id_tag)  values ($id_art,$id_tag) "); 
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
				    
				    }
				catch(PDOException $e)
				    {
				  
				    }

			   return $conn; 
			    }
	}