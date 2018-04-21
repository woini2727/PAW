<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<main>
	<section>

		<h1>Mis Publicaciones</h1>
		 	 <?php if ($articulo) : ?>
        <ul>
            <?php foreach ($articulo as $art) : ?>

            <li><h3><?= $art['titulo'] ?> <? //$art['foto'] ?> </h3> </li>
           	 	<figure>
           	 	<figcaption>	
           	 	<img src=<?= $art['foto']?> width="50" height="50">
                </figcaption>
            	</figure>
              <h4>Comentarios:</h4>
                 <?php if ($Comentario) : ?>   
                    <?php foreach ($Comentario as $comm) : ?>
                       <?php if ($art['id_articulo']==$comm['id_art']) : ?>  
                          <li><p><?=$comm['comentario'] ?></p></li>
                          <a href="../controladores/delete.comentario.php?id_comentario=<?=$comm['id_comentario']?>">Borrar</a>
                       <?php endif; ?>
                    <?php endforeach; ?>
                 <?php endif; ?><br>
              <a href="agregar.comentario.php?id_articulo=<?=$art['id_articulo']?>">Agregar Comentario</a>
            	<p>fecha de publicacion: <?= $art['fecha'] ?></p>
                 
                <a href="editar.articulo.php?fecha=<?= $art['fecha'] ?>&titulo=<?= $art['titulo'] ?>&foto=<?= $art['foto']?>">Editar</a>
                <a href="../controladores/delete.articulos.php?titulo=<?=$art['titulo']?>">Borrar</a>
                <br><br>

            <?php endforeach; ?>

        </ul>
        	<?php else : ?>
        	<p>No hay articulos cargadas</p>
        	<?php endif; ?>

	</section> 
	</main>
	<section>
		<br>
		<a href="agregar.articulo.php">Agregar Articulo</a>
    <br>
    <br>
    
	</section>

</body>
</html>