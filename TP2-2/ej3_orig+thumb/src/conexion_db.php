

<?php
	require __DIR__ . "/../../configDB.php";
	class Conexion {
		

	  	public  function retornar_conexion(){
				
	  			$dbConfig= new Config();
	  			 $dbConfig =$dbConfig->db;
				try {
				    $conn = new PDO("mysql:host=" . $dbConfig->host . ";dbname=" . $dbConfig->databasename, $dbConfig->username, $dbConfig->password);
				    // set the PDO error mode to exception
				    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				    
				    }
				catch(PDOException $e)
				    {
				    	print "<h1 style=text-align:center;>" ."¡Error! No se puede acceder a la Base de Datos! "."</h1>" . "<br/>";
				    	die();}
			   return $conn; 
			    }
   }
?>