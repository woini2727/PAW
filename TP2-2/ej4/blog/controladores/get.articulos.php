<?php
require __DIR__ . '/../modelo/articulo_class.php';

$articuloModel = new articulo();
$articulo = $articuloModel->selectAll();