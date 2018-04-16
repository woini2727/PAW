 <?php 
 	$parametros = [
 		'host' => 'localhost',
 		'user' => 'postgres',
 		'pass' => 'postgres',
 		'db' => 'rod_woini_tp2_2'
 	];

 	try {
 		$DataSource = sprintf("pgsql:host=%s;dbname=%s", $parametros['host'],$parametros['db']);

 		$pdo = new PDO($DataSource, $parametros['user'],$parametros['pass']);
 	} catch (Exception $e ) {
 		echo $e->getMessage();
 	}

  ?>