<!DOCTYPE html>
<html>
<head>
	<title>blog</title>
  <link rel="stylesheet" type="text/css" href="../css/blog.css" >
    <link rel="stylesheet" type="text/css" href="../css/print.css" media="print">
</head>
<body class="body">
	<main>
	<section class="articulo">

		<h1>Mis Publicaciones</h1>
		 	 <?php if ($articulo) : ?>
        <ul>
            <?php foreach ($articulo as $art) : ?>
            <article class="post">
            <h3 class="titulo" ><?= $art['titulo'] ?> <? //$art['foto'] ?> </h3> 
           	 	<figure>
           	 	<figcaption >	
           	 	<img class="img" src=<?= $art['foto']?> width="640" height="480">
                </figcaption>
            	</figure>
              <section class="scomentario">
                <h4 >Comentarios:</h4>
                   <?php if ($Comentario) : ?>   
                      <?php foreach ($Comentario as $comm) : ?>
                         <?php if ($art['id_articulo']==$comm['id_art']) : ?>  
                            <li class="comentario"><p><?=$comm['comentario'] ?></p></li>
                            <a   href="../controladores/delete.comentario.php?id_comentario=<?=$comm['id_comentario']?>">Borrar</a>
                         <?php endif; ?>
                      <?php endforeach; ?>
                      <br><br>
                      <a class="link" href="agregar.comentario.php?id_articulo=<?=$art['id_articulo']?>" >Agregar Comentario</a>
                   <?php endif; ?><br>
                </section>
                <section class="stag">
                 <h4>Tags</h4>
                 <?php if ($tag) : ?> 
                      <?php foreach ($tag as $tg) : ?>
                            <?php if ($art['id_articulo']==$tg['id_articulo']) : ?> 
                              <p class="tag"><?=$tg['nombre_tag'] ?> </p>
                              
                            <?php endif; ?>
                      <?php endforeach; ?>
                 <?php endif; ?><br>

              </section>
            	<p class="fecha">fecha de publicacion: <?= $art['fecha'] ?></p>
                 
                <a  class="link" href="editar.articulo.php?fecha=<?= $art['fecha'] ?>&titulo=<?= $art['titulo'] ?>&foto=<?= $art['foto']?>">Editar Articulo</a>
                <a  class="link" href="../controladores/delete.articulos.php?titulo=<?=$art['titulo']?>">Borrar Articulo</a>
                <br><br>
              </article>
            <?php endforeach; ?>

        </ul>
        	<?php else : ?>
        	<p>No hay articulos cargadas</p>
        	<?php endif; ?>

	</section> 
	</main>
	<section class="footer">
		<br>
		<a href="agregar.articulo.php">Agregar Articulo</a>
    <br>
    <br>
    
	</section>

</body>
</html>