<link rel="stylesheet" type="text/css" href="css/blog.css">
<html>
<body>
	<h1>Mi Blog</h1><br>	
	<?php 
	$lista_articulos=array();

	//buscamos los archivos de texto que tienen un articulo del blog y los pongo en un array

	$myfile = fopen("persistencia.txt", "r") or die("Unable to open file!");
		while(!feof($myfile)) {
  			$linea=trim(fgets($myfile));
  			if ($linea!==""){
  			array_push($lista_articulos,$linea.".txt");
  			}
  			//print_r($lista_articulos);
			}
	fclose($myfile);
	//print_r($lista_articulos);
	?>
	<article>
	<?php 
	//recorro el array y de cada archivo saco titulo, descripcion y si tiene img
		if ($lista_articulos!==null){
				foreach ($lista_articulos as $linea) {
					//echo $linea;
					$linecount = 0;	
					$myfile = fopen($linea, "r") or die("Unable to open file!");
					//leo cada archivo y levanto titulo, descripcion e img
					while(!feof($myfile)) {
						
			  			$linea=fgets($myfile);

			  			if($linecount==0){
			  				echo "<h2>".$linea."</h2>";
			  			}
			  			if($linecount==1){
			  				echo "<p>".$linea."</p>";
			  			}
			  			if($linecount==3){
			  				$linea=trim($linea);
			  				echo "<figure>"."<img src=".$linea." height=70 width=70></figure><br>";
			  			}
			  			if($linecount==2){
			  				echo "Fecha de subida: " . $linea . "<br>";
			  			}
			  			$linecount++;
					}
					fclose($myfile);
					
				}

				}
	?>

	</article>
	<br><br><br>
	<a href="agregar_post.html">Agregar Articulo</a> <br><br>
	<?php  
		$myfile = fopen("persistencia.txt", "r") or die("Unable to open file!");
		$linea=fgets($myfile);
		$linea=trim($linea);
		if ($linea!==""){
		echo"<a href=eliminar.php>Eliminar Articulos</a><br><br>";
		echo"<a href=editar.php>Editar Articulos</a>";
		}
	?>

</body>

</html>