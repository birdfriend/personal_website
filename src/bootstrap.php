<?php

function loadClass($class)
{
	$path = __DIR__ . DIRECTORY_SEPARATOR . strtr($class, '_', DIRECTORY_SEPARATOR) . '.php';
	if(file_exists($path))
	{
		require_once $path;
		return true;
	}
	return false;
}

spl_autoload_register('loadClass');