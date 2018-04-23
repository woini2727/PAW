<?php
require __DIR__ . '/../modelo/tag.php';
$TagModel = new Tag();
$tag = $TagModel->selectAll();
$tag_select=$TagModel->selectNoRepeat();