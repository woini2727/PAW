<?php
require __DIR__ . '/../modelo/articulo_class.php';

$titulo=$_GET['titulo'];

$articuloModel = new articulo();
$id_art= $articuloModel->get_id_art($titulo);

foreach ($id_art as $id ) {
		articulo::borrarObjeto('titulo',"'".$titulo."'",$id['id_articulo']);
}
header('Location: ../vista/index.php');
