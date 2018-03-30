<html>
<body>
	<header>
		<?php
	$myfile = fopen("Titulo.txt", "r") or die("Unable to open file!");
	echo "<h1>".fread($myfile,filesize("Titulo.txt"))."</h1>";
	fclose($myfile);
	?>

	</header>
	<article>
		<figure>
			<img src="img/foto_blog.jpg" width="150" height="150">
				
				<?php 
				$myfile = fopen("Descripcion de la img.txt", "r") or die("Unable to open file!");
				echo "<figcaption>".fread($myfile,filesize("Descripcion de la img.txt"))."</figcaption>";
				fclose($myfile);
				?>
			
		</figure>
	</article>
	<form action="editar_blog.html">
		
		<input type="submit" value="Editar">
	</form>
	<br>
	<a href="Blog.html">Volver</a>
</body>
</html>
