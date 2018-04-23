<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
require __DIR__ . '/src/get.turnos.php';
require __DIR__. '/src/views/index.view.php';
/*
$params = [
    'host' => 'localhost',
    'user' => 'postgres',
    'pwd' => 'postgres',
    'db' => 'rod_woini_tp2_2'
];
try {

    $dsn = sprintf("pgsql:host=%s;dbname=%s", $params['host'], $params['db']);

    // Se crea el objeto conexion
    $pdo = new PDO($dsn, $params['user'], $params['pwd']);

		} 
		catch (PDOException $e) {
		    echo $e->getMessage();
		} 
		catch (Throwable $e) {
		    echo $e->getMessage();
		}

	$sentencia = $pdo->query("SELECT * FROM ej8_turnos");
	$data=[];
	// PDO::FETCH_NUM o PDO::FETCH_ASSOC
	while ($row = $sentencia->fetch(PDO::FETCH_ASSOC)) {
		$data[]=($row);
		print_r($data);
	}
*/

 ?>