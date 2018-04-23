<?php 

class PDOFactory{


 
 	public static function connect() {

		try {
			$params = [
			    'host' => 'localhost',
			    'user' => 'postgres',
			    'pwd' => 'postgres',
			    'db' => 'rod_woini_tp2_2'
			];

		    $dsn = sprintf("pgsql:host=%s;dbname=%s", $params['host'], $params['db']);

		    // Se crea el objeto conexion
		    $pdo = new PDO($dsn, $params['user'], $params['pwd']);

		} catch (PDOException $e) {
		    echo $e->getMessage();
		} catch (Throwable $e) {
		    echo $e->getMessage();
		}
		return $pdo;
 	}
}
 ?>