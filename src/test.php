<?php
require_once __DIR__ . '/bootstrap.php';

$class = 'tag_src_hi';
$path = __DIR__ . DIRECTORY_SEPARATOR . strtr($class, '_', DIRECTORY_SEPARATOR) . '.php';
echo $path;