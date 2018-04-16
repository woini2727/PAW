 <?php 
 	$parametros = [
 		'host' => 'localhost',
 		'user' => 'postgresql',
 		'pass' => 'postgresql',
 		'db' => 'rod_woini_tp2_2'
 	];
	echo'connect';
 	try {
 		$DataSource = sprintf("psql:host=%s;dbname=%s", $parametros['host'],$parametros['db']);

 		$pdo = new PDO($DataSource, $parametros['user'],$parametros['pass']);
 		echo'connect';
 	} catch (Exception $e| PDOException $e |Throwable $e ) {
 		echo $e->getMessage();
 	}

  ?>