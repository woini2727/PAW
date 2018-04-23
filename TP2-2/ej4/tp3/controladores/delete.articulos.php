<?php
require __DIR__ . '/../modelo/articulo_class.php';

$titulo=$_GET['titulo'];
articulo::borrarObjeto('titulo',"'".$titulo."'");

header('Location: /laravel/PAW/tp3/vista/index.php');
