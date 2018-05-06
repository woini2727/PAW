<?php

require_once __DIR__ . "/conexion_db.php";
class Comentario{
		public function selectAll(){
			
			 $pdo =new Conexion();
			 $pdo=$pdo->retornar_conexion();
	        	
	        $query = $pdo->prepare("SELECT * FROM articulo  inner join comentarios on id_articulo=id_art"); 
	        $query->execute();
	        return $query->fetchAll();
    	}
    	public static function insertarComentario($comentario,$id_art){
    		
			 $pdo =new Conexion();
			 $pdo=$pdo->retornar_conexion();
    		$query = $pdo->prepare("INSERT INTO comentarios (id_art,comentario) VALUES ($id_art,'$comentario')");
    		$query->execute();
    	}

    	public static function eliminarComentario($id_comentario){
    		
			 $pdo =new Conexion();
			 $pdo=$pdo->retornar_conexion();
    		$query = $pdo->prepare("DELETE FROM comentarios where id_comentario=$id_comentario");
    		$query->execute();
    	}

  
}
?>