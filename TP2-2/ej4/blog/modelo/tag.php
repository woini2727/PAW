<?php
require_once __DIR__ . "/conexion_db.php";
	Class Tag{
		public function selectAll(){
			
			 $pdo =new Conexion();
			 $pdo=$pdo->retornar_conexion();
	        $query = $pdo->prepare("SELECT  nombre_tag,tag.id_tag,articulo.id_articulo from (tag inner join articulo_tag on tag.id_tag=articulo_tag.id_tag) inner join articulo on articulo.id_articulo=articulo_tag.id_articulo"); 
	        $query->execute();
	        return $query->fetchAll();
    	}
    	public function selectNoRepeat(){
    			
			 $pdo =new Conexion();
			 $pdo=$pdo->retornar_conexion();
    		 	$query = $pdo->prepare("SELECT * from tag"); 
	        	$query->execute();
	        return $query->fetchAll();
    	}
    	public static function insertarTag($id_art,$id_tag){
    		
			 $pdo =new Conexion();
			 $pdo=$pdo->retornar_conexion();
    		$query = $pdo->prepare("INSERT into articulo_tag (id_articulo,id_tag)  values ($id_art,$id_tag) "); 
    		$query->execute();
	      
    	}


	}