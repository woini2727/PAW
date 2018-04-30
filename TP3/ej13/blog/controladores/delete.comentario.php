<?php
require __DIR__ . '/../modelo/Comentario.php';
$id_comentario=$_GET['id_comentario'];


Comentario::eliminarComentario($id_comentario);
header('Location: ../vista/index.php');