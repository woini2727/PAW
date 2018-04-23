<?php
require __DIR__ . '/../modelo/Comentario.php';

$ComentarioModel = new Comentario();
$Comentario = $ComentarioModel->selectAll();